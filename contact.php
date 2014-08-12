<?php
$strName = 'Homepage';
include_once "header.php";
?>


<div class="jumbotron">
  <div class="container">
    <h1>Contact Us</h1>
    <p>We'll get back to you as soon as possible.<br />In case of emergency, call 911</p>
  </div>
</div>

<div class="container">
  <div class="row-fluid">
    <div class="col-lg-4 col-lg-offset-4 centered">
        <form role="form">
            <input type="text" id="username" placeholder="username">
                <?php //fake username input to help catch bots (rather than using captcha)
                ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" placeholder="Your name">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="phone number">Phone Number</label>
                <input type="tel" id="phone" placeholder="phone number">
            </div>
            <div class="form-group">
                <label for="message">Message?</label>
                <textarea id="message" placeholder="Type your question here"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
    </div>
    


<?php
include_once "footer.php";
?>