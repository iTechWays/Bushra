<?php
include_once('dbconnect.php');
include_once('header.php');
$pId = $_REQUEST['pId'];
$projectinfo =mysql_query("SELECT * FROM projects where Id='$pId'");
$projectdetails = mysql_fetch_array($projectinfo);
  ?>
  <!-- Start main-content -->
  <div class="main-content">

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white"><?php echo $projectdetails['pname'];?></h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-8">
              <!--<h3 class="text-uppercase font-28 letter-space-3">We are <span class="text-theme-colored">Ready</span> We make excellent<br> world and save the children.</h3>-->
              
              <div class="row">
                <div class="col-md-12">
				<?php echo $projectdetails['description'];?>
                </div>
               
              </div>
            </div>
  


			</div>
			
          </div>
        
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: Divider call -->
   
 <section class="divider parallax" data-bg-img="http://placehold.it/1920x1280" data-parallax-ratio="0.7">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-8">
            <div class="bg-light-transparent p-40">
              <h3 class="mt-0 line-bottom">Make a Donation<span class="font-weight-300"> Now!</span></h3>

              <!-- ===== START: Paypal Both Onetime/Recurring Form ===== -->
              <form id="paypal_donate_form_onetime_recurring">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group mb-20">
                      <label><strong>Payment Type</strong></label> <br>
                      <label class="radio-inline">
                        <input type="radio" checked="" value="one_time" name="payment_type"> 
                        One Time
                      </label>
                      <label class="radio-inline">
                        <input type="radio" value="recurring" name="payment_type"> 
                        Recurring
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-12" id="donation_type_choice">
                    <div class="form-group mb-20">
                      <label><strong>Donation Type</strong></label>
                      <div class="radio mt-5">
                        <label class="radio-inline">
                          <input type="radio" value="D" name="t3" checked="">
                          Daily</label>
                        <label class="radio-inline">
                          <input type="radio" value="W" name="t3">
                          Weekly</label>
                        <label class="radio-inline">
                          <input type="radio" value="M" name="t3">
                          Monthly</label>
                        <label class="radio-inline">
                          <input type="radio" value="Y" name="t3">
                          Yearly</label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <label><strong>I Want to Donate for</strong></label>
                      <select name="item_name" class="form-control">
                        <option value="Educate Children">Educate Children</option>
                        <option value="Child Camps">Child Camps</option>
                        <option value="Clean Water for Life">Clean Water for Life</option>
                        <option value="Campaign for Child Poverty">Campaign for Child Poverty</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <label><strong>Currency</strong></label>
                      <select name="currency_code" class="form-control">
                        <option value="">Select Currency</option>
                        <option value="USD" selected="selected">USD - U.S. Dollars</option>
                        <option value="AUD">AUD - Australian Dollars</option>
                        <option value="BRL">BRL - Brazilian Reais</option>
                        <option value="GBP">GBP - British Pounds</option>
                        <option value="HKD">HKD - Hong Kong Dollars</option>
                        <option value="HUF">HUF - Hungarian Forints</option>
                        <option value="INR">INR - Indian Rupee</option>
                        <option value="ILS">ILS - Israeli New Shekels</option>
                        <option value="JPY">JPY - Japanese Yen</option>
                        <option value="MYR">MYR - Malaysian Ringgit</option>
                        <option value="MXN">MXN - Mexican Pesos</option>
                        <option value="TWD">TWD - New Taiwan Dollars</option>
                        <option value="NZD">NZD - New Zealand Dollars</option>
                        <option value="NOK">NOK - Norwegian Kroner</option>
                        <option value="PHP">PHP - Philippine Pesos</option>
                        <option value="PLN">PLN - Polish Zlotys</option>
                        <option value="RUB">RUB - Russian Rubles</option>
                        <option value="SGD">SGD - Singapore Dollars</option>
                        <option value="SEK">SEK - Swedish Kronor</option>
                        <option value="CHF">CHF - Swiss Francs</option>
                        <option value="THB">THB - Thai Baht</option>
                        <option value="TRY">TRY - Turkish Liras</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group mb-20">
                      <label><strong>How much do you want to donate?</strong></label>
                      <select name="amount" class="form-control">
                          <option value="20">20</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                          <option value="200">200</option>
                          <option value="500">500</option>
                          <option value="other">Other Amount</option>
                      </select>
                      <div id="custom_other_amount">
                        <label><strong>Custom Amount:</strong></label>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group">
                      <button type="submit" class="btn btn-flat btn-dark btn-theme-colored mt-10 pl-30 pr-30" data-loading-text="Please wait...">Donate Now</button>
                    </div>
                  </div>
                </div>
              </form>
              
              <!-- Script for Donation Form Custom Amount -->
              <script type="text/javascript">
                $(document).ready(function(e) {
                  var $donation_form = $("#paypal_donate_form_onetime_recurring");
                  //toggle custom amount
                  var $custom_other_amount = $donation_form.find("#custom_other_amount");
                  $custom_other_amount.hide();
                  $donation_form.find("select[name='amount']").change(function() {
                      var $this = $(this);
                      if ($this.val() == 'other') {
                        $custom_other_amount.show().append('<div class="input-group"><span class="input-group-addon">$</span> <input id="input_other_amount" type="text" name="amount" class="form-control" value="100"/></div>');
                      }
                      else{
                        $custom_other_amount.children( ".input-group" ).remove();
                        $custom_other_amount.hide();
                      }
                  });

                  //toggle donation_type_choice
                  var $donation_type_choice = $donation_form.find("#donation_type_choice");
                  $donation_type_choice.hide();
                  $("input[name='payment_type']").change(function() {
                      if (this.value == 'recurring') {
                          $donation_type_choice.show();
                      }
                      else {
                          $donation_type_choice.hide();
                      }
                  });


                  // submit form on click
                  $donation_form.on('submit', function(e){
                          $( "#paypal_donate_form-onetime" ).submit();
                      var item_name = $donation_form.find("select[name='item_name'] option:selected").val();
                      var currency_code = $donation_form.find("select[name='currency_code'] option:selected").val();
                      var amount = $donation_form.find("select[name='amount'] option:selected").val();
                      var t3 = $donation_form.find("input[name='t3']:checked").val();

                      if ( amount == 'other') {
                        amount = $donation_form.find("#input_other_amount").val();
                      }

                      // submit proper form now
                      if ( $("input[name='payment_type']:checked", $donation_form).val() == 'recurring' ) {
                          var recurring_form = $('#paypal_donate_form-recurring');

                          recurring_form.find("input[name='item_name']").val(item_name);
                          recurring_form.find("input[name='currency_code']").val(currency_code);
                          recurring_form.find("input[name='a3']").val(amount);
                          recurring_form.find("input[name='t3']").val(t3);

                          recurring_form.find("input[type='submit']").trigger('click');

                      } else if ( $("input[name='payment_type']:checked", $donation_form).val() == 'one_time' ) {
                          var onetime_form = $('#paypal_donate_form-onetime');

                          onetime_form.find("input[name='item_name']").val(item_name);
                          onetime_form.find("input[name='currency_code']").val(currency_code);
                          onetime_form.find("input[name='amount']").val(amount);

                          onetime_form.find("input[type='submit']").trigger('click');
                      }
                      return false;
                  });

                });
              </script>

              <!-- Paypal Onetime Form -->
              <form id="paypal_donate_form-onetime" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_donations">
                <input type="hidden" name="business" value="accounts@thememascot.com">

                <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
                <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
                <input type="hidden" name="amount" value="20"> <!-- updated dynamically -->

                <input type="hidden" name="no_shipping" value="1">
                <input type="hidden" name="cn" value="Comments...">
                <input type="hidden" name="tax" value="0">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="bn" value="PP-DonationsBF">
                <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
                <input type="submit" name="submit">
              </form>
              
              <!-- Paypal Recurring Form -->
              <form id="paypal_donate_form-recurring" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_xclick-subscriptions">
                <input type="hidden" name="business" value="accounts@thememascot.com">

                <input type="hidden" name="item_name" value="Educate Children"> <!-- updated dynamically -->
                <input type="hidden" name="currency_code" value="USD"> <!-- updated dynamically -->
                <input type="hidden" name="a3" value="20"> <!-- updated dynamically -->
                <input type="hidden" name="t3" value="D"> <!-- updated dynamically -->


                <input type="hidden" name="p3" value="1">
                <input type="hidden" name="rm" value="2">
                <input type="hidden" name="src" value="1">
                <input type="hidden" name="sra" value="1">
                <input type="hidden" name="no_shipping" value="0">
                <input type="hidden" name="no_note" value="1">                     
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="bn" value="PP-DonationsBF">
                <input type="hidden" name="return" value="http://www.yoursite.com/thankyou.html">
                <input type="hidden" name="cancel_return" value="http://www.yoursite.com/paymentcancel.html">
                <input type="hidden" name="notify_url" value="http://www.yoursite.com/notifypayment.php">
                <input type="submit" name="submit">
              </form>
              <!-- ===== END: Paypal Both Onetime/Recurring Form ===== -->

            </div>
          </div>
        </div>
      </div>
    </section>
   
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
   <footer id="footer" class="footer bg-black-222">
    <div class="container pt-70 pb-40">
      <div class="row border-bottom-black">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-10 mb-20" alt="" src="images/logo-wide-white.png">
            <p>Kodad,,Nalgonda (Dt),Telangana State,India.</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored mr-5"></i> <a class="text-gray" href="#">08683 - 256235<br/>&nbsp;&nbsp;&nbsp;&nbsp;+91 78277 79999</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a class="text-gray" href="#">info@bushracharitabletrust.org</a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored mr-5"></i> <a class="text-gray" href="#">www.bushracharitabletrust.org</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Latest News</h5>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Useful Links</h5>
           <!-- <ul class="list angle-double-right list-border">
              <li><a href="#">Body Building</a></li>
              <li><a href="#">Fitness Classes</a></li>
              <li><a href="#">Weight lifting</a></li>
              <li><a href="#">Yoga Courses</a></li>
              <li><a href="#">Training</a></li>              
            </ul>-->
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h5 class="widget-title line-bottom">Opening Hours</h5>
            <div class="opening-hourse">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Sat : </span>
                  <div class="value pull-right">  9.00 am - 6.00 pm  </div>
                </li>
                
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-10">
        <div class="col-md-5">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Subscribe Us</h5>
            <!-- Mailchimp Subscription Form Starts Here -->
            <form id="mailchimp-subscription-form-footer" class="newsletter-form">
              <div class="input-group">
                <input type="email" value="" name="EMAIL" placeholder="Your Email" class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer" style="height: 45px;">
                <span class="input-group-btn">
                  <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
                </span>
              </div>
            </form>
            <!-- Mailchimp Subscription Form Validation-->
            <script type="text/javascript">
              $('#mailchimp-subscription-form-footer').ajaxChimp({
                  callback: mailChimpCallBack,
                  url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
              });

              function mailChimpCallBack(resp) {
                  // Hide any previous response text
                  var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                      $response = '';
                  $mailchimpform.children(".alert").remove();
                  console.log(resp);
                  if (resp.result === 'success') {
                      $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  } else if (resp.result === 'error') {
                      $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                  }
                  $mailchimpform.prepend($response);
              }
            </script>
            <!-- Mailchimp Subscription Form Ends Here -->
          </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Call Us Now</h5>
            <div class="text-gray">&nbsp;&nbsp;&nbsp;08683 - 256235<br/>
             +91 78277 79999
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="widget dark">
            <h5 class="widget-title mb-10">Connect With Us</h5>
            <ul class="social-icons icon-dark icon-circled icon-sm">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-black-333">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-11 text-black-777 m-0">Copyright &copy;2016. All Rights Reserved.Powered By <a href="http://noisywings.com">Noisywings</a></p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>