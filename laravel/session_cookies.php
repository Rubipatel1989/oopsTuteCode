Sessions and cookies are handled through the built-in session and cookie management features.
1. Session
    Laravel's session configuration is located in the config/session.php file. 
    We can set the session driver, lifetime, encryption, and other settings here. 
    The default session driver is file, but you can change it to cookie, database, memcached, 
    redis, dynamodb, or array.
    a. session(['key' => 'value']);
    b. $value = session('key');
    c. session()->forget('key'); [Remove single session]
    d. session()->flush();  [Remove All Session]

2. Managing Cookies in Laravel
    You can set cookies using the cookie helper or the Cookie facade.

    a. $response = new \Illuminate\Http\Response('Hello World');
    b. $response->withCookie(cookie('name', 'value', $minutes));
    c. $value = $request->cookie('name');
    d. Cookie::queue(Cookie::forget('name'));
