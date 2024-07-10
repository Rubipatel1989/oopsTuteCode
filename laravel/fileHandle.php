File uploads in Laravel can be handled using the request()->file('file') 
method to retrieve the uploaded file and then using the store, storeAs, 
or move methods to save it to a disk. The Storage facade is used to 
manage file storage.