<?php
// Check the HTTP request method (GET or POST) sent to the server
// $_SERVER["REQUEST_METHOD"] tells us how the page was accessed

/* 
 * Commented Example: Basic handling of POST and GET requests
 * - POST: Displays username and language from form submission
 * - GET: Checks for query parameters (e.g., ?username=John&lang=english)
 * - @ suppresses warnings if parameters are missing
 */
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     echo "name is ", $_POST["username"]; // Output username from POST data
//     echo "<br>";
//     echo $_POST["lang"]; // Output selected language
// } elseif ($_SERVER["REQUEST_METHOD"] === "GET") {
//     $name = @$_GET["username"]; // Get username from URL (if any)
//     $lang = @$_GET["lang"]; // Get language from URL (if any)
//     echo "welcom from {$name} GET method "; // Welcome message
// }

// Advanced Example: Redirect based on selected language
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Check the 'lang' value submitted via the form
  if ($_POST["lang"] === "arabic") {
    // Redirect to Arabic page
    header("Location: ar.php");
    exit(); // Stop script execution after redirect
  } elseif ($_POST["lang"] === "english") {
    // Redirect to English page
    header("Location: en.php");
    exit(); // Ensure no further code runs
  } elseif ($_POST["lang"] === "spanish") {
    // Redirect to Spanish page
    header("Location: sp.php");
    exit();
  } else {
    // Redirect to error page for invalid/empty language (e.g., "chelha")
    header("Location: errLaguage.php");
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Set character encoding to UTF-8 for proper text display -->
  <meta charset="UTF-8">
  <!-- Ensure responsive design for mobile devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Support</title>
</head>

<body>
  <!-- Form to collect username and language, submits as POST request -->
  <form method="POST">
    <!-- Text input for user's full name -->
    <input type="text" name="username" placeholder="full name">
    <!-- Dropdown for selecting language -->
    <select name="lang">
      <option value="arabic">Arabic</option>
      <option value="english">English</option>
      <option value="spanish">Spanish</option>
      <option value="">chelha</option> <!-- Empty value for "chelha" -->
    </select>
    <!-- Submit button to send form data -->
    <input type="submit" value="Send">
  </form>
</body>

</html>