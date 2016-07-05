<?php
include_once('dbconnect.php');
include_once('header.php');
$sql ="SELECT * FROM slider";
$res = mysql_query($sql) or die(mysql_error());
?>
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>


             <?php 
                while ($result = mysql_fetch_array($res)) {
            ?>
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php if(isset($result['image'])){ ?>bushra_admin/images/slider/100/<?php echo $result['image'];}
               ?>" data-rotate="0" data-saveperformance="off" data-title="Slide <?php echo $i; ?>" data-description="">
                <!-- MAIN IMAGE -->
                <?php if(isset($result['image'])){ ?><img src="bushra_admin/images/slider/1500/<?php echo $result['image']; }?>" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina/> alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina/>
                 
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-1-layer-1"
                
                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-90']" 
                  data-fontsize="['28']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;"><?php echo $result['title']; ?>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                  id="rs-1-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-20']"
                  data-fontsize="['48']"
                  data-lineheight="['70']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;"><?php echo $result['subtitle']; ?> 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white text-center" 
                  id="rs-1-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['50']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;"><?php echo $result['description']; ?>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-1-layer-4"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['115']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-default btn-circled btn-transparent pl-20 pr-20" href="#">Donate Now</a> 
                </div>
              </li>
              <?php }else{?>
             <!--  <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php if(isset($result['image'])){ ?>bushra_admin/images/slider/100/<?php echo $result['image'];}
               ?>" data-rotate="0" data-saveperformance="off" data-title="Slide 2" data-description="">
                <!-- MAIN IMAGE -->
                <?php if(isset($result['image'])){ ?><img src="bushra_admin/images/slider/1500/<?php echo $result['image']; ?>" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina/> alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                  id="rs-2-layer-1"

                  data-x="['left']"
                  data-hoffset="['30']"
                  data-y="['middle']"
                  data-voffset="['-110']" 
                  data-fontsize="['110']"
                  data-lineheight="['120']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:700;"><?php echo $result['title']; ?>
                </div>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent pl-20 pr-20"
                  id="rs-2-layer-2"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['-25']" 
                  data-fontsize="['35']"
                  data-lineheight="['54']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600; border-radius: 30px;"><?php echo $result['description']; ?> 
                </div>

                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white" 
                  id="rs-2-layer-3"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['30']"
                  data-fontsize="['16']"
                  data-lineheight="['28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;"><?php echo $result['subtitle']; ?>
                </div>

                <!-- LAYER NR. 4 -->
                <div class="tp-caption tp-resizeme" 
                  id="rs-2-layer-4"

                  data-x="['left']"
                  data-hoffset="['35']"
                  data-y="['middle']"
                  data-voffset="['95']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">Donate Now</a> 
                </div>
              </li>

              <?php
                }
              ?>
          
              <!-- SLIDE 3 -->
             

            </ul>
          </div>
          <!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [600, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->

      </div>
    </section>
<!---make a donation-->


 <section class="divider parallax" data-bg-img="" data-parallax-ratio="0.7">
      <div class="container pt-0 pb-0">
        <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 pb-sm-20">
      <p>&nbsp;</p>
              <h2 class="mt-0">Welcome</h2>
              <p align="justify">By the grace of Allah it is a privilege to have you visit our new website. We hope that you find it useful and informative and trust that this website will perform in some small way to further the aims and traditions of Bushra welfare and charitable trust.</p>
        <p align="justify">The Messenger of Allah Sallallahu 'alaihi wasallam said, 'The believers, in their love, mutual kindness, and close ties, are like one body; when any part complains, the whole body responds to it with wakefulness and fever.' - Muslim</p>
              <a href="#" class="btn btn-colored btn-theme-colored btn-sm">View Details</a>
            </div>
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
                        <option value="Masjid Construction">Masjid Construction</option>
                        <option value="Aqweeqah">Aqweeqah</option>
                        <option value="Hifdh Sponsorship">Hifdh Sponsorship</option>
                        <option value="House Construction">House Construction</option>
            <option value="Most Needy">Most Needy</option>
            <option value="Orphan Sponsorship">Orphan Sponsorship</option>
            <option value="Schools Support">Schools Support</option>
            <option value="Widows Support">Widows Support</option>
            <option value="Self employment program">Self employment program</option>
            <option value="Quran Distribution">Quran Distribution</option>
            <option value="Medical: Cataract Surgery">Medical: Cataract Surgery</option>
            <option value="Medical: Dialysis Treatment">Medical: Dialysis Treatment</option>
            <option value="Establishment of Madrasas (Makatibs)">Establishment of Madrasas (Makatibs)</option>
            <option value="Water Wells and Water Hand Pumps">Water Wells and Water Hand Pumps</option>
            <option value="Drilling wells">Drilling wells</option>
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
    <!-- Section: About  -->
  
   

    <!-- Section: -->
    <section class="bg-lighter">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="p-50 pl-40 pr-40 text-center bg-lightest">
                <h2 class="mt-0 font-22">Become a <br> Volunteer?</h2>
                <p>Bushra charitable volunteers make a real difference to the lives of So many people and their families. Find out more about the ways in which you could get involved.</p>
                <a class="btn btn-dark btn-theme-colored btn-sm" href="#">Sign Up Today!</a>
              </div>
            </div>
            <div class="col-md-8 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="owl-carousel-1col owl-dots-bottom-right" data-dots="true">
                <div class="item">
                  <div class="row-fluid">
                    <div class="col-md-5">
                      <img src="images/projects/thumb/s4.jpg" alt="">
                    </div>
                    <div class="col-md-7">
                      <h4 class="mt-0 mb-0 text-black-666">Featured Causes:</h4>
                      <h2 class="line-bottom mt-0">Quran Distribution</h2>
                      
                <p align="justify">The Qur'an was revealed to the Messenger of Allah, Muhammad SallAllahu 'alayhi wasallam, as the final word of Allah.<br/>
This Book is the miracle of the Muslim Ummah. Full of truth and guidance, it is imperative that the Qur'an is conveyed to as wide an audience as possible.</p>
                      <a class="btn btn-theme-colored btn-sm" href="qurandist.html">Donate Now</a>
                    </div>
                  </div>
                </div>
              
                <div class="item">
                  <div class="row-fluid">
                    <div class="col-md-5">
                      <img src="images/projects/thumb/s1.jpg" alt="">
                    </div>
                    <div class="col-md-7">
                      <h4 class="mt-0 mb-0 text-black-666">Featured Causes:</h4>
                      <h2 class="line-bottom mt-0">Self employment program </h2>
                      <p align="justify">'It is better that a person should take a rope and bring a bundle of wood on his back to sell so that Allah may preserve his honor, than that he should beg from people (regardless of whether they give to him or refuse him.</p>
                      <a class="btn btn-theme-colored btn-sm" href="selfemployemnet.html">Donate Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Causes -->
    <section>
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">
              <h5 class="font-weight-300 m-0">What we can do?</h5>
              <h2 class="mt-0 text-uppercase font-28">Our <span class="text-theme-colored font-weight-400">Projects</span> <span class="font-30 text-theme-colored">.</span></h2>
              <div class="icon">
               <!-- <i class="fa fa-hospital-o"></i>-->
              </div>
            </div>
            <div class="col-md-6"> <p>Bushra Welfare and  Charitable Trust was established to help and Empower from the trap of extreme poverty, to raise international awareness of human rights issues and to provide the  housing, health and education for the poor and Needy people.</p></div>
          </div>
        </div>
        <div class="section-content">
          <div class="row mtli-row-clearfix">
      
            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/maszid.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="65" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Masjid Construction</a></h4>
                    <p align="justify">The Masjid is the heart of any Muslim community. Providing much more than a place of worship, many offer education and are a base from which essential community services are delivered.</p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="masidconstruction.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700 font-">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/aqeeth.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="85" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0 </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Aqweeqah</a></h4>
                    <p align="justify">The birth of a child is a joyous occasion for every family.But even at this happy time Muslims are expected to remember the less fortunate.The wife of the Prophet, Aisha (,
</p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="aqweeqah.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/hifdh.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="75" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0 </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Hifdh Sponsorship</a></h4>
                    <p align="justify">The Qur'an is the beating heart of Islam. It is Allah's revelation - 'The Guidance' - transmitted through the Messenger of Allah Muhammad Salallahu 'alaihi wasallam to help people </p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="sponsorship.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
      
      <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/house.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="75" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0 </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">House Construction</a></h4>
                    <p align="justify">Shelter is a basic Amenity of a every human being in the society right of man. In present days one in six people still lives in slums. At least one hundred million have no home whatsoever. Unending wars  </p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="houseconstruction.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
      
      
          </div>
      <hr/>
      <p>&nbsp;</p>
      
      <!--new row-->
       <div class="row mtli-row-clearfix">
      
            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/mostneed.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="65" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Most Needy</a></h4>
                    <p align="justify">Funds from this category are allocated to projects Ahad educational and charitable society   deems to be the most needy at any given time.</p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="mostneedy.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700 font-">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/orphan.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="85" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0 </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Orphan Sponsorship</a></h4>
                    <p align="justify">If you have the opportunity to sponsor an orphan, please do not waste it. It’s such a rewarding experience to genuinely change, 
</p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="orphan.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/schoolsupport.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="75" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0 </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Schools Support</a></h4>
                    <p align="justify">Ahad Educational and charitable society, working at the grassroots, is funding the running of four schools in, kodad,(Telangana) Ranchi </p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="schoolssupport.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
      
      <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/widows.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="75" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0 </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Widows Support</a></h4>
                    <p align="justify">It is very difficult for widows to financially support themselves if they have children to look after. This problem is aggravated in countries which   </p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="widowsuppport.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
      
      
          </div>
      <p>&nbsp;</p>
      <!--new row---->
      
         <div class="row mtli-row-clearfix">
      
            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/selfemp.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="65" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Self employment program </a></h4>
                    <p align="justify">'It is better that a person should take a rope and bring a bundle of wood on his back to sell so that Allah may preserve his honor</p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="selfemployemnet.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700 font-">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/quran.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="85" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0 </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Quran Distribution</a></h4>
                    <p align="justify">The Qur'an was revealed to the Messenger of Allah, Muhammad SallAllahu 'alayhi wasallam, as the final word of Allah.</p><br/>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="qurandist.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/cat.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="75" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0 </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Medical: Cataract Surgery</a></h4>
                    <p align="justify">Cataract is clouding of the lens of the eye, impeding the passage of light. Though most cases of cataract are related to the aging process, occasionally </p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="catractsurgery.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
      
      <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/dai.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="75" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0 </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Medical: Dialysis Treatment</a></h4>
                    <p align="justify">For people who suffer from kidney failure, dialysis is part of their daily life. It is a procedure that performs the duties of kidneys   </p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="dialysis.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
      
      
          </div>
      <p>&nbsp;</p>
      <!--new row-->
      
       <div class="row mtli-row-clearfix">
      
            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/mader.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="65" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Establishment of Madrasas (Makatibs)  </a></h4>
                    <p align="justify">There are many areas in and around the city where we were unable to find anybody who can lead the Janaza prayer and they are even not well versed with our prophet and kalima shahada</p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="madrasas.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700 font-">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/waterwell.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="85" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0 </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Water Wells and Water Hand Pumps</a></h4>
                    <p align="justify">Deepwater wells provide their users with waters for years and years. In rural areas they are a lifeline for the inhabitants as they may be the only source of potable water.</p><br/>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="waterwallet.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/projects/thumb/drill.jpg">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="75" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0 </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Drilling wells</a></h4>
                    <p align="justify">Drinking water is essential for the survival of mankind. There are many villages where the water supply is not available.Peoples in these villages used to dig bore wells and utilize the water from it.  </p><br/>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="drillingwells.html">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
      
      <!--<div class="col-sm-3 col-md-3 col-lg-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
              <div class="causes maxwidth500 mb-sm-50">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="http://placehold.it/265x195">
                  <div class="donate-piechart">
                    <div class="piechart-block">
                      <div class="piechart" data-barcolor="#ccc" data-trackcolor="#fff" data-percent="75" data-linewidth="8">
                        <span class="percent text-white font-weight-700">0 </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="causes-details clearfix">
                  <div class=" p-30 p-sm-15 bg-lighter">
                    <h4><a href="#">Medical: Dialysis Treatment</a></h4>
                    <p align="justify">For people who suffer from kidney failure, dialysis is part of their daily life. It is a procedure that performs the duties of kidneys   </p>
                     <a class="btn btn-dark btn-theme-colored btn-sm text-uppercase mt-10" href="#">Donate Now</a>
                  </div>
                  <div class="mt-10 p-30 pt-10 pb-20 p-sm-15 bg-lighter">
                    <ul class="list-inline clearfix mt-10">
                      <li class="pull-left flip pr-0">Raised: <span class="font-weight-700">$1890</span></li>
                      <li class="text-theme-colored pull-right flip pr-0">Goal: <span class="font-weight-700">$2500</span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>-->
      
      
          </div>
      
      
      
        </div>
      </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-white-8" data-bg-img="http://placehold.it/1920x1280" data-parallax-ratio="0.7">
      <div class="container pt-90 pb-90">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
            <div class="funfact">
              <i class="pe-7s-smile text-black-light mt-20 font-48 pull-left flip"></i>
              <div class="ml-60">
                <h2 class="animate-number text-theme-colored mt-0 font-48 line-bottom" data-value="25 " data-animation-duration="2000">0</h2>
                <div class="clearfix"></div>
                <h4 class="font-14">Masjid Constructions</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
            <div class="funfact">
              <i class="pe-7s-rocket text-black-light mt-20 font-48 pull-left flip"></i>
              <div class="ml-60">
                <h2 class="animate-number text-theme-colored mt-0 font-48 line-bottom" data-value="150" data-animation-duration="2500">0</h2>
                <div class="clearfix"></div>
                <h4 class="font-14">Water Wells</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="funfact">
              <i class="pe-7s-add-user text-black-light mt-20 font-48 pull-left flip"></i>
              <div class="ml-60">
                <h2 class="animate-number text-theme-colored mt-0 font-48 line-bottom" data-value="350" data-animation-duration="3000">0</h2>
                <div class="clearfix"></div>
                <h4 class="font-14">Volunteer Reached</h4>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s">
            <div class="funfact">
              <i class="pe-7s-global text-black-light mt-20 font-48 pull-left flip"></i>
              <div class="ml-60">
                <h2 class="animate-number text-theme-colored mt-0 font-48 line-bottom" data-value="55" data-animation-duration="3500">0</h2>
                <div class="clearfix"></div>
                <h4 class="font-14">Globalization Work</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Gallery -->
    <section id="gallery">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="mt-0 line-bottom"><span class="font-weight-300">Upcoming </span> Events</h3>
              <div class="event media mb-20 no-bg no-border">
                <div class="event-date media-left text-center flip bg-theme-colored p-20">
                  <ul>
                    <li class="font-30 text-white font-weight-600 border-bottom pb-10">28</li>
                    <li class="font-22 text-white text-uppercase">Feb</li>
                  </ul>
                </div>
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">Gear up for giving</a></h4>
                    <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                    <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City</span>
                    <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
                  </div>
                </div>
              </div>
              <div class="event media mb-20 no-bg no-border">
                <div class="event-date media-left text-center flip bg-theme-colored p-20">
                  <ul>
                    <li class="font-30 text-white font-weight-600 border-bottom pb-10">28</li>
                    <li class="font-22 text-white text-uppercase">Feb</li>
                  </ul>
                </div>
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">Gear up for giving</a></h4>
                    <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                    <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City</span>
                    <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
                  </div>
                </div>
              </div>
              <div class="event media mb-20 no-bg no-border">
                <div class="event-date media-left text-center flip bg-theme-colored p-20">
                  <ul>
                    <li class="font-30 text-white font-weight-600 border-bottom pb-10">28</li>
                    <li class="font-22 text-white text-uppercase">Feb</li>
                  </ul>
                </div>
                <div class="media-body pl-20">
                  <div class="event-content pull-left flip">
                    <h4 class="event-title media-heading font-raleway font-weight-700"><a href="#">Gear up for giving</a></h4>
                    <span class="mb-10 text-gray-darkgray mr-10"><i class="fa fa-clock-o mr-5 text-theme-colored"></i> at 5.00 pm - 7.30 pm</span>
                    <span class="text-gray-darkgray"><i class="fa fa-map-marker mr-5"></i> 25 Newyork City</span>
                    <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commod</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
              <h3 class="mt-0 line-bottom"><span class="font-weight-300">Photo </span> Gallery</h3>
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="portfolio-gallery grid-4 gutter clearfix">
                <!-- Portfolio Item Start -->
                <div class="portfolio-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/200x111" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="http://placehold.it/200x111"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/200x111">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="portfolio-item branding">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/200x111" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#"><i class="fa fa-link"></i></a>
                          <a href="#"><i class="fa fa-heart-o"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/200x111">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="portfolio-item design">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/200x111" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/200x111">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="portfolio-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/200x111" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-youtube-play"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="portfolio-item branding">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/200x111" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a class="popup-vimeo" href="https://vimeo.com/45830194"><i class="fa fa-play"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="portfolio-item design">
                  <div class="thumb">
                    <div class="flexslider-wrapper">
                      <div class="flexslider">
                        <ul class="slides">
                          <li><a href="http://placehold.it/200x111" title="Portfolio Gallery - Photo 1"><img src="http://placehold.it/200x111" alt=""></a></li>
                          <li><a href="http://placehold.it/200x111" title="Portfolio Gallery - Photo 2"><img src="http://placehold.it/200x111" alt=""></a></li>
                          <li><a href="http://placehold.it/200x111" title="Portfolio Gallery - Photo 3"><img src="http://placehold.it/200x111" alt=""></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="portfolio-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/200x111" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="http://placehold.it/200x111"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/200x111">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="portfolio-item design">
                  <div class="thumb">
                    <div class="flexslider-wrapper" data-direction="vertical">
                      <div class="flexslider">
                        <ul class="slides">
                          <li><a href="http://placehold.it/200x111" title="Portfolio Gallery - Photo 1"><img src="http://placehold.it/200x111" alt=""></a></li>
                          <li><a href="http://placehold.it/200x111" title="Portfolio Gallery - Photo 2"><img src="http://placehold.it/200x111" alt=""></a></li>
                          <li><a href="http://placehold.it/200x111" title="Portfolio Gallery - Photo 3"><img src="http://placehold.it/200x111" alt=""></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="portfolio-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/200x111" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="http://placehold.it/200x111"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/200x111">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="portfolio-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/200x111" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="http://placehold.it/200x111"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/200x111">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="portfolio-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/200x111" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="http://placehold.it/200x111"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/200x111">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="portfolio-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/200x111" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="text-holder text-center">
                      <h5 class="title">Gallery Title Here</h5>
                    </div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="social-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a data-lightbox="image" href="http://placehold.it/200x111"><i class="fa fa-plus"></i></a>
                          <a href="#"><i class="fa fa-link"></i></a>
                        </div>
                      </div>
                    </div>
                    <a class="hover-link" data-lightbox="image" href="http://placehold.it/200x111">View more</a>
                  </div>
                </div>
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->
              
              <!-- Section: Clients -->
              <h3 class="mt-30 line-bottom"><span class="font-weight-300">Happy </span> Donors</h3>
              <div class="owl-carousel-6col carousel2">
                <div class="item"> <a href="#"><img class="img-responsive" src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item"> <a href="#"><img class="img-responsive" src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item"> <a href="#"><img class="img-responsive" src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item"> <a href="#"><img class="img-responsive" src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item"> <a href="#"><img class="img-responsive" src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item"> <a href="#"><img class="img-responsive" src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item"> <a href="#"><img class="img-responsive" src="http://placehold.it/150x120" alt=""></a> </div>
                <div class="item"> <a href="#"><img class="img-responsive" src="http://placehold.it/150x120" alt=""></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Make a Donation -->
   

    <!-- Divider: testimonials -->
    <section class="bg-light">
      <div class="container pb-0">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">
              <h5 class="font-weight-300 m-0">Happy Clients</h5>
              <h2 class="mt-0 text-uppercase font-28">Testimonials <span class="font-30 text-theme-colored">.</span></h2>
              <div class="icon">
               <!-- <i class="fa fa-hospital-o"></i>-->
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-30">
            <div class="owl-carousel-2col boxed" data-dots="true">
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/test/naveen.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="mt-0 font-weight-300">The process of donating was easy.A visit to the website, a simple form, a couple of phone calls to helpful, responsive people.</h4>
                    <p class="author text-theme-colored mt-20">-Naveen kumar .G</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/test/riyaz.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="mt-0 font-weight-300">Very good service provided by all the members of "Bushra Charitable trust" team. They cooperated and were very nice in their communication.</h4>
                    <p class="author text-theme-colored mt-20">-Sk Riyaz</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/test/rajeev.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="mt-0 font-weight-300">Thank you for the update. I was happy to learn about your Volunteer program. I have let my family and friends know as well and am sure they will Keep the program in mind in the future. Best wishes</h4>
                    <p class="author text-theme-colored mt-20">-Rajeev</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0 pr-20">
                    <img width="75" class="img-circle" alt="" src="images/test/nishad.jpg">
                  </div>
                  <div class="ml-100 ">
                    <h4 class="mt-0 font-weight-300"> I'm very happy with Bushra Charities. I've had so many questions, and you have all replied very quickly. I changed my selected charity, and you have all helped me to make this happen smoothly. With gratitude,</h4>
                    <p class="author text-theme-colored mt-20">-Nishad</p>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>

    <!-- Section: blog -->
    <section id="blog">
      <div class="container">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6">
              <h5 class="font-weight-300 m-0">What we can do?</h5>
              <h2 class="mt-0 text-uppercase font-28">Know Our <span class="text-theme-colored font-weight-400">Latest News</span> <span class="font-30 text-theme-colored">.</span></h2>
              <div class="icon">
                <!--<i class="fa fa-hospital-o"></i>-->
              </div>
             
            </div>
            <div class="col-md-6"> <p>Project & Development News Here </p></div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
              <article class="post clearfix mb-sm-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="http://placehold.it/330x225" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                        <li class="font-12 text-white text-uppercase">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                       
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
              <article class="post clearfix mb-sm-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="http://placehold.it/330x225" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                        <li class="font-12 text-white text-uppercase">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                       
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
              <article class="post clearfix mb-sm-30 bg-lighter">
                <div class="entry-header">
                  <div class="post-thumb thumb"> 
                    <img src="http://placehold.it/330x225" alt="" class="img-responsive img-fullwidth"> 
                  </div>
                </div>
                <div class="entry-content p-20 pr-10">
                  <div class="entry-meta media mt-0 no-bg no-border">
                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                      <ul>
                        <li class="font-16 text-white font-weight-600 border-bottom">28</li>
                        <li class="font-12 text-white text-uppercase">Feb</li>
                      </ul>
                    </div>
                    <div class="media-body pl-15">
                      <div class="event-content pull-left flip">
                        <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="#">Post title here</a></h4>
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-commenting-o mr-5 text-theme-colored"></i> 214 Comments</span>                       
                        <span class="mb-10 text-gray-darkgray mr-10 font-13"><i class="fa fa-heart-o mr-5 text-theme-colored"></i> 895 Likes</span>                       
                      </div>
                    </div>
                  </div>
                  <p class="mt-10">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti, sint assumenda. Pariatur iste veritatis excepturi, ipsa optio nobis.</p>
                  <a href="#" class="btn-read-more">Read more</a>
                  <div class="clearfix"></div>
                </div>
              </article>
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

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>
</html>