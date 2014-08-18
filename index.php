<?php
$strName = 'Homepage';
include_once "header.php";
?>

<div class="jumbotron">
  <div class="container">
    <h1>Aurora Pharmacy</h1>
    <p>Compare our prices and service</p>
  </div>
</div>

<div class="container">
  <div class="row-fluid">
    <div class="col-md-4">
      <div class="well sidebar-nav">
        <ul class="nav nav-list">
          <li class="nav-header"><strong>Contact Information</strong></li>
          <li>
            <address>
              <a href="https://www.google.com/maps/preview?q=475+N+Farnsworth+Ave,+Aurora,+IL&hl=en&ll=41.765406,-88.281133&spn=0.008819,0.01884&sll=39.739318,-89.266507&sspn=9.305214,19.291992&oq=475&hnear=475+N+Farnsworth+Ave,+Aurora,+Illinois+60505&t=m&z=16" target="_blank">
                475 N Farnsworth Ave<br>
                Aurora, IL 60505<br>
              </a>
              Phone: <a href="tel:+16308203360">(630) 820-3360</a><br>
              Fax: <a href="tel:+16308206864">(630) 820-6864</a><br>
              Email: <a href="mailto:contact@aurora-pharmacy.com">contact@aurora-pharmacy.com</a>
            </address>
          </li>
          <hr/>
          <li class="nav-header"><strong>Hours</strong></li>
          <li>
            <table class="table">
              <tr>
                <td>Mon - Fri</td>
                <td>10AM-7PM</td>
              </tr>

              <tr>
                <td>Sat</td>
                <td>10AM-2PM</td>
              </tr>

              <tr>
                <td>Sun</td>
                <td>Closed</td>
              </tr>                  
            </table>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-md-8">
      <div id="carousel" class="carousel slide" data-rise="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <a href="https://www.google.com/maps/preview?q=475+N+Farnsworth+Ave,+Aurora,+IL&hl=en&ll=41.765406,-88.281133&spn=0.008819,0.01884&sll=39.739318,-89.266507&sspn=9.305214,19.291992&oq=475&hnear=475+N+Farnsworth+Ave,+Aurora,+Illinois+60505&t=m&z=16" target="_blank">
              <img id="googleMapImage" src="" width=100%/>
            </a>
          </div>
          <div class="item">
            <img src="img/pharmacy.jpg">
          </div>
          <div class="item">
            <img src="img/photo.jpg">
          </div>
        </div>
        
        <!-- controls -->
          <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>
      
    </div>
      <div class="row-fluid">
        <div class="col-md-4">
          <h2>Hablamos Espa&ntilde;ol</h2>
          <p>Nuestras empleadas hablan Espa&ntilde;ol. Estamos listos para ayudarles en cualquier pregunta que tengan.<br />
          Acceptamos la mayora de seguros medicos incluyendo Medicaid y Medicare Parte D.</p>
        </div><!--/span-->
        <div class="col-md-4">
          <h2>Great Service</h2>
          <p>
            Aurora Pharmacy is a family business that has proudly served Aurora since 1993.
            We're locally owned and operated, and we'll go out of our way to make you happy.
            We accept most insurance plans including Medicaid and Medicare Part D</p>
        </div><!--/span-->
        <div class="col-md-4">
          <h2>Free Delivery</h2>
          <p>We're pleased to offer free delivery. Call for details.</p>
          <br />
          <p><em>Ofrecemos entrega a domicilio gratis. Llamar para mas informacion</em></p>
        </div><!--/span-->
      </div><!--/row-->
    </div><!--/span-->
  </div><!--/row-->
</div> <!-- /container -->



<?php
include_once "footer.php";
?>