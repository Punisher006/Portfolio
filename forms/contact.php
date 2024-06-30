<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://Ramcarter Enterprise/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'ramcarter.enterprise@outlook.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

 // Create a new instance of PHP_Email_Form
 $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $contact->smtp = array(
  'host' => 'smtp-mail.outlook.com',
  'username' => 'ramcarter.enterprise@outlook.com',
  'password' => 'Kerry@2017',
  'port' => '587',
  'encryption' => 'tls'
);

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 20);

  echo $contact->send();
?>
