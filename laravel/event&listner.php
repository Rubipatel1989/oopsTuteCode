<?php
    // 1. Events
    // Events are typically defined as classes in the App\Events directory. 
    // An event class is essentially a data container that holds the information about the event.
namespace App\Events;

use App\Models\Order;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class OrderShipped
{
    use Dispatchable, SerializesModels;

    public $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }
}

// 2. Listeners:
// Listeners handle the event and contain the logic that should be executed
// when the event is triggered. They are usually defined in the App\Listeners directory.

// app/Listeners/SendShipmentNotification.php
namespace App\Listeners;

use App\Events\OrderShipped;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendShipmentNotification
{
    public function handle(OrderShipped $event)
    {
        // Access the order using $event->order...
        // Send a notification, email, etc.
    }
}
