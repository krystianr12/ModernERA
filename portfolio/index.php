<!DOCTYPE html>
<html lang="en">

  <?php

    $page_title = "Digital Marketing Agency | ModernERA DMA";
    $page_description = "From hosting your website to marketing your business, we're a one stop shop for all your marketing needs!";
    $page_keywords = "KEYWORDS HERE";

    include($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');

    ?>

  <!-- Start Portfolio Section -->
  <section class="pad-t80 pad-b50">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title text-center">
                      <h3>Some of our work</h3>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <ul class="filter">
                      <li><a class="active" href="#" data-filter="*">Show All</a></li>
                      <li><a href="#" data-filter=".web">Web</a></li>
                      <li><a href="#" data-filter=".video-photo">Video/Photo</a></li>
                      <li><a href="#" data-filter=".design">Design</a></li>
                      <li><a href="#" data-filter=".marketing">Marketing</a></li>
                  </ul>
              </div>
          </div>
          <div class="row">
              <div class="portfolio-box">
                  <div class="col-md-4 col-sm-6 design marketing">
                      <div class="portfolio-post mb30">
                          <img src="/assets/images/portfolio/massonry/moody.png" alt="">
                          <div class="hover-box">
                              <div class="inner-hover">
                                  <h4>Manatee Macs Elementary School</h4>
                                  <p>Logo & Flyer Design</p>
                                  <a class="link" href="/portfolio/moody-orthodontics/"><i class="fa fa-search"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6 design marketing">
                      <div class="portfolio-post mb30">
                          <img src="/assets/images/portfolio/massonry/macs.png" alt="">
                          <div class="hover-box">
                              <div class="inner-hover">
                                  <h4>Manatee Macs Elementary School</h4>
                                  <p>Logo & Flyer Design</p>
                              </div>
                              <a class="link" href="/portfolio/manatee-macs/"><i class="fa fa-search"></i></a>
                              <!-- <a class="zoom" href="/assets/images/portfolio/massonry/macs.jpg" data-lightbox="portfolio-1"><i class="fa fa-picture-o"></i></a> -->
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6 design marketing">
                      <div class="portfolio-post mb30">
                          <img src="/assets/images/portfolio/massonry/mikes.png" alt="">
                          <div class="hover-box">
                              <div class="inner-hover">
                                  <h4>Mike's Tree Trimming</h4>
                                  <p>Logo & T-Shirt Design</p>
                                  <a class="link" href="/portfolio/mikes-tree-trimming/"><i class="fa fa-search"></i></a>
                                  <!-- <a class="zoom" href="/assets/images/portfolio/massonry/3.jpg" data-lightbox="portfolio-1"><i class="fa fa-picture-o"></i></a> -->
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6 html design">
                      <div class="portfolio-post mb30">
                          <img src="/assets/images/portfolio/massonry/simple-sound.jpg" alt="">
                          <div class="hover-box">
                              <div class="inner-hover">
                                  <h4>Simple Sound</h4>
                                  <p>Logo Design</p>
                                  <a class="zoom" href="/assets/images/portfolio/massonry/simple-design.jpg" data-lightbox="portfolio-1"><i class="fa fa-picture-o"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6 joomla video-photo">
                      <div class="portfolio-post mb30">
                          <img src="/assets/images/portfolio/massonry/audi.jpg" alt="">
                          <div class="hover-box">
                              <div class="inner-hover">
                                  <h4>Audi</h4>
                                  <p>Videography</p>
                                  <a class="zoom" href="https://www.youtube.com/embed/ylQ0KEmQx9k" data-lightbox="portfolio-1"><i class="fa fa-video-camera"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 col-sm-6 html web">
                      <div class="portfolio-post mb30">
                          <img src="/assets/images/portfolio/massonry/florida-splash.png" alt="">
                          <div class="hover-box">
                              <div class="inner-hover">
                                  <h4>Florida Splash</h4>
                                  <p>Web Design</p>
                                  <a class="zoom" href="/assets/images/portfolio/massonry/florida-splash.jpg" data-lightbox="portfolio-1"><i class="fa fa-picture-o"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End Portfolio Section -->

  <?php include($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php') ?>

</html>
