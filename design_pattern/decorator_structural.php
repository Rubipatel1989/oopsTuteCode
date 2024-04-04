<?php

// The Decorator pattern is used to add new functionality to an object dynamically without altering its structure. 
// We could use it to add logging or caching to an existing object without modifying its code.

// Component interface
interface Text {
    public function getText(): string;
}

// Concrete component
class PlainText implements Text {
    protected $text;

    public function __construct(string $text) {
        $this->text = $text;
    }

    public function getText(): string {
        return $this->text;
    }
}

// Decorator
abstract class TextDecorator implements Text {
    protected $text;

    public function __construct(Text $text) {
        $this->text = $text;
    }

    abstract public function getText(): string;
}

// Concrete decorators
class BoldDecorator extends TextDecorator {
    public function getText(): string {
        return "<b>" . $this->text->getText() . "</b>";
    }
}

class ItalicDecorator extends TextDecorator {
    public function getText(): string {
        return "<i>" . $this->text->getText() . "</i>";
    }
}

class UnderlineDecorator extends TextDecorator {
    public function getText(): string {
        return "<u>" . $this->text->getText() . "</u>";
    }
}

// Usage
$text = new PlainText("Hello, world!");

$boldText = new BoldDecorator($text);
echo $boldText->getText() . "\n";

$italicText = new ItalicDecorator($text);
echo $italicText->getText() . "\n";

$underlineText = new UnderlineDecorator($text);
echo $underlineText->getText() . "\n";

$boldItalicText = new BoldDecorator(new ItalicDecorator($text));
echo $boldItalicText->getText() . "\n";

// In this example, the Text interface represents the component that we want to decorate. The PlainText class is the 
// concrete component representing plain text. The TextDecorator class is the abstract decorator that implements the 
// Text interface and holds a reference to a Text object. The concrete decorators (BoldDecorator, ItalicDecorator, 
// UnderlineDecorator) add specific formatting to the text by extending the TextDecorator class and overriding 
// the getText method.