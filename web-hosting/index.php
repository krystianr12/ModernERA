<!DOCTYPE html>
<html lang="en">

  <?php

    $page_title = "Web Hosting Services Near Me | Godaddy Hosting Services";
    $page_description = "";
    $page_keywords = "";

    include($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');

    ?>

  <section class="page-header" id="header-hosting" style="background-image: url('/assets/images/bg/webhosting.jpg');">
    <div class="dot-overlay"></div>
    <div class="wrapper">
      <h1 class="header-shadow-dark white"><span class="text-brand-color">Lightning-Fast</span><br><span style="font-size: 60px;">web hosting</span></h1><br>
      <p class="white" style="font-size: 30px;">MADE SIMPLE, CONVINIENT & AFFORDABLE</p><br><br>
      <p class="white" style="font-size: 20px;">Starting at only $3.99</p>
      <a class="btn btn-primary" href="#pricing">See plans</a>
    </div>
  </section>


  <!-- Domain Lookup Module -->
  <?php include($_SERVER['DOCUMENT_ROOT'].'/inc/module_domain_lookup.php') ?>


  <section id="intro">
    <div class="container pad50">
      <div class="row">
        <div class="col-lg-6">
          <img class="img-responsive pull-left" src="/assets/images/others/server-stack.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <h2 class="pad-t50">Big or small, we got your back.</h2><br>
          <p>It doesn't matter how big your website is because we're ready with the latest technologies to provide our customers with excellent service for all your web hosting needs. We know how important your online presence is for you and that's why we're here to help.</p><br>
          <div class="container" style="display: inline-block;">
            <img src="/assets/images/others/cpanel-logo.png" alt="" width="100px" style="margin-left: 10px;">
            <img src="/assets/images/others/php-logo.png" alt="" width="100px" style="margin-left: 20px;">
            <img src="/assets/images/others/wp-logo.png" alt="" width="70px" style="margin-left: 20px;">
            <img src="/assets/images/others/webmail_logo.png" alt="" width="150px" style="margin-left: 20px;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section style="background-color: #ddd;">
    <div class="container text-center pad60">
      <div class="row">
        <div class="col-lg-4">
          <i class="fa fa-clock-o fa-5x wow jackInTheBox" data-wow-duration="1s"></i>
          <h4 class="pad15">99.9% Uptime</h4>
          <p>Having your website <strong>offline is no fun</strong>. That's why our team works very hard to make sure your website is up and running all day long, <strong>no questions asked.</strong> </p>
        </div>
        <div class="col-lg-4">
          <i class="fa fa-lock fa-5x wow jackInTheBox" data-wow-duration="1s" data-wow-delay="0.25s"></i>
          <h4 class="pad15">Secure Hosting</h4>
          <p>You trust us with your business, <strong>we take care of your information</strong>. Your information is stored is <strong>secure servers</strong> to keep prying eyes away.</p>
        </div>
        <div class="col-lg-4">
          <i class="fa fa-group fa-5x wow jackInTheBox" data-wow-duration="1s" data-wow-delay="0.5s"></i>
          <h4 class="pad15">24/7 Customer Support</h4>
          <p>Our dedicated Support Team is <strong>ready to help</strong> whenever you need them. As simple as opening a <strong>support ticket</strong> or giving us a <strong>call anytime</strong>.</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="package-box">
            <div class="package-header">Starter</div>
            <div class="package-body">
              <div class="wrapper">
                <p>Starting at only</p>
                <strong id="price">$3.99</strong>/mo
                <p class="text-muted">Renewal Price: $3.99/mo</p>
                <a class="btn btn-primary" href="https://billing.moderneradma.com/cart.php?a=add&pid=1">Sign Up</a>
              </div>
              <ul class="package-features">
                <li>All important features <i class="fa fa-question-circle" data-toggle="important-features"></i></li>
                <li><strong>Free</strong> domain forever</li>
                <li><strong>Up to</strong> 1 website per account</li>
                <li><strong>Up to</strong> 5GB of SSD Storage</li>
                <li><strong>Up to</strong> 20GB Bandwidth</li>
                <li><strong>Unlimited</strong> FTP Accounts</li>
                <li><strong>Unlimited</strong> Email Accounts</li>
                <li><strong>Up to</strong> 1 Database</li>
              </ul>
            </div>
            <div class="package-footer"><a href="https://billing.moderneradma.com/cart.php?a=add&pid=1">Buy now</a></div>

            <div class="important-features" style="visibility: hidden;">
              <h4>Important Features</h4>
              <ul style="">
                <li><i class="fa fa-check-circle" style="color: green;"></i> cPanel & Softaculous</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> Multiple PHP Versions</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> Free Website Transfer</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> 99.9% Up-time</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> Free Let's Encrypt SSL Certificate</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> Free Hosting Security</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> 24/7 Support</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="package-box" id="featured-package">
            <div class="package-header">Premium</div>
            <div class="package-body">
              <div class="wrapper">
                <p>Starting at only</p>
                <strong id="price">$10.99</strong>/mo
                <p class="text-muted">Renewal Price: $10.99/mo</p>
                <a class="btn btn-primary" href="https://billing.moderneradma.com/cart.php?a=add&pid=2">Sign Up</a>
              </div>
              <ul class="package-features">
                <li>All important features <i class="fa fa-question-circle" data-toggle="important-features"></i></li>
                <li><strong>Up to</strong> 2 free domains forever</li>
                <li><strong>Up to</strong> 2 websites per account</li>
                <li><strong>Up to</strong> 10GB of SSD Storage</li>
                <li><strong>Up to</strong> 30GB Bandwidth</li>
                <li><strong>Unlimited</strong> FTP Accounts</li>
                <li><strong>Unlimited</strong> Email Accounts</li>
                <li><strong>Up to</strong> 3 Databases</li>
              </ul>
            </div>
            <div class="package-footer"><a href="https://billing.moderneradma.com/cart.php?a=add&pid=2">Buy now</a></div>

            <div class="important-features" style="visibility: hidden;">
              <h4>Important Features</h4>
              <ul style="">
                <li><i class="fa fa-check-circle" style="color: green;"></i> cPanel & Softaculous</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> Multiple PHP Versions</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> Free Website Transfer</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> 99.9% Up-time</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> Free Let's Encrypt SSL Certificate</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> Free Hosting Security</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> 24/7 Support</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="package-box">
            <div class="package-header">Business</div>
            <div class="package-body">
              <div class="wrapper">
                <p>Starting at only</p>
                <strong id="price">$17.99</strong>/mo
                <p class="text-muted">Renewal Price: $17.99/mo</p>
                <a class="btn btn-primary" href="https://billing.moderneradma.com/cart.php?a=add&pid=4">Sign Up</a>
              </div>
              <ul class="package-features">
                <li>All important features <i class="fa fa-question-circle" data-toggle="important-features"></i></li>
                <li><strong>Unlimited</strong> Websites</li>
                <li><strong>Unlimited</strong> Domains</li>
                <li><strong>Unlimited</strong> SSD Storage</li>
                <li><strong>Unlimited</strong> Bandwidth</li>
                <li><strong>Unlimited</strong> FTP Accounts</li>
                <li><strong>Unlimited</strong> Email Accounts</li>
                <li><strong>Unlimited</strong> Databases</li>
              </ul>
            </div>
            <div class="package-footer"><a href="https://billing.moderneradma.com/cart.php?a=add&pid=4">Buy now</a></div>

            <div class="important-features" style="visibility: hidden;">
              <h4>Important Features</h4>
              <ul style="">
                <li><i class="fa fa-check-circle" style="color: green;"></i> cPanel & Softaculous</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> Multiple PHP Versions</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> Free Website Transfer</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> 99.9% Up-time</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> Free Let's Encrypt SSL Certificate</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> Free Hosting Security</li>
                <li><i class="fa fa-check-circle" style="color: green;"></i> 24/7 Support</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php') ?>

</html>
