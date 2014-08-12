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
    <div class="col-md-8 col-md-offset-2 centered">
        <h2>Contact Information</h2>
      <table class="table-striped" width=100%>
        <tr><td><p class="lead">Phone</p></td><td><a href="tel:+16308203360">(630) 820-3360</a></td></tr>
        <tr><td><p class="lead">Fax</p></td><td><a href="tel:+16308206864">(630) 820-6864</a></td></tr>
        <tr><td><p class="lead">Email</p></td><td><a href="mailto:contact@maneks.net">contact@maneks.net</a></td></tr>
        <tr><td><p class="lead">Address</p></td><td><a href="https://www.google.com/maps/preview?q=475+N+Farnsworth+Ave,+Aurora,+IL&hl=en&ll=41.765406,-88.281133&spn=0.008819,0.01884&sll=39.739318,-89.266507&sspn=9.305214,19.291992&oq=475&hnear=475+N+Farnsworth+Ave,+Aurora,+Illinois+60505&t=m&z=16" target="_blank">475 N. Farnsworth Ave<br />Aurora, IL 60505</a></td></tr>
      </table>
    </div>
  </div>
  <div class="row-fluid">
    <div class="col-md-8 col-md-offset-2 centered">
        <h2>Send a message to the pharmacist</h2>
        <form role="form">
            <div class="form-group">
            <input type="text" id="username" placeholder="username" hidden="true">
                <?php //fake username input to help catch bots (rather than using captcha)
                ?>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" placeholder="Your name">
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="phone number">Phone Number</label>
                <input type="tel" id="phone" class="form-control" placeholder="phone number">
            </div>
            <div class="form-group">
                <label for="message">Message?</label>
                <br />
                <textarea class="form-control" rows="5" id="message" placeholder="Type your question here"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
    </div>
  </div> <!-- /row -->
</div> <!-- /container -->
    


<?php
include_once "footer.php";
?>