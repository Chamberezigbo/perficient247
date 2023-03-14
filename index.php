<?php
session_start();
require "header.php";

$msg = $success = $packages = '';
if (isset($_SESSION['success']) && isset($_SESSION['msg'])) {
     // || checks for boolean values only
     $success = $_SESSION['success'] || false;
     $msg = $_SESSION['msg'];
     //remove the session
     unset($_SESSION['success']);
     unset($_SESSION['msg']);
}
?>

<!-- slider_area_start -->
<div class="slider_area">
     <div class="single_slider d-flex align-items-center slider_bg_1">
          <div class="container">
               <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8">
                         <div class="slider_text text-center justify-content-center">
                              <p>Perficient 24/7 (24Seven) Delivery company</p>
                              <h3>Perficient Service For Business</h3>
                              <a class="boxed-btn3" href="" data-toggle="modal" data-target="#exampleModalCenter">Track</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- slider_area_end -->

<div class="transportaion_area">
     <div class="container">
          <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                         <div class="icon">
                              <img src="img/svg_icon/airplane.png" alt="" />
                         </div>
                         <h3>Transportation</h3>
                         <p>
                              Get access to powerful and time-saving customizable features found only in Logistic+.
                         </p>
                    </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                         <div class="icon">
                              <img src="img/svg_icon/live.png" alt="" />
                         </div>
                         <h3>Live Monitoring</h3>
                         <p>
                              Stay up-to-date on important customs regulations from around the world!
                         </p>
                    </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single_transport">
                         <div class="icon">
                              <img src="img/svg_icon/world.png" alt="" />
                         </div>
                         <h3>Worldwide Service</h3>
                         <p>
                              Get preferred rates, billing options and other great benefits of having a Logistic Express account!
                         </p>
                    </div>
               </div>
          </div>
     </div>
</div>

<div class="service_area">
     <div class="container">
          <div class="row">
               <div class="col-xl-12">
                    <div class="section_title mb-50 text-center">
                         <h3>Services We Offer</h3>
                    </div>
               </div>
          </div>
          <div class="row">
               <div class="col-xl-12">
                    <div class="service_active owl-carousel">
                         <div class="single_service">
                              <div class="thumb">
                                   <img src="img/service/1.png" alt="" />
                              </div>
                              <div class="service_info">
                                   <h3>
                                        <a href="service_details.html">Ocean Freight</a>
                                   </h3>
                                   <p>
                                        Ensuring reliable, safe and cost-efficient transportation door to door globally.
                                   </p>
                              </div>
                         </div>
                         <div class="single_service">
                              <div class="thumb">
                                   <img src="img/service/2.png" alt="" />
                              </div>
                              <div class="service_info">
                                   <h3>
                                        <a href="service_details.html">Land Transport</a>
                                   </h3>
                                   <p>
                                        With our broad product range we cover different equipment types and consolidation services to ensure your cargo reaches the right place.
                                   </p>
                              </div>
                         </div>
                         <div class="single_service">
                              <div class="thumb">
                                   <img src="img/service/3.png" alt="" />
                              </div>
                              <div class="service_info">
                                   <h3>
                                        <a href="service_details.html">Air Freight</a>
                                   </h3>
                                   <p>
                                        Working with carefully selected carriers, we operate with schedules on all the world’s major routes so you can plan with certainty and become more efficient.
                                   </p>
                              </div>
                         </div>
                         <div class="single_service">
                              <div class="thumb">
                                   <img src="img/service/1.png" alt="" />
                              </div>
                              <div class="service_info">
                                   <h3>
                                        <a href="service_details.html">Ocean Freight</a>
                                   </h3>
                                   <p>
                                        Ensuring reliable, safe and cost-efficient transportation door to door globally.
                                   </p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>

<!-- contact_action_area  -->
<div class="contact_action_area">
     <div class="container">
          <div class="row align-items-center">
               <div class="col-xl-7 col-md-6">
                    <div class="action_heading">
                         <h3>100% secure and safe</h3>
                         <p>
                              Your unique logistics requirements lie at the heart of our business. We turn the challenges you face in the marketplace into your opportunities, giving you a competitive advantage.
                              Logistic designs tailor-made solutions to the complex logistics problems in your industry. Let our experts show you how.
                         </p>
                    </div>
               </div>
               <div class="col-xl-5 col-md-6">
                    <div class="call_add_action">
                         <a href="#" class="boxed-btn3">+1 (323) 904-8548</a>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- /contact_action_area  -->

