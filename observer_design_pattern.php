<?php


// The Reactor Pattern utilizes an intermediary service handler which demultiplexes requests and dispatches to the correct handler.

// The Observer Pattern requires that "Observers" register with the subject, which then pushes notifications to all registered observers when an event occurs.

// Interface for the Subject (Observable)
interface Subject {
  public function attach(Observer $observer): void;
  public function detach(Observer $observer): void;
  public function notify(): void;
}

// Interface for the Observer (Subscriber)
interface Observer {
  public function update(Subject $subject): void;
}

// Concrete class representing the Subject (Observable)
class NewsPublisher implements Subject {

  private $observers = [];
  private $news;

  public function attach(Observer $observer): void {
    $this->observers[] = $observer;
  }

  public function detach(Observer $observer): void {
    $key = array_search($observer, $this->observers, true);
    if ($key !== false) {
      unset($this->observers[$key]);
    }
  }

  public function setNews(string $news): void {
    $this->news = $news;
    $this->notify();
  }

  public function notify(): void {
    foreach ($this->observers as $observer) {
      $observer->update($this);
    }
  }
}

// Concrete class representing the Observer (Subscriber)
class EmailSubscriber implements Observer {

  public function update(Subject $subject): void {
    if ($subject instanceof NewsPublisher) {
      echo "Email subscriber received news update: " . $subject->news . "\n";
    }
  }
}

// Concrete class representing another Observer (Subscriber)
class SMSSubscriber implements Observer {

  public function update(Subject $subject): void {
    if ($subject instanceof NewsPublisher) {
      echo "SMS subscriber received news update: " . $subject->news . "\n";
    }
  }
}

// Usage example
$publisher = new NewsPublisher();

$emailSubscriber = new EmailSubscriber();
$smsSubscriber = new SMSSubscriber();

$publisher->attach($emailSubscriber);
$publisher->attach($smsSubscriber);

$publisher->setNews("Breaking news: New product launched!");