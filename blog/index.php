<!DOCTYPE html>
<html lang="en">

  <?php

    $page_title = "Digital Marketing Agency | ModernERA DMA";
    $page_description = "From hosting your website to marketing your business, we're a one stop shop for all your marketing needs!";
    $page_keywords = "KEYWORDS HERE";

    include($_SERVER['DOCUMENT_ROOT'].'/inc/header.php');

    ?>

  <!-- Start Latest News Section -->
  <section class="pad-t80 pad-b50" style="background-color: #f9f9f9;">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="section-title text-center">
                      <h3>Latest Posts</h3>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                  <div class="latest-news">
                      <div class="latest-news-img">
                          <img src="/blog/marketing-abc/thumbnail.png" class="img-responsive" alt="blog-post">
                          <div><span>JAN</span><span>8</span></div>
                      </div>
                      <h4><a href="/blog/marketing-abc/">Our ABC's of Marketing</a></h4>
                      <p>Vivamus magna justo, lacinia eget consectetur convallis at tellus. Lorem ipsum dolor sit consectetur adipiscing elit</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="latest-news">
                      <div class="latest-news-img">
                          <img src="/assets/images/others/img-8.jpg" class="img-responsive" alt="blog-post">
                          <div><span>JUNE</span><span>29</span></div>
                      </div>
                      <h4><a href="/blog/just-another-post">Just another post</a></h4>
                      <p>Vivamus magna justo, lacinia eget consectetur convallis at tellus. Lorem ipsum dolor sit consectetur adipiscing elit</p>
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="latest-news">
                      <div class="latest-news-img">
                          <img src="/assets/images/others/img-9.jpg" class="img-responsive" alt="blog-post">
                          <div><span>JUNE</span><span>29</span></div>
                      </div>
                      <h4><a href="/blog/yet-another-post">Yet another post</a></h4>
                      <p>Vivamus magna justo, lacinia eget consectetur convallis at tellus. Lorem ipsum dolor sit consectetur adipiscing elit</p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- End Latest News Section -->

  <?php include($_SERVER['DOCUMENT_ROOT'].'/inc/footer.php') ?>

</html>
