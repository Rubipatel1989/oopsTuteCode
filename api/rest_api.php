REST API -> Representational State Transfer Application Programming Interface
REST APIs are based on a few principles:

Resources: REST APIs expose resources, which are identified by URIs (Uniform Resource Identifiers). 
    These resources can be manipulated using standard HTTP methods.
    HTTP Methods: REST APIs use standard HTTP methods to perform operations on resources:
    GET: Retrieve a representation of a resource.
    POST: Create a new resource.
    PUT: Update a resource.
    PATCH: Partially update a resource.
    DELETE: Delete a resource.

Stateless: REST APIs are stateless, meaning each request from a client to the server must contain 
    all the information necessary to understand the request. The server does not store any state 
    about the client.

Representation: Resources in a REST API are represented in a format such as JSON or XML. 
    Clients can request different representations of a resource (e.g., JSON, XML) based on their needs.