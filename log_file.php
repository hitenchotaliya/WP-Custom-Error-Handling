/**
 * Logs an error message and optional data to a log file.
 *
 * @param string $message The error message or description.
 * @param mixed $data Additional data to be logged (optional).
 * @return void
 */
function custom_error_log($message, $data = '')
{
    // Define the directory where log files will be stored
    $log_dir = trailingslashit(plugin_dir_path(__FILE__)) . 'log/';

    // Create the log directory if it doesn't exist
    if (!is_dir($log_dir)) {
        mkdir($log_dir);
    }

    // Define the log file name with the current date
    $log_file = $log_dir . date('Y-m-d') . '.log';

    // If the log file doesn't exist, create it
    if (!is_file($log_file)) {
        file_put_contents($log_file, '');
    }

    // If additional data is provided, format it properly
    if (!empty($data)) {
        if (is_array($data) || is_object($data)) {
            // If $data is an array or object, format it as JSON
            $message = array($message => $data);
        } else {
            // If $data is a string, append it to the message
            $message = "$message: $data\n";
        }
    }

    // Convert the message to a string and append a new line
    $data_string = print_r($message, true) . "\n";

    // Append the data string to the log file
    file_put_contents($log_file, $data_string, FILE_APPEND);
}
