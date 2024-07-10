<?php
// Dependency injection is a technique where one object supplies the dependencies of another object.
// Laravel’s service container is responsible for managing class dependencies 
// and performing dependency injection. This makes it easy to manage
// class dependencies and perform dependency injection through constructors or methods.

// app/Services/MessageService.php
namespace App\Services;

class MessageService
{
    public function getGreetingMessage($name)
    {
        return "Hello, $name! Welcome to Laravel Dependency Injection.";
    }
}


// app/Http/Controllers/GreetingController.php
namespace App\Http\Controllers;

use App\Services\MessageService;
use Illuminate\Http\Request;

class GreetingController extends Controller
{
    protected $messageService;

    // Dependency Injection via the constructor
    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function greet($name)
    {
        // Using the injected service
        $message = $this->messageService->getGreetingMessage($name);
        return response()->json(['message' => $message]);
    }
}
