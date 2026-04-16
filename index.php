<?php
include 'includes/header.php';
$page = 'home';
?>

<main>

    <!-- Banner Main Section Start Here -->
    <section class="banner-main-sec">
        <picture class="bg-img">
            <source srcset="assets/images/banner-publishing-bg.webp" type="image/webp">
            <img src="assets/images/banner-publishing-bg.jpg" class="banner-img" alt="Banner" loading="eager"
                fetchpriority="high">
        </picture>
        <div class="container">
            <div
                class="row align-items-center justify-content-between gap-3 gap-sm-3 gap-md-3 gap-lg-0 gap-xl-0 gap-xxl-0">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="banner-main-content" data-aos="fade-right" data-aos-duration="1500">
                        <h1 class="heading-one">Your Voice Matters. Let’s Get It on the Page.</h1>
                        <p>Limited time shouldn't mean your ideas go unheard. We help you transform your notes and
                            thoughts into a professional book, making sure your story finally gets published for
                            everyone to read.</p>
                        <div class="website-main-buttons">
                            <a href="#calendary-sec" class="popup-btn">Book A Discovery Call</a>
                            <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Live Chat!</button>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <!-- Banner Publishing Form Include Here -->
                    <?php include 'includes/sections/banner-publishing-form.php'; ?>
                    <!-- Banner Publishing Form Include Here -->
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Main Section End Here -->

    <!-- Step Works Section Start Here -->
    <section class="step-works-wrap step-works-publishing">
        <div class="container">
            <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                    <div class="step-works-head" data-aos="fade-right" data-aos-duration="1500">
                        <h3 class="heading-four">Our Simple Publishing Process</h3>
                        <p>We believe in total transparency. You’ll be involved at every stage with clear updates and
                            approval checks, ensuring your finished book is exactly how you imagined it, or better.</p>
                        <div class="step-works-head-img">
                            <img loading="lazy" src="assets/images/book-publishing/smooth.webp"
                                alt="Process Image Editing" class="img-fluid box2">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                    <div class="step-works-inner">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="step-works-box" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                    data-aos-duration="2000">
                                    <div class="works-box-head">
                                        <div class="works-box-head-content">
                                            <span>01.</span>
                                            <h4 class="heading-five">Share Your Vision</h4>
                                        </div>
                                        <div class="work-box-head-img">
                                            <img loading="lazy" src="assets/images/icons-imgs/content-review-white.webp"
                                                alt="Content Review" class="img-fluid">
                                        </div>
                                    </div>
                                    <p>Send us your manuscript. Our team will review your draft and chat with you about
                                        your personal goals for the book.</p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="step-works-box" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                    data-aos-duration="2000">
                                    <div class="works-box-head">
                                        <div class="works-box-head-content">
                                            <span>02.</span>
                                            <h4 class="heading-five">Polish & Perfect</h4>
                                        </div>
                                        <div class="work-box-head-img">
                                            <img loading="lazy" src="assets/images/icons-imgs/editing-white.webp"
                                                alt="Editing" class="img-fluid">
                                        </div>
                                    </div>
                                    <p>We carefully proofread and edit your work, refining the flow while making sure it
                                        meets the highest professional publishing standards.</p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="step-works-box" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                    data-aos-duration="2000">
                                    <div class="works-box-head">
                                        <div class="works-box-head-content">
                                            <span>03.</span>
                                            <h4 class="heading-five">Design & Layout</h4>
                                        </div>
                                        <div class="work-box-head-img">
                                            <img loading="lazy" src="assets/images/icons-imgs/formatting-white.webp"
                                                alt="Formatting" class="img-fluid">
                                        </div>
                                    </div>
                                    <p>Our experts handle everything visual, including interior formatting, custom
                                        illustrations, and a stunning cover that grabs a reader's attention.</p>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="step-works-box" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                    data-aos-duration="2000">
                                    <div class="works-box-head">
                                        <div class="works-box-head-content">
                                            <span>04.</span>
                                            <h4 class="heading-five">Launch & Distribute</h4>
                                        </div>
                                        <div class="work-box-head-img">
                                            <img loading="lazy" src="assets/images/icons-imgs/vector.webp" alt="Vector"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                    <p>Once you’ve given the final thumbs-up, we publish your book in your chosen
                                        formats and get it ready for readers worldwide.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Step Works Section End Here -->

    <!-- CTA Banner Section Start Here -->
    <section class="cta-banner-wrap cta-banner-publishing">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="cta-banner-content" data-aos="fade-right" data-aos-duration="1500">
                        <h3 class="heading-three">We’re Here to Help You Reach the Finish Line</h3>
                        <p>Our talented team is ready to bring your story to life. We can get your book published and
                            handle the hard work so you can proudly put your name on the cover.</p>
                        <div class="website-main-buttons">
                            <a href="#calendary-sec" class="popup-btn">Book A Discovery Call</a>
                            <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Live Chat!</button>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="cta-banner-img" data-aos="fade-left" data-aos-duration="1500">
                        <img loading="lazy" src="assets/images/book-publishing/ipad.webp"
                            alt="CTA Banner Publishing Image" class="img-fluid box2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Banner Section End Here -->

    <!-- Portfolio Publish Section Start Here -->
    <section class="portfolio-publish-wrap">
        <div class="container">
            <div class="portfolio-publish-head" data-aos="fade-down" data-aos-duration="1000">
                <h3 class="heading-two">Range Of Genres We Cater</h3>
            </div>
        </div>
        <!-- Portfolio Publish Tablist Start Here -->
        <?php include 'includes/sections/portfolio-publish-tablist-book-publishing.php'; ?>
        <!-- Portfolio Publish Tablist End Here -->
    </section>
    <!-- Portfolio Publish Section End Here -->

    <!-- Counter Satisfy Section Start Here -->
    <section class="counter-satisfy-wrap">
        <!-- Counter Satisfy Section Include Here -->
        <?php include 'includes/sections/counter-satisfy-sec.php'; ?>
        <!-- Counter Satisfy Section Include Here -->
    </section>
    <!-- Counter Satisfy Section End Here -->

    <!-- Unlock Story Section Start Here -->
    <section class="unlock-story-wrap unlock-story-marketing unlock-story-publishing">
        <div class="container">
            <div class="unlock-story-inner">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="unlock-story-content" data-aos="fade-right" data-aos-duration="1500">
                            <h2 class="heading-three">We’ve Been Around the Block (So You Don’t Have To)</h2>
                            <p>Publishing a book can feel like trying to find your way through a maze in the dark, but
                                hey, hey, we’re here to turn the lights on. Our team lives and breathes books, and we’re
                                obsessed with making sure yours doesn't just sit on a shelf, but actually gets read.</p>
                            <ul>
                                <li>Fast but Focused</li>
                                <li>A Home for Every Story</li>
                                <li>Digital-Ready</li>
                                <li>Global Reach</li>
                            </ul>
                            <div class="website-main-buttons">
                                <a class="popup-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Let's Get
                                    Started</a>
                                <a href="tel:<?php echo $locNumber; ?>" class="call-btn"
                                    style="border-color: white;color: white;">Call Now <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="unlock-story-img" data-aos="fade-left" data-aos-duration="1500">
                            <img loading="lazy" src="assets/images/book-publishing/publishing-world.webp"
                                alt="Unlock Story Publishing" class="img-fluid box2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Unlock Story Section End Here -->

    <!-- Award Brands Section End Here -->
    <!-- Award Brands Section End Here -->

    <!-- Service Offer Section Start Here -->
    <section class="service-offer-wrap">
        <div class="container">
            <div class="service-offer-head" data-aos="fade-down" data-aos-duration="1000">
                <h2 class="heading-two">Reasons To Choose Us</h2>
                <p>We work with you, not just for you. Here’s every reason why you should choose us. </p>
            </div>
            <div class="service-offer-inner">
                <div class="service-offer-slider">
                    <div class="service-offer-box" data-aos="flip-up" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <h4 class="heading-five">We Speak Every Story </h4>
                        <div class="offer-box-img">
                            <img loading="lazy" src="assets/images/icons-imgs/line-editing-white.webp"
                                alt="Line Editing" class="img-fluid">
                        </div>
                        <p>Your project might be a sprawling space odyssey or a secret family recipe book, either way,
                            our team has the range to handle it. No matter the genre, we know exactly how to bring your
                            specific idea to life.</p>
                        <div class="website-main-buttons">
                            <a href="void:;" class="read-more-btn">Learn More!</a>
                        </div>
                    </div>
                    <div class="service-offer-box" data-aos="flip-up" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <h4 class="heading-five">Your Voice, Only Better </h4>
                        <div class="offer-box-img">
                            <img loading="lazy" src="assets/images/icons-imgs/text.webp" alt="Text Icon"
                                class="img-fluid">
                        </div>
                        <p>We aren't here to change your story; we’re here to help you tell it. We match your personal
                            style so that when people read your book, it sounds 100% like you, just polished to
                            perfection.</p>
                        <div class="website-main-buttons">
                            <a href="void:;" class="read-more-btn">Learn More!</a>
                        </div>
                    </div>
                    <div class="service-offer-box" data-aos="flip-up" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <h4 class="heading-five">Zero Stress, All Progress </h4>
                        <div class="offer-box-img">
                            <img loading="lazy" src="assets/images/icons-imgs/structural-editing-white.webp"
                                alt="Structural Editing" class="img-fluid">
                        </div>
                        <p>We handle the confusing technical stuff and keep you in the loop every step of the way,
                            making the journey from "rough draft" to "finished book" actually fun.</p>
                        <div class="website-main-buttons">
                            <a href="void:;" class="read-more-btn">Learn More!</a>
                        </div>
                    </div>
                    <div class="service-offer-box" data-aos="flip-up" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <h4 class="heading-five">Covers You’ll Want to Brag About </h4>
                        <div class="offer-box-img">
                            <img loading="lazy" src="assets/images/icons-imgs/copy-editing-white.webp"
                                alt="Copy Editing" class="img-fluid">
                        </div>
                        <p>People do judge books by their covers, so we make sure yours is a showstopper. Our designs
                            tell your story’s vibe at a single glance.</p>
                        <div class="website-main-buttons">
                            <a href="void:;" class="read-more-btn">Learn More!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Offer Section End Here -->

    <!-- Main CTA Section Start Here -->
    <section class="cta-main-wrap cta-main-publishing">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 col-sm-12 col-12">
                    <div class="cta-main-content" data-aos="zoom-in-down" data-aos-duration="1500">
                        <h3 class="heading-three">Real Experts, Real Results</h3>
                        <p>At Godspeed Publishing, we know your book is one-of-a-kind. Our mission is to make sure the
                            final product reflects your exact vision while meeting the highest professional standards.
                            Contact us now!</p>
                        <div class="website-main-buttons">
                            <button class="chat-btn" onclick="<?php echo $locChatClick; ?>">Live Chat!</button>
                            <a href="tel:<?php echo $locNumber; ?>" class="call-btn">+1(646)-389-2410</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main CTA Section End Here -->

    <?php include "includes/calendly-book-publishing.php"?>


    <!-- Customer FeedBack Section Start Here -->
    <section class="customer-feedback-wrap new_test_bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="customer-feedback-content">
                        <div class="feedback-content-head" data-aos="fade-down-right" data-aos-duration="1500">
                            <h3 class="heading-two">Happy Words from Our Clients</h3>
                        </div>
                        <div class="customer-feedback-slider">
                            <div class="feedback-slider-box" data-aos="fade-right" data-aos-duration="1000">
                                <div class="feedback-box-head">
                                    <div class="feedback-slider-thumb">
                                        <img loading="lazy" src="assets/images/testimonials/tt1.webp" alt="Thumb Girl"
                                            class="img-fluid">
                                    </div>
                                    <div class="feedback-slider-text">
                                        <h4 class="heading-five">Marko Kloos</h4>
                                        <p>Echoes of Silence</p>
                                        <div class="feedback-slider-ratings">
                                            <div class="ratings-stars-img">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-slider-para">
                                    <p>"Experience was great. Nikki, my Project Manager, was very professional. I look
                                        forward to working with Goodspeed Publishing again."</p>
                                </div>
                            </div>
                            <div class="feedback-slider-box" data-aos="fade-right" data-aos-duration="1000">
                                <div class="feedback-box-head">
                                    <div class="feedback-slider-thumb">
                                        <img loading="lazy" src="assets/images/testimonials/tt2.webp" alt="Thumb Boy"
                                            class="img-fluid">
                                    </div>
                                    <div class="feedback-slider-text">
                                        <h4 class="heading-five">Sylvia Melena</h4>
                                        <p>Lead Magnet Formula</p>
                                        <div class="feedback-slider-ratings">
                                            <div class="ratings-stars-img">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-slider-para">
                                    <p>"Goodspeed Publishing boosted Lead Magnet Formula with expert marketing, social
                                        media ads, and promotions. Their strategy turned my book into an Amazon
                                        bestseller. I highly recommend them to all authors!"</p>
                                </div>
                            </div>
                            <div class="feedback-slider-box" data-aos="fade-right" data-aos-duration="1000">
                                <div class="feedback-box-head">
                                    <div class="feedback-slider-thumb">
                                        <img loading="lazy" src="assets/images/testimonials/tt3.webp" alt="Thumb Boy"
                                            class="img-fluid">
                                    </div>
                                    <div class="feedback-slider-text">
                                        <h4 class="heading-five">Aleina Mackey</h4>
                                        <p>Child 9: A Memoir of Breaking Free</p>
                                        <div class="feedback-slider-ratings">
                                            <div class="ratings-stars-img">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-slider-para">
                                    <p>"The majority of my experience working with Goodspeed Publishing to publish my
                                        book was good. The entire team was helpful and effective, although I thought the
                                        timeframe should have been communicated more clearly. Ultimately, the book was
                                        published to an excellent standard, and I was grateful for their input."</p>
                                </div>
                            </div>
                            <div class="feedback-slider-box" data-aos="fade-right" data-aos-duration="1000">
                                <div class="feedback-box-head">
                                    <div class="feedback-slider-thumb">
                                        <img loading="lazy" src="assets/images/testimonials/tt4.webp" alt="Thumb Boy"
                                            class="img-fluid">
                                    </div>
                                    <div class="feedback-slider-text">
                                        <h4 class="heading-five">Nikolas Pleiadi</h4>
                                        <p>In Powder Blue</p>
                                        <div class="feedback-slider-ratings">
                                            <div class="ratings-stars-img">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-slider-para">
                                    <p>"Goodspeed Publishing has been great to work with! Great communication,
                                        high-quality product, and great packing of the finished product!"</p>
                                </div>
                            </div>
                            <div class="feedback-slider-box" data-aos="fade-right" data-aos-duration="1000">
                                <div class="feedback-box-head">
                                    <div class="feedback-slider-thumb">
                                        <img loading="lazy" src="assets/images/testimonials/tt5.webp" alt="Thumb Boy"
                                            class="img-fluid">
                                    </div>
                                    <div class="feedback-slider-text">
                                        <h4 class="heading-five">Astrid Vail</h4>
                                        <p>Claiming Jafar: Fairytales After Dark</p>
                                        <div class="feedback-slider-ratings">
                                            <div class="ratings-stars-img">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-slider-para">
                                    <p>"The entire experience was wonderful! My communications with Tammie were great
                                        and very helpful. A few years back, my wife published a book with Goodspeed
                                        Publishing. That was also a wonderful experience. Morris Publishing is highly
                                        recommended!"</p>
                                </div>
                            </div>
                            <div class="feedback-slider-box" data-aos="fade-right" data-aos-duration="1000">
                                <div class="feedback-box-head">
                                    <div class="feedback-slider-thumb">
                                        <img loading="lazy" src="assets/images/testimonials/tt6.webp" alt="Thumb Boy"
                                            class="img-fluid">
                                    </div>
                                    <div class="feedback-slider-text">
                                        <h4 class="heading-five">Jack Dane</h4>
                                        <p>The Other Couple: A Psychological Thriller</p>
                                        <div class="feedback-slider-ratings">
                                            <div class="ratings-stars-img">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="feedback-slider-para">
                                    <p>"Goodspeed Publishing made the entire publishing and printing process for our
                                        book a dream! It was seamless. The final product is not only great, but also the
                                        customer service, kindness, and attentiveness were second to none."</p>
                                </div>
                            </div>
                        </div>
                        <div class="customer-feedback-reviews" data-aos="fade-up-right" data-aos-duration="1500">
                            <ul class="feedback-reviews-img">
                                <li><img loading="lazy" src="assets/images/reviews-thumb/thumb-boy-02.webp"
                                        alt="Thumb Boy Small" class="img-fluid"></li>
                                <li><img loading="lazy" src="assets/images/reviews-thumb/thumb-boy-03.webp"
                                        alt="Thumb Boy Small" class="img-fluid"></li>
                                <li><img loading="lazy" src="assets/images/reviews-thumb/thumb-girl-01.webp"
                                        alt="Thumb Girl Small" class="img-fluid"></li>
                                <li><img loading="lazy" src="assets/images/reviews-thumb/thumb-girl-02.webp"
                                        alt="Thumb Girl Small" class="img-fluid"></li>
                                <li><img loading="lazy" src="assets/images/reviews-thumb/thumb-girl-03.webp"
                                        alt="Thumb Girl Small" class="img-fluid"></li>
                                <li><img loading="lazy" src="assets/images/reviews-thumb/thumb-boy-01.webp"
                                        alt="Thumb Boy Small" class="img-fluid"></li>
                            </ul>
                            <span>400+ Books Published</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="customer-feedback-images" data-aos="fade-left" data-aos-duration="1000">
                        <img loading="lazy" src="assets/images/testimonials/t1.webp" alt="Customer feedback Img"
                            class="img-fluid box2">
                        <img loading="lazy" src="assets/images/testimonials/t2.webp" alt="Customer feedback Img"
                            class="img-fluid box2">
                        <img loading="lazy" src="assets/images/testimonials/t3.webp" alt="Customer feedback Img"
                            class="img-fluid box2">
                        <img loading="lazy" src="assets/images/testimonials/t4.webp" alt="Customer feedback Img"
                            class="img-fluid box2">
                        <img loading="lazy" src="assets/images/testimonials/t5.webp" alt="Customer feedback Img"
                            class="img-fluid box2">
                        <img loading="lazy" src="assets/images/testimonials/t6.webp" alt="Customer feedback Img"
                            class="img-fluid box2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Customer FeedBack Section End Here -->

    <!--Contact Main Form Start Here -->
    <section class="contact-main-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-main-image" data-aos="fade-right" data-aos-duration="1500">
                        <img loading="lazy" src="assets/images/book-publishing/talk-to-us.webp" alt="Contact Main Book"
                            class="img-fluid box2">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-main-inner">
                        <div class="contact-inner-head" data-aos="fade-down" data-aos-duration="1500">
                            <h4 class="heading-three">Talk To Us!</h4>
                            <p>Unlock the door to your book's success with our tailored publishing services.</p>
                        </div>
                        <div class="contact-main-form" data-aos="fade-left" data-aos-duration="1500">
                            <form action="https://leads.infinityprojectmanager.com/brand/goodspeedpublishing/lead"
                                method="GET" class="myForm">
                                <input type="hidden" name="city" class="city">
                                <input type="hidden" name="country" class="country">
                                <input type="hidden" name="ip" class="ip">
                                <input type="hidden" name="zip_code" class="zip_code">
                                <input type="hidden" name="brand_name" value="goodspeedpublishing.com">
                                <input type="hidden" id="lead_area" name="lead_area"
                                    value="https://goodspeedpublishing.com/lp/book-publishing">
                                <div class="row">
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                        <div class="form-group phne-inpt">
                                            <input type="phone" class="countryCode" name="phone" required>
                                            <input type="hidden" class="fullPhoneNumber" name="fullPhoneNumber">
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group form-group-last">
                                            <button type="submit-btn" class="submit-btn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Main Form End Here -->

    <!--FAQS Question Section Start Here -->
    <section class="faqs-sec-wrap">
        <div class="container">
            <div class="faqs-sec-head" data-aos="fade-down" data-aos-duration="1500">
                <h4 class="heading-two">Frequently Asked Questions</h4>
            </div>
            <div class="row align-items-center">
                <div class="col-xx-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="faqs-sec-item">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item" data-aos="fade-right" data-aos-duration="1500">
                                <h5 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How long does the publishing process take?
                                    </button>
                                </h5>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Most projects take between 4 to 8 weeks. Your own speed matters here, because
                                        fast feedback helps us publish sooner.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-right" data-aos-duration="1500">
                                <h5 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Will I get a printed copy to review before it goes live?
                                    </button>
                                </h5>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We send a digital PDF proof for you to check. This method saves you time and
                                        keeps your costs down.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-right" data-aos-duration="1500">
                                <h5 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Do I get any free copies of my book once it’s published?
                                    </button>
                                </h5>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        You can order unlimited copies at the basic printing and shipping price. We
                                        never charge you extra for your own books.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-right" data-aos-duration="1500">
                                <h5 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Who handles the printing and shipping to readers?
                                    </button>
                                </h5>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The stores where your book is sold handle everything. Amazon prints and ships
                                        each order while you collect the royalties.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-right" data-aos-duration="1500">
                                <h5 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Do I keep the rights to my book? Who actually owns it?
                                    </button>
                                </h5>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Yes, 100%! You fully own your book and all the rights. Your sales and
                                        distribution accounts are also set up in your name, not ours.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQS Question Section End Here -->

</main>

<?php
include 'includes/footer.php';
$page = 'home';
?>