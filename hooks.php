<?php

// hooks are commonly used in extend or modify the behavior of the framework or application at specific points in its execution. Hooks are often 
// implemented using a design pattern such as the Observer pattern or the Event Listener pattern.

class EventManager {
    private $listeners = [];

    public function attach($eventName, $callback) {
        $this->listeners[$eventName][] = $callback;
    }

    public function trigger($eventName, $data = null) {
        if (isset($this->listeners[$eventName])) {
            foreach ($this->listeners[$eventName] as $callback) {
                call_user_func($callback, $data);
            }
        }
    }
}

$eventManager = new EventManager();

// Attach a callback to the "before_save" event
$eventManager->attach('before_save', function($data) {
    echo "Before save event\n";
    // Modify the data or perform some action before saving
});

// Trigger the "before_save" event
$eventManager->trigger('before_save', ['some_data']);