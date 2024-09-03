

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg" style="background-image: url(<?php echo $site_url; ?>/assets/images/backgrounds/page-header-bg.jpg)">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>Book a Service</h2>
                    <p>Professional Smartphone Laptop Repair Services in USA Since 2000</p>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo $site_url; ?>">Home</a></li>
                        <li><span>//</span></li>
                        <li>Appointment</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Book Service Start-->
        <section class="book-service">
            <div class="book-service__bg"
                style="background-image: url(<?php echo $site_url; ?>/assets/images/backgrounds/book-services-bg-img-1.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="book-service__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Book a Service</span>
                                <h2 class="section-title__title">Flexible Repair Options
                                    <br> That Work For You</h2>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="book-service__single">
                                        <div class="book-service__icon">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <h3 class="book-service__title">12 Months Warranty</h3>
                                        <p class="book-service__text">Get peace of mind with our 12-month warranty for reliable device support and service.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="book-service__single">
                                        <div class="book-service__icon">
                                            <span class="icon-low-price"></span>
                                        </div>
                                        <h3 class="book-service__title">Low Cost Services</h3>
                                        <p class="book-service__text">Quality repairs at affordable rates, ensuring your devices are restored without breaking the bank.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="book-service__single">
                                        <div class="book-service__icon">
                                            <span class="icon-delivery-man"></span>
                                        </div>
                                        <h3 class="book-service__title">Fast Delivery</h3>
                                        <p class="book-service__text">Get your device back in no time with our lightning-fast repair and delivery service.</p>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="book-service__single">
                                        <div class="book-service__icon">
                                            <span class="icon-headphones"></span>
                                        </div>
                                        <h3 class="book-service__title">24/7 Live Support</h3>
                                        <p class="book-service__text">Always available to assist you, ensuring seamless solutions for your needs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="book-service__right">
                            <p class="book-service__right-text">Choose from a range of customizable repair solutions tailored to your needs. Our expert team ensures seamless repairs that fit your schedule and budget, providing convenience and peace of mind every step of the way.</p>
                            <div class="book-service__right-img">
                                <img src="<?php echo $site_url; ?>/assets/images/resources/book-service-img-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Book Service End-->



        <?php include("contactdetails.php"); ?>



        <!--Contact Page Two Start-->
        <section class="contact-page-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-page-two__left">
                            <form action="<?php echo $site_url; ?>/assets/inc/sendemail.php"
                                class="contact-page-two__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="contact-page-two__form-input-box">
                                            <input type="text" placeholder="Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-page-two__form-input-box">
                                            <input type="email" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-page-two__form-input-box">
                                            <input type="text" placeholder="Subject" name="Subject">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="contact-page-two__form-input-box">
                                            <input type="text" placeholder="Pick a date" name="date" id="datepicker">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-page-two__form-input-box">
                                            <div class="select-box">
                                                <select class="wide">
                                                    <option data-display="Select Services">Select Services</option>
                                                    <option value="1">Select Services 01</option>
                                                    <option value="2">Select Services 02</option>
                                                    <option value="3">Select Services 03</option>
                                                    <option value="3">Select Services 04</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-page-two__form-input-box text-message-box">
                                            <textarea name="message" placeholder="Comment"></textarea>
                                        </div>
                                        <div class="contact-page-two__btn-box">
                                            <a href="<?php echo $site_url; ?>/about" class="thm-btn contact-page-two__btn">Send Message</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="contact-page-two__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">MAKE APPOINTMENT</span>
                                <h2 class="section-title__title">Book A Services</h2>
                            </div>
                            <p class="contact-page-two__right-text">Conveniently schedule expert services for your device with our online booking system.</p>
                            <p class="contact-page-two__right-text-2">Easily schedule your device repair or maintenance appointment online. Our streamlined booking process ensures convenience and prompt service, so you can get back to using your device hassle-free.</p>
                            <div class="contact-page-two__points-box-inner">
                                <div class="contact-page-two__points-box">
                                    <h3 class="contact-page-two__points-title">New York</h3>
                                    <ul class="contact-page-two__points-list list-unstyled">
                                        <li>
                                            <div class="icon">
                                                <span class="icon-send"></span>
                                            </div>
                                            <div class="text">
                                                <p>123 Wenatchee, WA 98801</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-mail"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="mailto:lumanjamali@gmail.com">lumanjamali@gmail.com</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-call"></span>
                                            </div>
                                            <div class="text">
                                                <p><a href="tel:2698733580">269 873 3580</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <span class="icon-clock"></span>
                                            </div>
                                            <div class="text">
                                                <p>09:00 AM - 22:00 PM</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page Two End-->



        <?php include("testimonial.php"); ?>


        