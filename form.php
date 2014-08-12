
<?php

?>

<h2>Send a message to the pharmacist</h2>
<form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <div class="form-group">
    <input type="text" name="username" placeholder="username" hidden="true">
        <?php //fake username input to help catch bots (rather than using captcha)
        ?>
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <?php echo ($blnAttempted && !inputExists($_POST['name']) ? '<div class="alert alert-danger">Name is required</div>' : "");?>
        <input type="text" class="form-control" name="name" placeholder="Your name" value="<?php echo ($blnAttempted && inputExists($_POST['name']) ? cleanInput($_POST['name']) : ""); ?>">
    </div>
    <div class="form-group">
      <label for="email">Email address</label>
      <?php echo ($blnAttempted && !inputExists($_POST['email']) && !inputExists($_POST['phone']) ? '<div class="alert alert-info">Either email or phone number is required</div>' : ""); ?>
      <input type="email" class="form-control" name="email" placeholder="Your email address" value="<?php echo ($blnAttempted && inputExists($_POST['email']) ? cleanInput($_POST['email']) : ""); ?>">
    </div>
    <div class="form-group">
      <label for="phone number">Phone</label>
      <?php echo ($blnAttempted && !inputExists($_POST['email']) && !inputExists($_POST['phone']) ? '<div class="alert alert-info">Either email or phone number is required</div>' : ""); ?>
      <input type="tel" class="form-control" name="phone" placeholder="Your phone number" value="<?php echo ($blnAttempted && inputExists($_POST['phone']) ? cleanInput($_POST['phone']) : ""); ?>">
    </div>
    <div class="form-group">
        <label for="message">Message?</label>
        <?php echo ($blnAttempted && !inputExists($_POST['message']) ? '<div class="alert alert-danger">A message is required</div>' : "");?>
        <textarea class="form-control" rows="5" name="message" placeholder="Type your question here"><?php echo ($blnAttempted && inputExists($_POST['message']) ? cleanInput($_POST['message']) : "")?></textarea>
    </div>
    <p class="help-block">
        Messages sent via this form are not encrypted.<br />
        Please call or stop by if you need to discuss any confidential or medically sensitive information with the pharmacist.
    </p>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>