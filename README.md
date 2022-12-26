# Device Redirection Script

This script redirects users to different URLs based on the type of device they are using. Android and iPhone users are redirected to the appropriate website, while other users are shown a warning message.

## How to use

1. Upload the `redirect.php` file to your web server.
2. Set the URLs for the Android and iPhone websites in the `$android_url` and `$iphone_url` variables, respectively.
3. Place the following code at the top of your PHP script:
```
 <?php
  include 'redirect.php';
?>
```
And also you can use html file too


## Requirements

- PHP 5.4 or higher

## Note

Make sure to place the redirection code at the top of your PHP script, before any other output is sent to the browser.

## License

This script is licensed under the [MIT License](LICENSE).

## Credits

Created by muhammad midhlaj.

### Disclaimer

This script is provided "as is" with no warranty. Use at your own risk.
