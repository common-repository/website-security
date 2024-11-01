<?php
/*******************************
 * Plugin Name:  Wordpress Site Security
 * Plugin URI:   https://ziscom.today/2019/06/03/wordpress-site-security/
 * Description:  Third party apps can't remotely communiate with your wordpress site. Hide login errors for hackers.
 * Version:      1.0
 * Author:       Ziscom
 * Author URI:   https://ziscom.today
 * License:      GPL2 or later
 *******************************/
 
// XML-RPC एक तरीका है जो तृतीय पक्ष एप्लिकेशन को दूरस्थ रूप से आपकी WordPress साइट के साथ संवाद करने की अनुमति देता है । यह सुरक्षा मुद्दों के कारण हो सकता है और हैकर्स द्वारा शोषण किया जा सकता है ।  इस कोड का उपयोग कर WordPress में XML-RPC बंद करें ।

add_filter('xmlrpc_enabled', '__return_false');

//WordPress में लॉगिन त्रुटियों हैकर्स द्वारा इस्तेमाल किया जा सकता है लगता है कि क्या वे गलत उपयोगकर्ता नाम या पासवर्ड में प्रवेश किया । WordPress में लॉगिन त्रुटियों छुपाएं इस कोड का उपयोग कर ।

function wss_wp_login_errors_hide(){
  return 'Wordpress Site Security is monitoring your login attempt. Please enter correct details.';
}
add_filter( 'login_errors', 'wss_wp_login_errors_hide' );
