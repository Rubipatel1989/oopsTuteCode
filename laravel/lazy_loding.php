<?php
// Lazy loading in Laravel can lead to performance issues, especially when dealing
//  with large datasets and complex relationships, 
//  as it causes multiple queries to be executed

//Using with Method:
$users = User::with('posts')->get();