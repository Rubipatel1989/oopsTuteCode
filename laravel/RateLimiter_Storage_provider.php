<?php


use Illuminate\Support\Facades\RateLimiter;
use Symfony\Component\HttpFoundation\Response;

public function apiEndpoint()
{
    // Define the rate limit
    $limit = 100;
    $decay = 1; // in minutes

    // Throttle the requests
    if (RateLimiter::tooManyAttempts('key', $limit)) {
        return response()->json(['message' => 'Too many requests'], Response::HTTP_TOO_MANY_REQUESTS);
    }

    // Process the request
    // ...

    // Increment the number of attempts
    RateLimiter::hit('key', $decay);

    return response()->json(['message' => 'Request processed']);
}
