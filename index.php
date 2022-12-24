<?php

// Get the user agent string
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Check if the user agent string contains "Android"
if (preg_match('/Android/i', $user_agent)) {
  // Redirect to Android URL
  header('Location: https://www.android.com/');
  exit;
}

// Check if the user agent string contains "iPhone"
elseif (preg_match('/iPhone/i', $user_agent)) {
  // Redirect to iPhone URL
  header('Location: https://www.apple.com/iphone/');
  exit;
}

// If the user is not using an Android or iPhone device, show a warning message
else {
  echo '<p>Sorry, this website is only available for Android and iPhone users.</p>';
}

?>
