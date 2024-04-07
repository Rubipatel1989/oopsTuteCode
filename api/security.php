Some common security practices for securing a PHP REST API:

Use HTTPS: Always use HTTPS to encrypt data transmitted between clients and the server. 
    This protects against eavesdropping and man-in-the-middle attacks.

Authentication: Implement strong authentication mechanisms, such as OAuth, JWT (JSON Web Tokens), 
    or API keys, to verify the identity of clients accessing your API.

Authorization: Use authorization mechanisms to control access to different parts of your 
    API based on the authenticated user's permissions.

Input Validation: Validate all input received from clients to prevent injection attacks, 
    such as SQL injection, and ensure that the data meets expected criteria.

SQL Injection Prevention: Use parameterized queries or prepared statements when 
    interacting with the database to prevent SQL injection attacks.

Cross-Site Scripting (XSS) Prevention: Use output escaping and content security policies 
    (CSP) to prevent XSS attacks by sanitizing user input and disallowing inline scripts.

Cross-Origin Resource Sharing (CORS): Implement CORS headers to control which domains 
    can access your API to prevent unauthorized cross-origin requests.

Rate Limiting: Implement rate limiting to prevent abuse of your API by limiting the number
     of requests a client can make within a certain timeframe.

Logging and Monitoring: Log API access and errors to track and analyze potential security
     threats. Implement monitoring to detect and respond to suspicious activity.

Secure Configuration: Ensure that your server and PHP configuration are secure, 
    including keeping software up to date, disabling unnecessary services, and using secure protocols and ciphers.