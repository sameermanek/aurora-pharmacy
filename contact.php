<?php
$strName = 'Homepage';
include_once "header.php";
?>


<div class="jumbotron">
  <div class="container">
    <h1>Contact Us</h1>
    <p>We'll get back to you as soon as possible.<br />In case of emergency, call 911 immediately</p>
  </div>
</div>

<div class="container">
  <div class="row-fluid">
    <div class="col-md-8 col-md-offset-2 centered">
        <div class="well well-lg">
        <h2>Contact Information</h2>
          <table class="table-striped" width=100%>
            <tr><td><p class="lead">Phone</p></td><td><a href="tel:+16308203360">(630) 820-3360</a></td></tr>
            <tr><td><p class="lead">Fax</p></td><td><a href="tel:+16308206864">(630) 820-6864</a></td></tr>
            <tr><td><p class="lead">Email</p></td><td><a href="mailto:contact@maneks.net">contact@maneks.net</a></td></tr>
            <tr><td><p class="lead">Address</p></td><td><a href="https://www.google.com/maps/preview?q=475+N+Farnsworth+Ave,+Aurora,+IL&hl=en&ll=41.765406,-88.281133&spn=0.008819,0.01884&sll=39.739318,-89.266507&sspn=9.305214,19.291992&oq=475&hnear=475+N+Farnsworth+Ave,+Aurora,+Illinois+60505&t=m&z=16" target="_blank">475 N. Farnsworth Ave<br />Aurora, IL 60505</a></td></tr>
          </table>
        </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="col-md-8 col-md-offset-2 centered">

        <?php
        function cleanInput($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        
        function inputExists($data) {
          return !is_null($data) && trim($data) != "";
        }

        
        function validateEmail($strData) {
            return filter_var($strData, FILTER_VALIDATE_EMAIL);
        }
        
        function checkPhoneNumber($strData) {
            $arr = array(); // old versions of php seem to require all three parameters
            return (bool) preg_match_all('/[0-9]/', $strData, $arr) >= 7;
        }
        

        $blnAttempted = $_SERVER["REQUEST_METHOD"] == "POST";
        //count(array_intersect(array_keys($_POST), array('name','email','phone','message'))) !== 0;
      
        // handle the form -- if it is good send emails, otherwise fill in whatever possible and flag error
        if($blnAttempted && inputExists($_POST['username'])) {
          //shut it down
          echo '<div class="alert alert-success" role="alert"><h2>Thanks</h2><br /></div>';

        } elseif($blnAttempted && inputExists($_POST['name']) && (validateEmail($_POST['email']) || checkPhoneNumber($_POST['phone'])) && inputExists($_POST['message'])) {
          // do stuff. Send email, spit out 'thanks' message
          $strMessage = "New message received!\n\n";
          $strMessage .= "----------------------\n\n";
          $strMessage .= "Name: " . cleanInput($_POST['name']) . "\n";
          if(checkPhoneNumber($_POST['phone'])) $strMessage .= "Phone: " . cleanInput($_POST['phone']) . "\n";
          if(validateEmail($_POST['email'])) $strMessage .= "Email: " . validateEmail($_POST['email']) . "\n";
          $strMessage .= "Message: " . "\n\t" . wordwrap(cleanInput($_POST['message']), 75, "\n\t") . "\n";
          
          $strSubject = "New Aurora Pharmacy Message";
          $strHeaders = "From: contact@maneks.net\n";
          if(inputExists($_POST['email'])) $strHeaders .= "Reply-To: " . $_POST['email'] . "\n";
          
          $blnSuccess = mail('contact@maneks.net', $strSubject, $strMessage, $strHeaders);
          
          if(!$blnSuccess) {
            mail('support@maneks.net', 'Aurora Pharmacy website failed to send message', $strHeaders . '\n\n' . $strSubject . '\n\n' . $strMessage);
          }
          
          if($blnSuccess) {
            echo '<div class="alert alert-success" role="alert"><h2>Thanks</h2><br />You should hear back soon</div>';
          } else {
            echo '<div class="alert alert-info" role="alert"><h2>Something went wrong</h2><br />Sorry about that -- we had some trouble sending your message.<br />Please call or email the pharmacist directly<br />The webmaster has been notified of the issue</div>';
          }
          
        
          
          
        } else {
          // return the form w/ notes where there's missing information iff attempted
          include_once "form.php"; // uses $_POST and $blnAttempted
        }
        ?>

        
    </div>
  </div> <!-- /row -->
</div> <!-- /container -->
    


<?php
include_once "footer.php";
?>