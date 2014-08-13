<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Aurora Pharmacy<?php echo (isset($strName)? " | " . $strName : "") ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aurora Pharmacy is a locally-owned, independent pharmacy that has been
    serving the needs of patients for over 20 years.">
    <meta name="keywords" content="Pharmacy,Aurora,Illinois,Healthcare,Spanish,Espanol,Espa–ol">
    <meta name="author" content="">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-53387128-1', 'auto');
      ga('send', 'pageview');
    
    </script>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      #hours {
      float: left;
      }
    </style>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- <link href="css/bootstrap-theme.min.css" rel="stylesheet"> -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="favicon.ico">
  </head>

  <body>

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="../">Aurora Pharmacy</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?php if($_SERVER['PHP_SELF'] == 'contact.php') echo 'class="active"' else echo "class='".$_SERVER['PHP_SELF']."'"; ?> ><a href="../contact.php">Contact Us</a></li>
            </ul>
        </div>
      </div>
    </div>
