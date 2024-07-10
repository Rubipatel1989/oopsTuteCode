<?php
// 1. Eager Loading:

// Instead of this
$users = User::all();
foreach ($users as $user) {
    echo $user->profile->name;
}

// Use this
$users = User::with('profile')->get();
foreach ($users as $user) {
    echo $user->profile->name;
}
// 2. Use Chunking:
User::chunk(100, function ($users) {
    foreach ($users as $user) {
        // Process each user
    }
});
// 3 Indexing
//4 Use queues for time-consuming tasks
//5. Use a content delivery network (CDN) for static assets
