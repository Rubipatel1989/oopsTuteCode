<?php

// The Facade Design Pattern is a structural design pattern that provides a simplified interface to a complex system 
// of classes, libraries, or APIs. It encapsulates the interactions with the subsystem and provides a 
// higher-level interface that is easier to use and understand.

class CPU {
    public function processData() {
        return "Processing data...";
    }
}

class Memory {
    public function load() {
        return "Loading memory...";
    }
}

class HardDrive {
    public function readData() {
        return "Reading data from hard drive...";
    }
}

// Facade
class ComputerFacade {
    private $cpu;
    private $memory;
    private $hardDrive;

    public function __construct() {
        $this->cpu = new CPU();
        $this->memory = new Memory();
        $this->hardDrive = new HardDrive();
    }

    public function start() {
        $result = "";
        $result .= $this->cpu->processData() . "\n";
        $result .= $this->memory->load() . "\n";
        $result .= $this->hardDrive->readData() . "\n";
        return $result;
    }
}

// Client code
$computer = new ComputerFacade();
echo $computer->start();