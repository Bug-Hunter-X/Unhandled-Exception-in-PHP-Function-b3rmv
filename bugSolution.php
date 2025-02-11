function myFunc() {
  try {
    // Some code here that might throw an exception
    if (someCondition) {
        throw new Exception('Something went wrong!');
    }
  } catch (Exception $e) {
    // Handle the exception gracefully
    error_log("An error occurred: " . $e->getMessage()); // Log the error
    // Other error handling actions, like displaying a user-friendly message
    echo "An error occurred. Please try again later.";
  }
}

myFunc();