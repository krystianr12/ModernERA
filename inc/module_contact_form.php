<!-- Start Contact Form Section -->
<section id="contact-form" class="pad80" style="background: #f9f9f9">
  <div class="container">
    <div class="col-md-12">
      <form id="contactForm" class="contact-form" method="post" role="form" action="/assets/php/contact.php">

        <div class="messages"></div>

        <div class="controls">

          <div class="row">
            <div class="col-sm-12 col-lg-6">
              <h2>Drop Us a Message</h2><br>
              <p>Give us a call or write a support ticket and our support team will gladly assist you with anything you need. You can also send us an email and we'll get back to you as soon as possible!</p>
            </div>

            <div class="col-sm-6 col-lg-3 hidden-xs text-center wow fadeInRight" data-wow-duration="2s" style="margin-top: 30px;">
              <i class="fa fa-mobile fa-3x"></i>
              <p style="color: #EC1C24">352-505-8832</p>
            </div>

            <div class="col-sm-6 col-lg-3 hidden-xs text-center wow fadeInRight" data-wow-duration="2s" style="margin-top: 30px;">
              <i class="fa fa-envelope-o fa-3x"></i>
              <p style="color: #EC1C24">info@moderneradma.com</p>
            </div>
          </div><br>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input id="form_name" type="text" name="name" class="form-control" placeholder="Name *" required="required" data-error="Name is required.">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <input id="form_email" type="email" name="email" class="form-control" placeholder="Email *" required="required" data-error="Valid email is required.">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone">
                <div class="help-block with-errors"></div>
              </div>
              <div class="form-group">
                <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Subject *" required="required" data-error="Subject is required.">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea id="form_message" name="message" class="form-control" placeholder="Message *" required="required" data-error="Please,leave us a message." style="min-height: 175px;"></textarea>
                <div class="help-block with-errors"></div>
              </div>
              <div class="button-wrapper">
                <input type="submit" class="btn btn-primary" value="Send message">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <p class="text-muted"><strong>*</strong> These fields are required.</p>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>
<!-- End Contact Form Section -->