<!-- chose_area  -->
<div class="chose_area">
     <div class="container">
          <div class="features_main_wrap">
               <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6">
                         <div class="about_image">
                              <img src="img/about/about.png" alt="" />
                         </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                         <div class="features_info">
                              <h3>Why Choose Us?</h3>
                              <p>
                                   Products and solutions that will maximize your logistics operations
                              </p>
                              <ul>
                                   <li>
                                        Apartments frequently or motionless.
                                   </li>
                                   <li>
                                        Operating our own in-house network, connecting your LCL cargo to any place required globally.
                                   </li>
                                   <li>
                                        Ensuring your shipments travel at the right temperature to protect your goods.
                                   </li>
                              </ul>

                              <div class="about_btn">
                                   <a class="boxed-btn3-line" href="about.php">About Us</a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<!--/ chose_area  -->

<!-- counter_area  -->
<div class="counter_area">
     <div class="container">
          <div class="offcan_bg">
               <div class="row">
                    <div class="col-xl-3 col-md-3">
                         <div class="single_counter text-center">
                              <h3>
                                   <span class="counter">42</span>
                                   <span>+</span>
                              </h3>
                              <p>Countries Covered</p>
                         </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                         <div class="single_counter text-center">
                              <h3>
                                   <span class="counter">97</span>
                                   <span>+</span>
                              </h3>
                              <p>Business Success</p>
                         </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                         <div class="single_counter text-center">
                              <h3><span class="counter">2342</span></h3>
                              <p>Happy Client</p>
                         </div>
                    </div>
                    <div class="col-xl-3 col-md-3">
                         <div class="single_counter text-center">
                              <h3><span class="counter">3245</span></h3>
                              <p>Business Done</p>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- /counter_area  -->

<!-- testimonial_area  -->
<div class="testimonial_area">
     <div class="container">
          <div class="row">
               <div class="col-xl-7">
                    <div class="testmonial_active owl-carousel">
                         <div class="single_carousel">
                              <div class="single_testmonial text-center">
                                   <div class="quote">
                                        <img src="img/svg_icon/quote.svg" alt="" />
                                   </div>
                                   <p>
                                        James has over twenty years experience and is one of the most senior commentators on industry issues.
                                        Her professional experience has been gained within market leading and multi-national companies.
                                        Taylor Walker is married with two adult children.
                                   </p>
                                   <div class="testmonial_author">
                                        <div class="thumb">
                                             <img src="img/case/testmonial.png" alt="" />
                                        </div>
                                        <h3>Robert Thomson</h3>
                                        <span>MANAGING DIRECTOR</span>
                                   </div>
                              </div>
                         </div>
                         <div class="single_carousel">
                              <div class="single_testmonial text-center">
                                   <div class="quote">
                                        <img src="img/svg_icon/quote.svg" alt="" />
                                   </div>
                                   <p>
                                        TAYLOR WALKER joined Shipping Saints Courier Services in june, 2008.
                                        James has a wealth of knowledge about the parcel delivery sector and over the last 12 years has held a number of senior management His focus will be to expand Shipping Saints Courier Services service options to improve our clients’ supply chain, helping them meet the needs of their customers.
                                   </p>
                                   <div class="testmonial_author">
                                        <div class="thumb">
                                             <img src="img/case/testmonial.png" alt="" />
                                        </div>
                                        <h3>TAYLOR WALKER</h3>
                                        <span>DISPATCH TEAM MANAGER</span>
                                   </div>
                              </div>
                         </div>
                         <div class="single_carousel">
                              <div class="single_testmonial text-center">
                                   <div class="quote">
                                        <img src="img/svg_icon/quote.svg" alt="" />
                                   </div>
                                   <p>
                                        Jennet Wayne, Chief Operating Officer, joined Shipping Saints Courier Services in September, 2008. Jeremys' background includes the design, development and operation of several regional and national distribution networks.
                                        Jeremy started his career as a production engineer in the mid-1980s.
                                   </p>
                                   <div class="testmonial_author">
                                        <div class="thumb">
                                             <img src="img/case/testmonial.png" alt="" />
                                        </div>
                                        <h3>JENNET WAYNE</h3>
                                        <span>DATABASE ADMINISTRATOR</span>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- /testimonial_area  -->


<?php
require "footer.php";
