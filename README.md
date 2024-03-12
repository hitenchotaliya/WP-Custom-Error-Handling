# WP-Custom-Error-Handling
WordPress plugin demonstrating HTTP requests and error logging. Fetch data from external APIs, handle errors with ease. Ideal for developers

# Custom Error Log Function

This function provides a simple and flexible way to log errors and data to a file within a WordPress plugin. It's useful for debugging and logging important information during plugin development.

## Function Overview

The `custom_error_log()` function performs the following tasks:

- Creates a log directory if it doesn't exist.
- Generates a log file with the current date.
- Logs the provided message and optional data into the log file.

### Parameters

- `$message` (string): The error message or description.
- `$data` (mixed, optional): Additional data to be logged along with the message.

### Usage

To use the `custom_error_log()` function, simply call it with the appropriate parameters:

```php
custom_error_log($message, $data);
