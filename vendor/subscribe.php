<?php
// Put your MailChimp API and List ID hehe
   $api_key = 'aaacca9bfb1d2e5d3edc877ac6448de0-us16';
   $list_id = 'c6734c815a';

   // Let's start by including the MailChimp API wrapper
   include('./MailChimp.php');
   // Then call/use the class
   use \DrewM\MailChimp\MailChimp;
   $MailChimp = new MailChimp($api_key);

   // Submit subscriber data to MailChimp
   // For parameters doc, refer to: http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
   // For wrapper's doc, visit: https://github.com/drewm/mailchimp-api
   $result = $MailChimp->post("lists/$list_id/members", [
                           'email_address' => $_POST["email"],
                           'merge_fields'  => ['FNAME'=>$_POST["fname"], 'LNAME'=>$_POST["lname"],'PHONE'=>$_POST["tel"], 'MSG'=>$_POST["msg"]],
                           'status'        => 'subscribed',
                       ]);

   if ($MailChimp->success()) {
       // Success message
       echo "<p>Thank you, you have been added to our mailing list.</p>",
       echo "<button type="button" data-dismiss="modal">Close</button>";

   } else {
       // Display error
       echo "<p>There's something wrong with your submission, please try again.</p>";
       // Alternatively you can use a generic error message like:
       // echo "<h4>Please try again.</h4>";
   }
?>
