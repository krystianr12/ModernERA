<!DOCTYPE html>
<html lang="en">

  <?php

    $page_title = "Digital Marketing Agency | ModernERA DMA";
    $page_description = "From hosting your website to marketing your business, we're a one stop shop for all your marketing needs!";
    $page_keywords = "KEYWORDS HERE";

    include($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');

    ?>

  <section class="page-header" id="header-domains" style="background-image: url('/assets/images/bg/office.jpg');">
    <div class="wrapper">
      <h1 class="header-shadow-dark white">Search for a domain and <span class="text-brand-color">start building</span> your site.</h1><br>
      <p class="white">If you don't have a name already for you website, dont worry, we will help you find one. With our specialized tools we will make sure you find a domain name that fits perfectly to your business model.</p>
      <div class="wrapper-domain">
        <form action="index.html" method="post">
          <input class="domain-search" id="domain-value" type="text" placeholder="Search for domain...">
          <input class="domain-btn" id="search-domain" type="button" name="submit" value="Search">
        </form>
      </div>
    </div>
  </section>

  <section id="intro">
    <div class="container pad50">
      <div class="row">
        <div class="col-lg-6">
          <img class="img-responsive pull-left" src="/assets/images/others/domain-name.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <h2 class="pad-t15">What's a domain name?</h2><br>
          <p>Ever wondered what's a domain name or if you need it for your website? A domain name is used to locate a website on the internet. It works kind of like the name given to a child at birth. The domain name points to the server that hosts a website. For example, you found our website on the internet and used our domain name (moderneradma.com) to access it.</p>
          <br>
          <p>An interesting fact about domains is that there are many more options than just a ".com" domain. You can choose among many TLD (Top Level Domains) that would make your name stand out. Options like .pizza, .shop, .club, .developer are just a few of the many options you have when looking for the right domain name.<br>
          <br>
          </strong></p>
        </div>
      </div>
    </div>
  </section>

  <section id="domain-c2a">
    <div class="container-fluid">
      <div class="row dark">
        <div class="container">
          <div class="col-lg-8 pad60">
            <h3>Are you ready to buy the perfect domain name?</h3><br>
            <p>If you don't have a name already for you website, dont worry, we will help you find one. With our specialized tools we will make sure you find a domain name that fit perfectly for your business model. Type in a name for your business below!</p>
          </div>

          <div class="col-lg-4 pad60 text-center">
            <p style="font-size: 22px;">Starting only at<br><br><span class="text-brand-color" style="font-size: 40px; font-weight: bold;">$12.99/year</span></p><br>
            <a class="btn btn-primary" href="#">Order now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php') ?>

</html>
