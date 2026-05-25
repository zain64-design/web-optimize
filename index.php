<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Accept-CH" content="DPR, Viewport-Width">
    <title> Book Publishers for Authors | Edit, Publish & Distribute</title>
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon-icon.png">
    <meta name="keywords"
        content="book publishers, publish my book, self publishing, best book publishers for new authors, self publishing a book, book publishing companies, publish a story, publish your book, novella publishers, publishers in USA, get my story published, children's book publishers">
    <meta name="description"
        content="Professional book publishers helping authors refine, publish, and distribute books globally. Start your publishing journey with expert support today.">
    <?php  include 'includes/sections/variables-file.php';?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- banner preload -->
    <link rel="preload" as="image" href="assets/images/hero-bg.webp" imagesrcset="assets/images/hero-bg-mobile.webp 767w,
                       assets/images/hero-bg.webp 1200w" imagesizes="100vw" fetchpriority="high">
    <!-- GOOGLE FONTS DEFERRED CSS -->
    <style>
    *,
::after,
::before {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

@media (prefers-reduced-motion:no-preference) {
    :root {
        scroll-behavior: smooth
    }
}
    
    @font-face {
        font-family: "Poppins Fallback";
        src: local("Segoe UI");
        size-adjust: 111.20%;
        ascent-override: 97.80%;
        descent-override: 31.40%;
        line-gap-override: 0%
    }

    :root {
        --bg: #f4f6fb;
        --bg-2: #eaeef5;
        --card: #ffffff;
        --card-2: #f6f8fc;
        --text: #0f172a;
        --muted: #64748b;
        --accent: #c6f24e;
        --accent-dark: #a9d630;
        --accent-soft: rgba(170, 214, 48, .08);
        --accent-ring: rgba(170, 214, 48, 0.18);
        --border: #e2e8f0;
        --border-active: #c6f24e;
        --radius: 16px;
        --radius-sm: 12px;
        --shadow: 0 20px 50px rgba(170, 214, 48, .08);
        --transition: .25s cubic-bezier(.4, 0, .2, 1)
    }

    body {
        font-family: Poppins, "Poppins Fallback", Arial, Helvetica, sans-serif !important
    }

    .logo-one img,
    .logo-two img {
        object-fit: contain
    }

    .logo-two,
    .review-line {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap
    }

    header {
        background: #fff;
        width: 100%;
        box-shadow: 0 0 20px -5px #b2b2b2;
        position: fixed;
        top: 0;
        z-index: 1000;
        transition: .3s ease-in-out
    }

    header nav.navbar {
        padding: 10px 0;
        align-items: center;
        position: inherit
    }

    header nav.navbar .navbar-brand {
        padding: 0;
        margin: 0
    }

    header nav.navbar .navbar-brand .logo {
        max-width: 100%;
        height: 45px;
        object-fit: contain;
        margin: 0;
        transition: .5s ease-in-out;
        display: block
    }

    header nav.navbar .website-main-buttons {
        justify-content: center;
        margin: 0;
        gap: 10px
    }

    header nav.navbar .website-main-buttons a.call-btn {
        background: 0 0;
        color: #161a1d;
        border: 2px solid #8340ee;
        border-radius: 5px;
        margin: 0
    }

    .banner-main-content .website-main-buttons button.chat-btn:hover {
        background: #8340ee;
        color: #fff;
        transform: scale(.9);
        border-color: #8340ee
    }

    header nav.navbar .website-main-buttons a.call-btn i {
        margin: 0 0 0 5px;
        transform: rotate(-45deg)
    }

    .banner-main-sec {
        min-height: 400px;
        padding: 160px 0 50px;
        position: relative;
        z-index: 1;
        background: #000;
        overscroll-behavior-y: contain
    }

    .banner-main-sec .bg-img {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: -1
    }

    .banner-main-sec .bg-img .banner-img {
        object-fit: cover;
        object-position: center;
        height: 100%;
        width: 100%
    }

    .banner-main-content .heading-one {
        font-size: 30px;
        font-weight: 700;
        line-height: 40px;
        color: #fff;
        margin: 0 0 19px;
        text-align: left
    }

    .banner-main-content p {
        color: #fff;
        text-align: left
    }

    .banner-main-content .website-main-buttons {
        margin: 30px 0 0;
        gap: 10px
    }

    .banner-main-content .website-main-buttons button.chat-btn {
        background: 0 0;
        color: #fff;
        border: 2px solid #8340ee;
        border-radius: 5px
    }

    .banner-bulid-points {
        margin-bottom: 15px
    }

    .logo-one,
    .logo-two {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        gap: 15px;
        margin: 0 0 20px
    }

    .banner-bulid-points ul li {
        color: #fff;
        list-style: none;
        position: relative;
        padding: 0 0 0 30px
    }

    .banner-bulid-points ul li::before {
        content: var(--icon);
        font-family: "Font Awesome 7 Free";
        font-weight: 700;
        color: var(--accent);
        position: absolute;
        left: 0
    }

    .logo-two img {
        height: 50px
    }

    .review-line span {
        margin: 0 10px;
        list-style: none
    }

    .banner-inner-published-form {
        width: 100%;
        background: var(--card);
        border: 1px solid var(--border);
        border-radius: var(--radius);
        padding: 28px 26px 22px;
        box-shadow: var(--shadow)
    }

    .form-header {
        text-align: center;
        margin-bottom: 18px
    }

    .form-header h3 {
        font-size: 22px;
        font-weight: 800;
        letter-spacing: .3px;
        margin: 0 0 6px;
        text-transform: uppercase;
        color: var(--text)
    }

    .form-header p {
        font-size: 14px;
        color: var(--muted);
        margin: 0
    }

    .form-header p span {
        color: #00e533;
        font-weight: 700;
        font-size: 20px;
        text-decoration: underline
    }

    .progress-wrap {
        margin-bottom: 22px
    }

    .progress-track {
        height: 8px;
        background: var(--card-2);
        border-radius: 999px;
        overflow: hidden;
        border: 1px solid var(--border)
    }

    .progress-fill {
        height: 100%;
        width: 0%;
        background: linear-gradient(90deg, var(--accent-dark), var(--accent));
        border-radius: 999px;
        transition: width .45s cubic-bezier(.4, 0, .2, 1);
        box-shadow: 0 0 12px var(--accent-ring)
    }

    .btn-nav,
    .card-inner,
    .card-inner i,
    .field-input {
        transition: all var(--transition)
    }

    .progress-meta {
        display: -webkit-box;
        display: -webkit-flex;
        display: flex;
        justify-content: space-between;
        margin-top: 8px;
        font-size: 12px;
        color: var(--muted);
        font-weight: 500
    }

    .form-step {
        animation: .35s fadeSlide
    }

    @keyframes fadeSlide {
        from {
            opacity: 0;
            transform: translateY(8px)
        }

        to {
            opacity: 1;
            transform: translateY(0)
        }
    }

    .question-block {
        margin-bottom: 20px
    }

    .question-title {
        font-size: 14px;
        font-weight: 600;
        margin: 0 0 10px;
        color: var(--text);
        display: flex;
        align-items: center;
        gap: 6px
    }

    .q-num {
        color: var(--muted);
        font-weight: 700
    }

    .card-inner,
    .step-heading {
        color: var(--text);
        text-align: center
    }

    .step-heading {
        font-size: 16px;
        font-weight: 700;
        margin: 0 0 16px
    }

    .radio-card-group {
        margin: 0;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
        gap: 10px
    }

    .radio-card {
        display: block;
        cursor: pointer;
        margin: 0;
        height: 100%
    }

    .radio-card input {
        position: absolute;
        opacity: 0;
        pointer-events: none
    }

    .card-inner {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 8px;
        padding: 14px 10px;
        background: var(--card-2);
        border: 1.5px solid var(--border);
        border-radius: var(--radius-sm);
        font-size: 13px;
        font-weight: 500;
        height: 100%;
        min-height: 56px;
        position: relative
    }

    .card-inner i,
    .field-label,
    .radio-card input:checked+.card-inner i {
        color: var(--muted)
    }

    .btn-nav,
    .card-inner i,
    .field-input {
        font-size: 14px
    }

    .radio-card:hover .card-inner {
        border-color: var(--accent);
        transform: translateY(-2px);
        background: #fff;
        box-shadow: 0 6px 16px rgba(198, 242, 78, .08)
    }

    .radio-card:hover .card-inner i {
        color: var(--accent)
    }

    .radio-card input:checked+.card-inner {
        border-color: var(--accent);
        background: var(--accent-soft);
        box-shadow: 0 0 0 3px var(--accent-ring)
    }

    .radio-card input:checked+.card-inner::after {
        content: "\f00c";
        font-family: "Font Awesome 7 Free";
        font-weight: 900;
        position: absolute;
        top: 6px;
        right: 8px;
        font-size: 10px;
        color: var(--muted)
    }

    .field-input.is-invalid,
    .radio-card-group.error .card-inner {
        border-color: #ef4444;
        animation: .3s shake
    }

    @keyframes shake {

        0%,
        100% {
            transform: translateX(0)
        }

        25% {
            transform: translateX(-4px)
        }

        75% {
            transform: translateX(4px)
        }
    }

    .field-label {
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 6px;
        text-transform: uppercase;
        letter-spacing: .5px
    }

    .btn-prev,
    .field-input {
        background: #fff;
        color: var(--text)
    }

    .field-input {
        border: 1.5px solid var(--border);
        border-radius: var(--radius-sm);
        padding: 12px 14px;
        width: 100%
    }

    .field-input::placeholder {
        color: #94a3b8;
        font-size: 14px
    }

    .field-input:focus {
        outline: 0;
        border-color: var(--accent) !important;
        background: #fff;
        box-shadow: 0 0 0 3px var(--accent-ring) !important
    }

    textarea.field-input {
        resize: vertical
    }

    .form-nav {
        display: flex;
        gap: 10px;
        margin-top: 18px
    }

    .btn-nav {
        flex: 1;
        padding: 14px 18px;
        border-radius: var(--radius-sm);
        font-weight: 700;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        letter-spacing: .3px
    }

    .btn-prev {
        border: 1.5px solid var(--border);
        flex: 0 0 auto;
        padding: 14px 20px
    }

    .btn-prev:hover {
        background: var(--card-2);
        border-color: #cbd5e1
    }

    .btn-next,
    .btn-submit {
        background: var(--accent-dark);
        color: #fff;
        text-transform: uppercase;
        box-shadow: 0 8px 20px rgba(198, 242, 78, .25)
    }

    .btn-next:hover,
    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 28px rgba(198, 242, 78, .35)
    }

    .btn-next:active,
    .btn-submit:active {
        transform: translateY(0)
    }

    .trust-note {
        margin: 14px 0 0;
        font-size: 12px;
        text-align: center;
        color: var(--muted)
    }

    @media (max-width:480px) {
        .banner-inner-published-form {
            padding: 22px 18px 18px
        }

        .form-header h3 {
            font-size: 18px
        }

        .card-inner {
            font-size: 12px;
            padding: 12px 8px;
            min-height: 50px
        }

        .btn-nav {
            font-size: 13px;
            padding: 12px 14px
        }
    }

    [hidden] {
        display: none !important
    }
    .whatsapp-float {
    position: fixed;
    bottom: 15px;
    left: 15px;
    right: auto;
    height: 50px;
    width: 50px;
    align-content: center;
    text-align: center;
    background-color: #25d366;
    border-radius: 50%;
    padding: 5px;
    z-index: 9999;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    transition: transform 0.2s ease-in-out;
}
 
.whatsapp-float:hover {
  transform: scale(1.1);
}

.whatsapp-float > i {
    color: #fff;
    font-size: 26px;
}
    </style>
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" />
    </noscript>
    <!-- BOOTSTRAP DEFERRED CSS -->
    <link rel="preload" href="assets/css/bootstrap.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'" />
        
    <noscript>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </noscript>
    <link rel="stylesheet" href="assets/css/custom.css" />
    <!-- FONTAWESOME DEFERRED CSS: -->
    <link rel="preload" as="style" href="assets/fontawesome/css/all.min.css"
        onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" />
    </noscript>
    <!-- OTHER DEFERRED CSS: -->
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'" />
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css"
        as="style" onload="this.onload=null;this.rel='stylesheet'" />
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css" />
    </noscript>

    <!-- Meta Pixel Code -->
    <script>
!function(e,t,n,a,c,o,s){e.fbq||(c=e.fbq=function(){c.callMethod?c.callMethod.apply(c,arguments):c.queue.push(arguments)},e._fbq||(e._fbq=c),c.push=c,c.loaded=!0,c.version="2.0",c.queue=[],(o=t.createElement(n)).async=!0,o.src=a,(s=t.getElementsByTagName(n)[0]).parentNode.insertBefore(o,s))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js"),fbq("init","2159042654890734"),fbq("track","PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2159042654890734&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->
    <!-- Google Tag Manager -->
    <script>
!function(e,t,a,r,g){e[r]=e[r]||[],e[r].push({"gtm.start":new Date().getTime(),event:"gtm.js"});var n=t.getElementsByTagName(a)[0],s=t.createElement(a);s.async=!0,s.src="https://www.googletagmanager.com/gtm.js?id="+g+("dataLayer"!=r?"&l="+r:""),n.parentNode.insertBefore(s,n)}(window,document,"script","dataLayer","GTM-K52MGDH2");
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11316340682"></script>
    <script>function gtag(){dataLayer.push(arguments)}window.dataLayer=window.dataLayer||[],gtag("js",new Date),gtag("config","AW-11316340682");</script>
    <script id="vtag-ai-js" async src="https://r2.leadsy.ai/tag.js" data-pid="3YGHIQ0iUzhQ3nlP" data-version="062024">
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K52MGDH2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<header class=main-header>
    <div class=container>
        <nav
            class="justify-content-lg-between justify-content-center justify-content-md-between justify-content-sm-center justify-content-xl-between justify-content-xxl-between navbar navbar-expand-lg">
            <a class=navbar-brand href=void:;><img class=logo alt=logo height=45 width=258 src=assets/images/logo.webp
                    loading=lazy></a>
            <div class=navbar-main-nav>
                <div class=website-main-buttons><a class="popup-btn m-0" href=#calendary-sec>Book Free Consultation <a
                            class=call-btn href="tel:<?php echo $locNumber; ?>">Call Us Now <i
                                class="fa-solid fa-arrow-right"></i></a></div>
            </div>
        </nav>
    </div>
</header>
<main>
    <section class=banner-main-sec>
        <picture class=bg-img>
            <source height=1700 srcset=assets/images/hero-bg-mobile.webp type=image/webp width=767
                media="(max-width: 767px)">
            <source height=768 srcset=assets/images/hero-bg.webp type=image/webp width=1400><img
                class="img-fluid banner-img" alt=Banner height=768 width=1400 src=assets/images/hero-bg.webp
                loading=eager fetchpriority=high>
        </picture>
        <div class=container>
            <div
                class="row align-items-center gap-3 gap-lg-0 gap-md-3 gap-sm-3 gap-xl-0 gap-xxl-0 justify-content-between">
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-12">
                    <div class=banner-main-content>
                        <h1 class=heading-one>Your Book Deserves To Be Read. Let's Publish it Together!</h1>
                        <p>Don’t let a busy schedule keep your ideas unheard. Your voice matters. We handle every
                            detail, from start to finish, so you can share your message with the world.
                        <h2 class=banner-heading-two>Our Proven Process to Author Success:</h2>
                        <div class=banner-bulid-points>
                            <ul>
                                <li style="--icon:'\f304'">Drafting: Turning your raw ideas into a structured
                                    masterpiece.
                                <li style="--icon:'\f3a5'">Polishing: Refining your unique voice for a professional,
                                    high-end finish.
                                <li style="--icon:'\f1fc'">Designing: Scroll-stopping cover art designed to grab
                                    attention instantly.
                                <li style="--icon:'\f57d'">Publishing: Seamless global distribution across all major
                                    platforms.
                                <li style="--icon:'\f0a1'">Marketing: Connecting your story with the readers who need it
                                    most.
                            </ul>
                        </div>
                        <div class=review-line>
                            <p>Rated 8.8 out of 10</p><span><i class="fa-solid fa-star" style=color:#ffd43b></i> <i
                                    class="fa-solid fa-star" style=color:#ffd43b></i> <i class="fa-solid fa-star"
                                    style=color:#ffd43b></i> <i class="fa-solid fa-star" style=color:#ffd43b></i></span>
                            <p>based on 1,276 satisfied customers.
                        </div>
                        <div class=website-main-buttons><a class=popup-btn href=#calendary-sec>Talk To A Consultant</a>
                            <button class=chat-btn onclick="<?php echo $locChatClick; ?>">Chat for 35% OFF</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <div class=banner-inner-published-form>
                        <div class=form-header>
                            <h3>Start Your Publishing Journey!</h3>
                            <p>Get Your Free Publishing Quote & <span>35% OFF</span> Discount!
                        </div>
                        <div class=progress-wrap>
                            <div class=progress-track>
                                <div class=progress-fill id=progressFill></div>
                            </div>
                            <div class=progress-meta><span id=progressLabel>Step 1 of 2</span> <span
                                    id=progressPercent>0%</span></div>
                        </div>
                        <form action=https://leads.infinityprojectmanager.com/brand/goodspeedpublishing/lead
                            class=myForm novalidate><input name=city type=hidden class=city> <input name=country
                                type=hidden class=country> <input name=ip type=hidden class=ip> <input name=zip_code
                                type=hidden class=zip_code> <input name=brand_name type=hidden
                                value=goodspeedpublishing.com> <input name=lead_area type=hidden
                                value=https://goodspeedpublishing.com/lp/book-publishing id=lead_area>
                            <div class=form-step data-step=1>
                                <div class=question-block>
                                    <h4 class=question-title><span class=q-num>1.</span> Do you have a manuscript ready?
                                    </h4>
                                    <div class=radio-card-group data-field=manuscript-ready data-required=true>
                                        <div class=group><label class=radio-card><input name=manuscript-ready type=radio
                                                    value="Yes, I'm ready to publish today"> <span class=card-inner><i
                                                        class="fa-solid fa-book-open"></i><span>Yes,
                                                        Ready</span></span></label></div>
                                        <div class=group><label class=radio-card><input name=manuscript-ready type=radio
                                                    value="No, I do not have a book or manuscript ready"> <span
                                                    class=card-inner><i class="fa-regular fa-circle-xmark"></i><span>No,
                                                        Still Drafting</span></span></label></div>
                                    </div>
                                </div>
                                <div class=question-block>
                                    <h4 class=question-title><span class=q-num>2.</span> Have you published before?</h4>
                                    <div class=radio-card-group data-field=published-before data-required=true>
                                        <div class=group><label class=radio-card><input name=published-before type=radio
                                                    value=Yes> <span class=card-inner><i
                                                        class="fa-solid fa-trophy"></i><span>Yes</span></span></label>
                                        </div>
                                        <div class=group><label class=radio-card><input name=published-before type=radio
                                                    value=No> <span class=card-inner><i
                                                        class="fa-solid fa-award"></i><span>No</span></span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class=question-block>
                                    <h4 class=question-title><span class=q-num>3.</span> What type of book are you
                                        planning?</h4>
                                    <div class=radio-card-group data-field=plan-on-publishing data-required=true>
                                        <div class=group><label class=radio-card><input name=plan-on-publishing
                                                    type=radio value=Fiction><span class=card-inner><i
                                                        class="fa-solid fa-rocket"></i><span>Fiction</span></span></label>
                                        </div>
                                        <div class=group><label class=radio-card><input name=plan-on-publishing
                                                    type=radio value=Non-Fiction><span class=card-inner><i
                                                        class="fa-solid fa-book"></i><span>Non-Fiction</span></span></label>
                                        </div>
                                        <div class=group><label class=radio-card><input name=plan-on-publishing
                                                    type=radio value=Children><span class=card-inner><i
                                                        class="fa-solid fa-child"></i><span>Children's</span></span></label>
                                        </div>
                                        <div class=group><label class=radio-card><input name=plan-on-publishing
                                                    type=radio value=Other><span class=card-inner><i
                                                        class="fa-regular fa-clock"></i><span>Other</span></span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class=question-block>
                                    <h4 class=question-title><span class=q-num>4.</span> Tell us about your book</h4>
                                    <div class=form-group><textarea name=message
                                            placeholder="A short description of your project, genre, target audience..."
                                            required class="field-input form-control" data-required=true
                                            rows=4></textarea></div>
                                </div>
                            </div>
                            <div class=form-step data-step=2 hidden>
                                <h4 class=step-heading>Almost there — tell us about you</h4>
                                <div class="row g-3">
                                    <div class="col-12 col-md-6">
                                        <div class=form-group><label class=field-label>Full Name</label> <input
                                                name=name class="field-input form-control" required data-required=true
                                                placeholder="Your name"></div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class=form-group><label class=field-label>Phone</label> <input name=phone
                                                type=tel class="field-input form-control countryCode" required
                                                data-required=true placeholder="Phone number"> <input
                                                name=fullPhoneNumber type=hidden class=fullPhoneNumber></div>
                                    </div>
                                    <div class=col-12>
                                        <div class=form-group><label class=field-label>Email</label> <input name=email
                                                type=email class="field-input form-control" required data-required=true
                                                placeholder=you@example.com></div>
                                    </div>
                                </div>
                            </div>
                            <div class=form-nav><button class="btn-nav btn-prev" type=button id=btnPrev hidden><i
                                        class="fa-solid fa-arrow-left"></i> Previous</button> <button
                                    class="btn-nav btn-next" type=button id=btnNext>Next Step <i
                                        class="fa-solid fa-arrow-right"></i></button> <button
                                    class="btn-nav btn-submit submit-btn" type=submit id=btnSubmit hidden>Claim Your 35%
                                    Discount</button></div>
                            <p class=trust-note>Join 1,000+ authors who started here. No credit card required.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=sec-brands>
        <div class=container>
            <div class="cm-cont lazy logo-slider">
                <div class=item><img class="img-fluid thumb" class=img-fluid alt=brand-1 height=50 width=195
                        data-lazy=assets/images/brands/brand-1.webp></div>
                <div class=item><img class="img-fluid thumb" class=img-fluid alt=brand-2 height=50 width=195
                        data-lazy=assets/images/brands/brand-2.webp></div>
                <div class=item><img class="img-fluid thumb" class=img-fluid alt=brand-3 height=50 width=195
                        data-lazy=assets/images/brands/brand-3.webp></div>
                <div class=item><img class="img-fluid thumb" class=img-fluid alt=brand-4 height=50 width=195
                        data-lazy=assets/images/brands/brand-4.webp></div>
                <div class=item><img class="img-fluid thumb" class=img-fluid alt=brand-1 height=50 width=195
                        data-lazy=assets/images/brands/brand-1.webp></div>
                <div class=item><img class="img-fluid thumb" class=img-fluid alt=brand-2 height=50 width=195
                        data-lazy=assets/images/brands/brand-2.webp></div>
                <div class=item><img class="img-fluid thumb" class=img-fluid alt=brand-3 height=50 width=195
                        data-lazy=assets/images/brands/brand-3.webp></div>
                <div class=item><img class="img-fluid thumb" class=img-fluid alt=brand-4 height=50 width=195
                        data-lazy=assets/images/brands/brand-4.webp></div>
            </div>
        </div>
    </section>
    <section class=portfolio-formating-cover-illustration>
        <div class=container>
            <div class=book-formating>
                <h2>Perfect Your Story with Our Expert Book Editing, Formatting & Proofreading Services</h2>
                <div class="cm-cont lazy formating-sliders">
                    <div class=formating-img-title><img class=img-fluid alt=slider-img-2-before height=415 width=645
                            data-lazy=assets/images/portfolio-sliders/2-before.webp>
                        <h3>Before</h3>
                    </div>
                    <div class=formating-img-title><img class=img-fluid alt=slider-img-2-before height=415 width=645
                            data-lazy=assets/images/portfolio-sliders/2-after.webp>
                        <h3>After</h3>
                    </div>
                    <div class=formating-img-title><img class=img-fluid alt=slider-img-3-before height=415 width=645
                            data-lazy=assets/images/portfolio-sliders/3-before.webp>
                        <h3>Before</h3>
                    </div>
                    <div class=formating-img-title><img class=img-fluid alt=slider-img-3-after height=415 width=645
                            data-lazy=assets/images/portfolio-sliders/3-after.webp>
                        <h3>After</h3>
                    </div>
                    <div class=formating-img-title><img class=img-fluid alt=slider-img-4-before height=415 width=645
                            data-lazy=assets/images/portfolio-sliders/4-before.webp>
                        <h3>Before</h3>
                    </div>
                    <div class=formating-img-title><img class=img-fluid alt=slider-img-4-after height=415 width=645
                            data-lazy=assets/images/portfolio-sliders/4-after.webp>
                        <h3>After</h3>
                    </div>
                </div>
            </div>
            <div class=book-cover>
                <h2>Entice Readers' Minds with Stunning Book Covers</h2>
                <div class="cm-cont lazy book-cover-sliders">
                    <div class=item><img class=img-fluid alt=BookCover1 height=307 width=420
                            data-lazy=assets/images/book-cover-slider/book-cover-1.webp></div>
                    <div class=item><img class=img-fluid alt=BookCover2 height=307 width=420
                            data-lazy=assets/images/book-cover-slider/book-cover-2.webp></div>
                    <div class=item><img class=img-fluid alt=BookCover3 height=307 width=420
                            data-lazy=assets/images/book-cover-slider/book-cover-3.webp></div>
                    <div class=item><img class=img-fluid alt=BookCover4 height=307 width=420
                            data-lazy=assets/images/book-cover-slider/book-cover-4.webp></div>
                    <div class=item><img class=img-fluid alt=BookCover5 height=307 width=420
                            data-lazy=assets/images/book-cover-slider/book-cover-5.webp></div>
                    <div class=item><img class=img-fluid alt=BookCover6 height=307 width=420
                            data-lazy=assets/images/book-cover-slider/book-cover-6.webp></div>
                </div>
            </div>
            <div class=illustrations>
                <h2>Our Custom Illustrations That Captivate Readers</h2>
                <div class="cm-cont lazy illustrations-sliders">
                    <div class=item><img class=img-fluid alt=Illustration1 height=307 width=422
                            data-lazy=assets/images/illustrations-slider/illustrations-1.webp></div>
                    <div class=item><img class=img-fluid alt=Illustration2 height=307 width=422
                            data-lazy=assets/images/illustrations-slider/illustrations-2.webp></div>
                    <div class=item><img class=img-fluid alt=Illustration3 height=307 width=422
                            data-lazy=assets/images/illustrations-slider/illustrations-3.webp></div>
                    <div class=item><img class=img-fluid alt=Illustration4 height=295 width=422
                            data-lazy=assets/images/illustrations-slider/illustrations-4.webp></div>
                    <div class=item><img class=img-fluid alt=Illustration5 height=295 width=422
                            data-lazy=assets/images/illustrations-slider/illustrations-5.webp></div>
                    <div class=item><img class=img-fluid alt=Illustration6 height=295 width=422
                            data-lazy=assets/images/illustrations-slider/illustrations-6.webp></div>
                    <div class=item><img class=img-fluid alt=Illustration7 height=295 width=422
                            data-lazy=assets/images/illustrations-slider/illustrations-7.webp></div>
                    <div class=item><img class=img-fluid alt=Illustration8 height=295 width=422
                            data-lazy=assets/images/illustrations-slider/illustrations-8.webp></div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-banner-publishing cta-banner-wrap">
        <div class=container>
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                    <div class=cta-banner-content>
                        <h3 class=heading-three>Our Book Publishing Team Is Here To Help You Reach The Finish Line</h3>
                        <p>Not here to make the noise – only here to make it count. From helping it resonate with your
                            readers to making sure it is launched in the market the right way, we do it all!
                        <div class=website-main-buttons><a class=popup-btn href=#calendary-sec>Book A Discovery
                                Calll</a> <button class=chat-btn onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                OFF</button></div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                    <div class=cta-banner-img><img class="img-fluid box2" alt="CTA Banner Publishing Image" height=397
                            width=509 src=assets/images/book-publishing/ipad.webp loading=lazy></div>
                </div>
            </div>
        </div>
    </section>
    <section class=portfolio-publish-wrap>
        <div class=container>
            <div class=portfolio-publish-head>
                <h3 class=heading-two>Range Of Genres We Cater</h3>
            </div>
        </div>
        <div class=portfolio-publish-inner>
            <div class=container>
                <div class=row>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class=portfolio-publish-buttons>
                            <ul class="nav nav-pills" id=pills-tab role=tablist>
                                <li class=nav-item role=presentation><button class="nav-link active" type=button
                                        aria-controls=pills-portfolio1 data-bs-target=#pills-portfolio1
                                        data-bs-toggle=pill aria-selected=true id=pills-portfolio1-tab
                                        role=tab>Action</button>
                                <li class=nav-item role=presentation><button class=nav-link type=button
                                        aria-controls=pills-portfolio2 data-bs-target=#pills-portfolio2
                                        data-bs-toggle=pill aria-selected=false id=pills-portfolio2-tab
                                        role=tab>Comics</button>
                                <li class=nav-item role=presentation><button class=nav-link type=button
                                        aria-controls=pills-portfolio3 data-bs-target=#pills-portfolio3
                                        data-bs-toggle=pill aria-selected=false id=pills-portfolio3-tab
                                        role=tab>Fiction</button>
                                <li class=nav-item role=presentation><button class=nav-link type=button
                                        aria-controls=pills-portfolio4 data-bs-target=#pills-portfolio4
                                        data-bs-toggle=pill aria-selected=false id=pills-portfolio4-tab
                                        role=tab>Children's</button>
                                <li class=nav-item role=presentation><button class=nav-link type=button
                                        aria-controls=pills-portfolio5 data-bs-target=#pills-portfolio5
                                        data-bs-toggle=pill aria-selected=false id=pills-portfolio5-tab
                                        role=tab>Romance</button>
                                <li class=nav-item role=presentation><button class=nav-link type=button
                                        aria-controls=pills-portfolio6 data-bs-target=#pills-portfolio6
                                        data-bs-toggle=pill aria-selected=false id=pills-portfolio6-tab
                                        role=tab>Sci-Fi</button>
                                <li class=nav-item role=presentation><button class=nav-link type=button
                                        aria-controls=pills-portfolio7 data-bs-target=#pills-portfolio7
                                        data-bs-toggle=pill aria-selected=false id=pills-portfolio7-tab
                                        role=tab>Mystery</button>
                                <li class=nav-item role=presentation><button class=nav-link type=button
                                        aria-controls=pills-portfolio8 data-bs-target=#pills-portfolio8
                                        data-bs-toggle=pill aria-selected=false id=pills-portfolio8-tab
                                        role=tab>Thriller</button>
                                <li class=nav-item role=presentation><button class=nav-link type=button
                                        aria-controls=pills-portfolio9 data-bs-target=#pills-portfolio9
                                        data-bs-toggle=pill aria-selected=false id=pills-portfolio9-tab
                                        role=tab>Non-Fiction</button>
                                <li class=nav-item role=presentation><button class=nav-link type=button
                                        aria-controls=pills-portfolio10 data-bs-target=#pills-portfolio10
                                        data-bs-toggle=pill aria-selected=false id=pills-portfolio10-tab
                                        role=tab>Horror</button>
                                <li class=nav-item role=presentation><button class=nav-link type=button
                                        aria-controls=pills-portfolio11 data-bs-target=#pills-portfolio11
                                        data-bs-toggle=pill aria-selected=false id=pills-portfolio11-tab role=tab>Adult
                                        Books</button>
                                <li class=nav-item role=presentation><button class=nav-link type=button
                                        aria-controls=pills-portfolio12 data-bs-target=#pills-portfolio12
                                        data-bs-toggle=pill aria-selected=false id=pills-portfolio12-tab
                                        role=tab>Christian Books</button>
                                <li class=nav-item role=presentation><button class=nav-link type=button
                                        aria-controls=pills-portfolio13 data-bs-target=#pills-portfolio13
                                        data-bs-toggle=pill aria-selected=false id=pills-portfolio13-tab
                                        role=tab>Business Books</button>
                            </ul>
                        </div>
                        <div class=portfolio-publish-tabitem>
                            <div class=tab-content id=pills-tabContent>
                                <div class="fade tab-pane active show" id=pills-portfolio1
                                    aria-labelledby=pills-portfolio1-tab tabindex=0 role=tabpanel>
                                    <div class=portfolio-tabitem-inner>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-content>
                                                    <h4 class=heading-three>Action</h4>
                                                    <p>If your story involves high-speed chases, narrow escapes, and
                                                        things blowing up in the background (while the hero doesn't look
                                                        back, obviously), we’re your crew. We help you pack every page
                                                        with enough adrenaline to make readers forget to breathe. Safety
                                                        goggles are not required, but highly recommended.
                                                    <div class=website-main-buttons><a class=popup-btn
                                                            data-bs-target=#staticBackdrop data-bs-toggle=modal>Book
                                                            Free Consultation</a> <button class=chat-btn type=button
                                                            onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                                            OFF</button></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-img><img class="img-fluid box2"
                                                        alt="Action Book Image" height=351 width=546
                                                        src=assets/images/categories/action.webp></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=pills-portfolio2 aria-labelledby=pills-portfolio2-tab
                                    tabindex=0 role=tabpanel>
                                    <div class=portfolio-tabitem-inner>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-content>
                                                    <h4 class=heading-three>Comics</h4>
                                                    <p>They say a picture is worth a thousand words, but we think the
                                                        right "POW!" or "ZAP!" is priceless. Whether you’re building a
                                                        superhero universe or a quirky indie memoir, we help you marry
                                                        bold art with sharp dialogue. Let’s make some panels that
                                                        actually pop off the page.
                                                    <div class=website-main-buttons><a class=popup-btn
                                                            data-bs-target=#staticBackdrop data-bs-toggle=modal>Book
                                                            Free Consultation</a> <button class=chat-btn
                                                            onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                                            OFF</button></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-img><img class="img-fluid box2"
                                                        alt="Comics Book Image" height=351 width=546
                                                        src=assets/images/categories/comics.webp></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=pills-portfolio3 aria-labelledby=pills-portfolio3-tab
                                    tabindex=0 role=tabpanel>
                                    <div class=portfolio-tabitem-inner>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-content>
                                                    <h4 class=heading-three>Fiction</h4>
                                                    <p>Real life is fine, but made-up worlds are much better. If you’re
                                                        building a sprawling empire or just a messy neighborhood drama,
                                                        we’re here to help you lie professionally. We’ll take your "what
                                                        if" and turn it into a "must-read" that keeps people up way past
                                                        their bedtime.
                                                    <div class=website-main-buttons><a class=popup-btn
                                                            data-bs-target=#staticBackdrop data-bs-toggle=modal>Book
                                                            Free Consultation</a> <button class=chat-btn
                                                            onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                                            OFF</button></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-img><img class="img-fluid box2"
                                                        alt="Fiction Book Image" height=395 width=600
                                                        src=assets/images/categories/fiction.webp></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=pills-portfolio4 aria-labelledby=pills-portfolio4-tab
                                    tabindex=0 role=tabpanel>
                                    <div class=portfolio-tabitem-inner>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-content>
                                                    <h4 class=heading-three>Children's</h4>
                                                    <p>Writing for kids is serious business mostly because they are the
                                                        toughest critics on the planet. Be it bedtime stories or
                                                        middle-grade adventures, we help you create characters that kids
                                                        love and parents don’t mind reading for the millionth time.
                                                        Let’s make some magic.
                                                    <div class=website-main-buttons><a class=popup-btn
                                                            data-bs-target=#staticBackdrop data-bs-toggle=modal>Book
                                                            Free Consultation</a> <button class=chat-btn
                                                            onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                                            OFF</button></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-img><img class="img-fluid box2"
                                                        alt="Childrens Book Image" height=351 width=546
                                                        src=assets/images/categories/children.webp></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=pills-portfolio5 aria-labelledby=pills-portfolio5-tab
                                    tabindex=0 role=tabpanel>
                                    <div class=portfolio-tabitem-inner>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-content>
                                                    <h4 class=heading-three>Romance</h4>
                                                    <p>We’re suckers for a good "enemies-to-lovers" trope. We help you
                                                        capture that butterflies-in-the-stomach feeling. Your readers
                                                        are looking for a happily-ever-after, and we’re here to make
                                                        sure the sparks fly on every single page. Tissue boxes sold
                                                        separately.
                                                    <div class=website-main-buttons><a class=popup-btn
                                                            data-bs-target=#staticBackdrop data-bs-toggle=modal>Book
                                                            Free Consultation</a> <button class=chat-btn
                                                            onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                                            OFF</button></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-img><img class="img-fluid box2"
                                                        alt="Romance Book Image" height=351 width=546
                                                        src=assets/images/categories/romance.webp></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=pills-portfolio6 aria-labelledby=pills-portfolio6-tab
                                    tabindex=0 role=tabpanel>
                                    <div class=portfolio-tabitem-inner>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-content>
                                                    <h4 class=heading-three>Science Fiction</h4>
                                                    <p>Lasers, portals, and existential dread about AI? Count us in. We
                                                        help you build worlds that feel grounded even if they’re
                                                        lightyears away. Let’s take your "science" and add just enough
                                                        "fiction" to make it legendary.
                                                    <div class=website-main-buttons><a class=popup-btn
                                                            data-bs-target=#staticBackdrop data-bs-toggle=modal>Book
                                                            Free Consultation</a> <button class=chat-btn
                                                            onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                                            OFF</button></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-img><img class="img-fluid box2"
                                                        alt="Science Fiction Image" height=351 width=546
                                                        src=assets/images/categories/sci-fi.webp></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=pills-portfolio7 aria-labelledby=pills-portfolio7-tab
                                    tabindex=0 role=tabpanel>
                                    <div class=portfolio-tabitem-inner>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-content>
                                                    <h4 class=heading-three>Mystery</h4>
                                                    <p>We love a good puzzle as much as you do. We’ll help you scatter
                                                        the breadcrumbs, plant the red herrings, and hide the truth in
                                                        plain sight until that big, shocking reveal.
                                                    <div class=website-main-buttons><a class=popup-btn
                                                            data-bs-target=#staticBackdrop data-bs-toggle=modal>Book
                                                            Free Consultation</a> <button class=chat-btn
                                                            onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                                            OFF</button></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-img><img class="img-fluid box2"
                                                        alt="Mystery Book Image" height=351 width=546
                                                        src=assets/images/categories/mystery.webp></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=pills-portfolio8 aria-labelledby=pills-portfolio8-tab
                                    tabindex=0 role=tabpanel>
                                    <div class=portfolio-tabitem-inner>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-content>
                                                    <h4 class=heading-three>Thriller</h4>
                                                    <p>If your manuscript is the literary equivalent of a heart attack,
                                                        you’re in the right place. We specialize in those "just one more
                                                        chapter" vibes that lead to sunrise.
                                                    <div class=website-main-buttons><a class=popup-btn
                                                            data-bs-target=#staticBackdrop data-bs-toggle=modal>Book
                                                            Free Consultation</a> <button class=chat-btn
                                                            onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                                            OFF</button></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-img><img class="img-fluid box2"
                                                        alt="Thriller Book Image" height=351 width=546
                                                        src=assets/images/categories/thriller.webp></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=pills-portfolio9 aria-labelledby=pills-portfolio9-tab
                                    tabindex=0 role=tabpanel>
                                    <div class=portfolio-tabitem-inner>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-content>
                                                    <h4 class=heading-three>Non-Fiction</h4>
                                                    <p>Real life is weirder than fiction, and we’re here to help you
                                                        prove it. We organize your expertise into a narrative that’s
                                                        actually engaging. Let’s make "learning stuff" feel like a total
                                                        blast.
                                                    <div class=website-main-buttons><a class=popup-btn
                                                            data-bs-target=#staticBackdrop data-bs-toggle=modal>Book
                                                            Free Consultation</a> <button class=chat-btn
                                                            onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                                            OFF</button></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-img><img class="img-fluid box2"
                                                        alt="Non-Fiction Book Image" height=358 width=546
                                                        src=assets/images/categories/non-fiction.webp></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=pills-portfolio10 aria-labelledby=pills-portfolio10-tab
                                    tabindex=0 role=tabpanel>
                                    <div class=portfolio-tabitem-inner>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-content>
                                                    <h4 class=heading-three>Horror</h4>
                                                    <p>We want to help you give people nightmares. Seriously. If your
                                                        story features creepy basements, psychological twists, or things
                                                        that go bump in the night, we’re ready to get weird with you.
                                                    <div class=website-main-buttons><a class=popup-btn
                                                            data-bs-target=#staticBackdrop data-bs-toggle=modal>Book
                                                            Free Consultation</a> <button class=chat-btn
                                                            onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                                            OFF</button></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-img><img class="img-fluid box2"
                                                        alt="Horror Book Image" height=358 width=546
                                                        src=assets/images/categories/horror.webp></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=pills-portfolio11 aria-labelledby=pills-portfolio11-tab
                                    tabindex=0 role=tabpanel>
                                    <div class=portfolio-tabitem-inner>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-content>
                                                    <h4 class=heading-three>Adult Books</h4>
                                                    <p>For stories that are a little more "after dark," we provide a
                                                        professional, judgment-free space to polish your steamier side.
                                                        We help you balance the heat with a great plot, ensuring your
                                                        spicy scenes are high-quality, tasteful, and exactly what your
                                                        audience is craving. No blushing here, we promise.
                                                    <div class=website-main-buttons><a class=popup-btn
                                                            data-bs-target=#staticBackdrop data-bs-toggle=modal>Book
                                                            Free Consultation</a> <button class=chat-btn
                                                            onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                                            OFF</button></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-img><img class="img-fluid box2"
                                                        alt="Adult Book Image" height=369 width=546
                                                        src=assets/images/categories/adult.webp></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=pills-portfolio12 aria-labelledby=pills-portfolio12-tab
                                    tabindex=0 role=tabpanel>
                                    <div class=portfolio-tabitem-inner>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-content>
                                                    <h4 class=heading-three>Christian Books</h4>
                                                    <p>For stories that nourish the soul and uplift the spirit, we
                                                        provide a grace-filled, intentional space to refine your faith
                                                        based message. From quiet moments of reflection to epic journeys
                                                        of faith, we are here to help your light shine through every
                                                        page. We help you balance powerful testimony with compelling
                                                        storytelling, ensuring your message is impactful, biblically
                                                        sound, and resonates deeply with your readers.
                                                    <div class=website-main-buttons><a class=popup-btn
                                                            data-bs-target=#staticBackdrop data-bs-toggle=modal>Book
                                                            Free Consultation</a> <button class=chat-btn
                                                            onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                                            OFF</button></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-img><img class="img-fluid box2"
                                                        alt="Horror Book Image" height=391 width=546
                                                        src=assets/images/categories/christian-books.webp></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=pills-portfolio13 aria-labelledby=pills-portfolio13-tab
                                    tabindex=0 role=tabpanel>
                                    <div class=portfolio-tabitem-inner>
                                        <div class="row align-items-center">
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-content>
                                                    <h4 class=heading-three>Business Books</h4>
                                                    <p>For insights that drive results and lead industries, we provide a
                                                        strategic, data-backed space to sharpen your professional
                                                        authority. We help you balance actionable expertise with a
                                                        narrative that commands attention, ensuring your strategies are
                                                        clear, authoritative, and exactly what the modern marketplace is
                                                        looking for. From disruptive startup guides to seasoned
                                                        leadership blueprints, we help you turn your expertise into a
                                                        benchmark for success.
                                                    <div class=website-main-buttons><a class=popup-btn
                                                            data-bs-target=#staticBackdrop data-bs-toggle=modal>Book
                                                            Free Consultation</a> <button class=chat-btn
                                                            onclick="<?php echo $locChatClick; ?>">Chat for 35%
                                                            OFF</button></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                                                <div class=portfolio-tabitem-img><img class="img-fluid box2"
                                                        alt="Business Book Image" height=351 width=546
                                                        src=assets/images/categories/business-books.webp></div>
                                            </div>
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
    <section class=counter-satisfy-wrap>
        <div class=container>
            <div class=counter-satisfy-inner>
                <div class=counter-satisfy-box>
                    <div class=counter-box-head>
                        <h4 class=heading-two><span id=number1>19</span></h4>
                    </div>
                    <p>#1 New York<br>Times Bestsellers
                </div>
                <div class=counter-satisfy-box>
                    <div class=counter-box-head>
                        <h4 class=heading-two><span id=number2>310</span>+</h4>
                    </div>
                    <p>National<br>Bestsellers
                </div>
                <div class=counter-satisfy-box>
                    <div class=counter-box-head>
                        <h4 class=heading-two><span id=number3>1373</span>+</h4>
                    </div>
                    <p>Published Books
                </div>
                <div class=counter-satisfy-box>
                    <div class=counter-box-head>
                        <h4 class=heading-two><span id=number4>100</span>M+</h4>
                    </div>
                    <p>Books Sold
                </div>
            </div>
        </div>
    </section>
    <section class="unlock-story-marketing unlock-story-publishing unlock-story-wrap">
        <div class=container>
            <div class=unlock-story-inner>
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-12">
                        <div class=unlock-story-content>
                            <h2 class=heading-three>We’ve Been Around the Block (So You Don’t Have To)</h2>
                            <p>Publishing a book can feel like trying to find your way through a maze in the dark, but
                                hey, hey, we’re here to turn the lights on. Our team lives and breathes books, and we’re
                                obsessed with making sure yours doesn't just sit on a shelf, but actually gets read. Get
                                your Book Published with a team which is:
                            <ul>
                                <li>Fast but Focused
                                <li>A Home for Every Story
                                <li>Digital-Ready
                                <li>Global Reach
                            </ul>
                            <div class=website-main-buttons><a class=popup-btn data-bs-target=#staticBackdrop
                                    data-bs-toggle=modal>Book Free Consultation</a> <a class=call-btn
                                    href="tel:<?php echo $locNumber; ?>" style=border-color:#fff;color:#fff>Call Now <i
                                        class="fa-solid fa-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-12">
                        <div class=unlock-story-img><img class="img-fluid box2" alt="Unlock Story Publishing" height=560
                                width=500 src=assets/images/book-publishing/publishing-world.webp loading=lazy></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=service-offer-wrap>
        <div class=container>
            <div class=service-offer-head>
                <h2 class=heading-two>Reasons To Choose Us</h2>
                <p>We work with you, not just for you. Here’s every reason why you should choose us.
            </div>
            <div class=service-offer-inner>
                <div class=service-offer-slider>
                    <div class=service-offer-box>
                        <h3 class=heading-five>We Speak Every Story</h3>
                        <div class=offer-box-img><img class=img-fluid alt="Line Editing"
                                src=assets/images/icons-imgs/line-editing-white.webp loading=lazy></div>
                        <p>Your project might be a sprawling space odyssey or a secret family recipe book, either way,
                            our team has the range to handle it. No matter the genre, we know exactly how to bring your
                            specific idea to life.
                        <div class=website-main-buttons><a class=read-more-btn href=void:;>Learn More!</a></div>
                    </div>
                    <div class=service-offer-box>
                        <h3 class=heading-five>Your Voice, Only Better</h3>
                        <div class=offer-box-img><img class=img-fluid alt="Text Icon"
                                src=assets/images/icons-imgs/text.webp loading=lazy></div>
                        <p>We aren't here to change your story; we’re here to help you tell it. We match your personal
                            style so that when people read your book, it sounds 100% like you, just polished to
                            perfection.
                        <div class=website-main-buttons><a class=read-more-btn href=void:;>Learn More!</a></div>
                    </div>
                    <div class=service-offer-box>
                        <h3 class=heading-five>Zero Stress, All Progress</h3>
                        <div class=offer-box-img><img class=img-fluid alt="Structural Editing"
                                src=assets/images/icons-imgs/structural-editing-white.webp loading=lazy></div>
                        <p>We handle the confusing technical stuff and keep you in the loop every step of the way,
                            making the journey from "rough draft" to "finished book" actually fun.
                        <div class=website-main-buttons><a class=read-more-btn href=void:;>Learn More!</a></div>
                    </div>
                    <div class=service-offer-box>
                        <h3 class=heading-five>Covers You’ll Want to Brag About</h3>
                        <div class=offer-box-img><img class=img-fluid alt="Copy Editing"
                                src=assets/images/icons-imgs/copy-editing-white.webp loading=lazy></div>
                        <p>People do judge books by their covers, so we make sure yours is a showstopper. Our designs
                            tell your story’s vibe at a single glance.
                        <div class=website-main-buttons><a class=read-more-btn href=void:;>Learn More!</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-main-publishing cta-main-wrap">
        <div class=container>
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 col-xxl-10">
                    <div class=cta-main-content>
                        <h3 class=heading-three>Real Experts, Real Results</h3>
                        <p>At Godspeed Publishing, we know your book is one-of-a-kind. Our mission is to make sure the
                            final product reflects your exact vision while meeting the highest professional standards.
                            Contact us now!
                        <div class=website-main-buttons><button class=chat-btn
                                onclick="<?php echo $locChatClick; ?>">Chat for 35% OFF</button> <a class=call-btn
                                href="tel:<?php echo $locNumber; ?>">+1(646)-389-2410</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=calendly_Intergrate id=calendary-sec>
        <div class=container>
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                    <div class=content><img src=assets/images/logo.webp alt=logo height=43 width=250>
                        <h3>Let’s Chat About Your Book</h3>
                        <p>Godspeed Publishing is your partner from the first page to the final sale. Once you team up
                            with us, you can breathe easy because we handle the heavy lifting while you keep the
                            creative spark alive.</p><span>What to expect?</span>
                        <ul>
                            <li><strong>A 30-Minute Brainstorm:</strong> We’ll sit down one-on-one to validate your idea
                                and answer every "what if" on your mind.
                            <li><strong>Your Personal Roadmap:</strong> You’ll walk away with a clear, step-by-step plan
                                to take your project from a brief to a finished book.
                            <li><strong>A Custom Game Plan:</strong>We’ll provide a personalized solution and a
                                transparent quote tailored specifically to your story’s needs.
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                    <div class=calendly-inline-widget
                        data-url=https://calendly.com/goodspeedpublishing-info/goodspeed-publishing></div>
                </div>
            </div>
        </div>
    </section>
    <section class="customer-feedback-wrap new_test_bg">
        <div class=container>
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-12">
                    <div class=customer-feedback-content>
                        <div class=feedback-content-head>
                            <h3 class=heading-two>Happy Words from Our Clients</h3>
                        </div>
                        <div class=customer-feedback-slider>
                            <div class=feedback-slider-box>
                                <div class=feedback-box-head>
                                    <div class=feedback-slider-thumb><img class=img-fluid alt="Thumb Girl"
                                            src=assets/images/testimonials/tt1.webp loading=lazy></div>
                                    <div class=feedback-slider-text>
                                        <h4 class=heading-five>Marko Kloos</h4>
                                        <p>Echoes of Silence
                                        <div class=feedback-slider-ratings>
                                            <div class=ratings-stars-img><i class="fa-solid fa-star"></i> <i
                                                    class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                                    class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=feedback-slider-para>
                                    <p>"Experience was great. Nikki, my Project Manager, was very professional. I look
                                        forward to working with Goodspeed Publishing again."
                                </div>
                            </div>
                            <div class=feedback-slider-box>
                                <div class=feedback-box-head>
                                    <div class=feedback-slider-thumb><img class=img-fluid alt="Thumb Boy"
                                            src=assets/images/testimonials/tt2.webp loading=lazy></div>
                                    <div class=feedback-slider-text>
                                        <h4 class=heading-five>Sylvia Melena</h4>
                                        <p>Lead Magnet Formula
                                        <div class=feedback-slider-ratings>
                                            <div class=ratings-stars-img><i class="fa-solid fa-star"></i> <i
                                                    class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                                    class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=feedback-slider-para>
                                    <p>"Goodspeed Publishing boosted Lead Magnet Formula with expert marketing, social
                                        media ads, and promotions. Their strategy turned my book into an Amazon
                                        bestseller. I highly recommend them to all authors!"
                                </div>
                            </div>
                            <div class=feedback-slider-box>
                                <div class=feedback-box-head>
                                    <div class=feedback-slider-thumb><img class=img-fluid alt="Thumb Boy"
                                            src=assets/images/testimonials/tt3.webp loading=lazy></div>
                                    <div class=feedback-slider-text>
                                        <h4 class=heading-five>Aleina Mackey</h4>
                                        <p>Child 9: A Memoir of Breaking Free
                                        <div class=feedback-slider-ratings>
                                            <div class=ratings-stars-img><i class="fa-solid fa-star"></i> <i
                                                    class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                                    class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=feedback-slider-para>
                                    <p>"The majority of my experience working with Goodspeed Publishing to publish my
                                        book was good. The entire team was helpful and effective, although I thought the
                                        timeframe should have been communicated more clearly. Ultimately, the book was
                                        published to an excellent standard, and I was grateful for their input."
                                </div>
                            </div>
                            <div class=feedback-slider-box>
                                <div class=feedback-box-head>
                                    <div class=feedback-slider-thumb><img class=img-fluid alt="Thumb Boy"
                                            src=assets/images/testimonials/tt4.webp loading=lazy></div>
                                    <div class=feedback-slider-text>
                                        <h4 class=heading-five>Nikolas Pleiadi</h4>
                                        <p>In Powder Blue
                                        <div class=feedback-slider-ratings>
                                            <div class=ratings-stars-img><i class="fa-solid fa-star"></i> <i
                                                    class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                                    class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=feedback-slider-para>
                                    <p>"Goodspeed Publishing has been great to work with! Great communication,
                                        high-quality product, and great packing of the finished product!"
                                </div>
                            </div>
                            <div class=feedback-slider-box>
                                <div class=feedback-box-head>
                                    <div class=feedback-slider-thumb><img class=img-fluid alt="Thumb Boy"
                                            src=assets/images/testimonials/tt5.webp loading=lazy></div>
                                    <div class=feedback-slider-text>
                                        <h4 class=heading-five>Astrid Vail</h4>
                                        <p>Claiming Jafar: Fairytales After Dark
                                        <div class=feedback-slider-ratings>
                                            <div class=ratings-stars-img><i class="fa-solid fa-star"></i> <i
                                                    class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                                    class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=feedback-slider-para>
                                    <p>"The entire experience was wonderful! My communications with Tammie were great
                                        and very helpful. A few years back, my wife published a book with Goodspeed
                                        Publishing. That was also a wonderful experience. Morris Publishing is highly
                                        recommended!"
                                </div>
                            </div>
                            <div class=feedback-slider-box>
                                <div class=feedback-box-head>
                                    <div class=feedback-slider-thumb><img class=img-fluid alt="Thumb Boy"
                                            src=assets/images/testimonials/tt6.webp loading=lazy></div>
                                    <div class=feedback-slider-text>
                                        <h4 class=heading-five>Jack Dane</h4>
                                        <p>The Other Couple: A Psychological Thriller
                                        <div class=feedback-slider-ratings>
                                            <div class=ratings-stars-img><i class="fa-solid fa-star"></i> <i
                                                    class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i
                                                    class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
                                            <span>4.6/5.0</span>
                                        </div>
                                    </div>
                                </div>
                                <div class=feedback-slider-para>
                                    <p>"Goodspeed Publishing made the entire publishing and printing process for our
                                        book a dream! It was seamless. The final product is not only great, but also the
                                        customer service, kindness, and attentiveness were second to none."
                                </div>
                            </div>
                        </div>
                        <div class=customer-feedback-reviews>
                            <ul class=feedback-reviews-img>
                                <li><img class=img-fluid alt="Thumb Boy Small"
                                        src=assets/images/reviews-thumb/thumb-boy-02.webp loading=lazy>
                                <li><img class=img-fluid alt="Thumb Boy Small"
                                        src=assets/images/reviews-thumb/thumb-boy-03.webp loading=lazy>
                                <li><img class=img-fluid alt="Thumb Girl Small"
                                        src=assets/images/reviews-thumb/thumb-girl-01.webp loading=lazy>
                                <li><img class=img-fluid alt="Thumb Girl Small"
                                        src=assets/images/reviews-thumb/thumb-girl-02.webp loading=lazy>
                                <li><img class=img-fluid alt="Thumb Girl Small"
                                        src=assets/images/reviews-thumb/thumb-girl-03.webp loading=lazy>
                                <li><img class=img-fluid alt="Thumb Boy Small"
                                        src=assets/images/reviews-thumb/thumb-boy-01.webp loading=lazy>
                            </ul><span>1373+ Books Published</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-12">
                    <div class=customer-feedback-images><img class="img-fluid box2" alt="Customer feedback Img"
                            height=113 width=100 src=assets/images/testimonials/t1.webp loading=lazy> <img
                            class="img-fluid box2" alt="Customer feedback Img" height=97 width=100
                            src=assets/images/testimonials/t2.webp loading=lazy> <img class="img-fluid box2"
                            alt="Customer feedback Img" height=119 width=100 src=assets/images/testimonials/t3.webp
                            loading=lazy> <img class="img-fluid box2" alt="Customer feedback Img" height=109 width=100
                            src=assets/images/testimonials/t4.webp loading=lazy> <img class="img-fluid box2"
                            alt="Customer feedback Img" height=100 width=100 src=assets/images/testimonials/t5.webp
                            loading=lazy> <img class="img-fluid box2" alt="Customer feedback Img" height=100 width=100
                            src=assets/images/testimonials/t6.webp loading=lazy></div>
                </div>
            </div>
        </div>
    </section>
    <section class=contact-main-wrap>
        <div class=container>
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                    <div class=contact-main-image><img class="img-fluid box2" alt="Contact Main Book" height=513
                            width=572 src=assets/images/book-publishing/talk-to-us.webp loading=lazy></div>
                </div>
                <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6">
                    <div class=contact-main-inner>
                        <div class=contact-inner-head>
                            <h4 class=heading-three>Talk To Us!</h4>
                            <p>Unlock the door to your book's success with our tailored publishing services.
                        </div>
                        <div class=contact-main-form>
                            <form action=https://leads.infinityprojectmanager.com/brand/goodspeedpublishing/lead
                                class=myForm><input name=city type=hidden class=city> <input name=country type=hidden
                                    class=country> <input name=ip type=hidden class=ip> <input name=zip_code type=hidden
                                    class=zip_code> <input name=brand_name type=hidden value=goodspeedpublishing.com>
                                <input name=lead_area type=hidden
                                    value=https://goodspeedpublishing.com/lp/book-publishing id=lead_area>
                                <div class=row>
                                    <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-12">
                                        <div class=form-group><input name=name required placeholder=Name></div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-12">
                                        <div class="form-group phne-inpt"><input name=phone type=phone class=countryCode
                                                required> <input name=fullPhoneNumber type=hidden class=fullPhoneNumber>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class=form-group><input name=email type=email required placeholder=Email>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class=form-group><textarea name=message placeholder=message></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                        <div class="form-group form-group-last"><button class=submit-btn
                                                type=submit-btn>Submit</button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=faqs-sec-wrap>
        <div class=container>
            <div class=faqs-sec-head>
                <h4 class=heading-two>Frequently Asked Questions</h4>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xx-12">
                    <div class=faqs-sec-item>
                        <div class=accordion id=accordionExample>
                            <div class=accordion-item>
                                <h5 class=accordion-header id=headingOne><button class=accordion-button type=button
                                        aria-controls=collapseOne data-bs-target=#collapseOne data-bs-toggle=collapse
                                        aria-expanded=true>How long does the publishing process take?</button></h5>
                                <div class="accordion-collapse collapse show" id=collapseOne aria-labelledby=headingOne
                                    data-bs-parent=#accordionExample>
                                    <div class=accordion-body>Most projects take between 4 to 8 weeks. Your own speed
                                        matters here, because fast feedback helps us publish sooner.</div>
                                </div>
                            </div>
                            <div class=accordion-item>
                                <h5 class=accordion-header id=headingTwo><button class="accordion-button collapsed"
                                        type=button aria-controls=collapseTwo data-bs-target=#collapseTwo
                                        data-bs-toggle=collapse aria-expanded=false>Will I get a printed copy to review
                                        before it goes live?</button></h5>
                                <div class="accordion-collapse collapse" id=collapseTwo aria-labelledby=headingTwo
                                    data-bs-parent=#accordionExample>
                                    <div class=accordion-body>We send a digital PDF proof for you to check. This method
                                        saves you time and keeps your costs down.</div>
                                </div>
                            </div>
                            <div class=accordion-item>
                                <h5 class=accordion-header id=headingThree><button class="accordion-button collapsed"
                                        type=button aria-controls=collapseThree data-bs-target=#collapseThree
                                        data-bs-toggle=collapse aria-expanded=false>Do I get any free copies of my book
                                        once it’s published?</button></h5>
                                <div class="accordion-collapse collapse" id=collapseThree aria-labelledby=headingThree
                                    data-bs-parent=#accordionExample>
                                    <div class=accordion-body>You can order unlimited copies at the basic printing and
                                        shipping price. We never charge you extra for your own books.</div>
                                </div>
                            </div>
                            <div class=accordion-item>
                                <h5 class=accordion-header id=headingFour><button class="accordion-button collapsed"
                                        type=button aria-controls=collapseFour data-bs-target=#collapseFour
                                        data-bs-toggle=collapse aria-expanded=false>Who handles the printing and
                                        shipping to readers?</button></h5>
                                <div class="accordion-collapse collapse" id=collapseFour aria-labelledby=headingFour
                                    data-bs-parent=#accordionExample>
                                    <div class=accordion-body>The stores where your book is sold handle everything.
                                        Amazon prints and ships each order while you collect the royalties.</div>
                                </div>
                            </div>
                            <div class=accordion-item>
                                <h5 class=accordion-header id=headingFive><button class="accordion-button collapsed"
                                        type=button aria-controls=collapseFive data-bs-target=#collapseFive
                                        data-bs-toggle=collapse aria-expanded=false>Do I keep the rights to my book? Who
                                        actually owns it?</button></h5>
                                <div class="accordion-collapse collapse" id=collapseFive aria-labelledby=headingFive
                                    data-bs-parent=#accordionExample>
                                    <div class=accordion-body>Yes, 100%! You fully own your book and all the rights.
                                        Your sales and distribution accounts are also set up in your name, not ours.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class=footer-bg>
    <div class="container py-5">
        <h4 class="main-heading mb-5">Let's Start Now!</h4>
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-5">
                <p class="text-white sub-text">Expertise meets passion—that’s the Goodspeed Publishing difference.</p><a
                    class="email-text my-4" href=tel:info@goodspeedpublishing.com>info@goodspeedpublishing.com</a>
                <div class=social-pills><a
                        href=https://www.instagram.com/goodspeedpublishing/><span>Instagram</span></a> <a
                        href=https://x.com/GoodspeedPub><span>X (Formerly Twitter)</span></a> <a
                        href=https://www.facebook.com/goodspeedpublishing/><span>Facebook</span></a> <a
                        href=https://www.linkedin.com/company/goodspeed-publishing><span>Linkedin</span></a></div>
            </div>
            <div class="col-md-6 border-start-gray col-lg-3 ps-lg-5">
                <h5 class=column-title>Useful Links</h5>
                <ul class=footer-links>
                    <li><a href=https://goodspeedpublishing.com/book-writing/>Book Writing</a>
                    <li><a href=https://goodspeedpublishing.com/book-editing/>Book Editing</a>
                    <li><a href=https://goodspeedpublishing.com/book-marketing/>Book Marketing</a>
                    <li><a href=https://goodspeedpublishing.com/book-publishing/>Book Publishing</a>
                    <li><a href=https://goodspeedpublishing.com/audio-books/>Audio Books</a>
                    <li><a href=https://goodspeedpublishing.com/about/>About</a>
                    <li><a href=https://goodspeedpublishing.com/schedule/>Schedule a Call</a>
                </ul>
            </div>
            <div class="col-md-12 col-lg-4">
                <h5 class=column-title>Subscribe</h5>
                <p class="text-white opacity-75 small-para">It's our deep industry knowledge and unwavering passion for
                    publishing that distinguishes us from the rest.
                <div class="mb-4 underline-white"></div>
                <ul class=footer-links>
                    <li><a href=https://goodspeedpublishing.com/terms-condition/>Terms & Condition</a>
                    <li><a href=https://goodspeedpublishing.com/privacy-policy/>Privacy Policy</a>
                </ul>
            </div>
        </div>
    </div>
    <div class=copyright-bar>
        <p class="copyright-text mt-4">© 2026 Goodspeed Publishing. All Rights Reserved
    </div>
    <div class=logo-wrapper>
        <div class=giant-curved-box>
            <div class="align-items-center d-flex"><img class=img-fluid alt=logo height=140 width=800
                    src=assets/images/logo.png></div>
        </div>
    </div>
</footer>
<a href="https://wa.me/14082225843?text=Hi%2C%20I%E2%80%99m%20interested%20in%20your%20self-publishing%20services.%20Please%20share%20details%20about%20packages%2C%20pricing%20%26%20next%20steps.%20Thanks!"
   class="whatsapp-float"
   target="_blank">
  <i class="fab fa-whatsapp"></i>
</a>
<div class="fade modal" id=staticBackdrop aria-labelledby=staticBackdropLabel tabindex=-1 aria-hidden=true>
    <div class=modal-dialog>
        <div class=modal-content>
            <div class=modal-header><button class=btn-close type=button aria-label=Close data-bs-dismiss=modal
                    fdprocessedid=0122n><i class="fa fa-times" aria-hidden=true></i></button></div>
            <div class=modal-body>
                <div class="row align-items-center">
                    <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6 p-0">
                        <div class=modal-body-img1><img class=img-fluid alt=img
                                src=assets/images/unlock-story-marketing.webp></div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6 col-md-6 p-0">
                        <div class=modal-body-form>
                            <h3>Save Upto 30% <span>Limited Time Offer</span></h3>
                            <form action=https://leads.infinityprojectmanager.com/brand/goodspeedpublishing/lead
                                class=myForm><input name=city type=hidden class=city> <input name=country type=hidden
                                    class=country> <input name=ip type=hidden class=ip> <input name=zip_code type=hidden
                                    class=zip_code> <input name=brand_name type=hidden value=goodspeedpublishing.com>
                                <input name=lead_area type=hidden value=https://goodspeedpublishing.com/ id=lead_area>
                                <div class=popup-form-list>
                                    <div class=form-group><input name=name required placeholder="Your Name"></div>
                                    <div class=form-group><input name=email type=email required
                                            placeholder="Your Email"></div>
                                    <div class="form-group mdl-phone-inp"><input name=phone type=phone class=countryCode
                                            required> <input name=fullPhoneNumber type=hidden class=fullPhoneNumber>
                                    </div>
                                    <div class=form-group><textarea name=message placeholder="Your Message" required
                                            id=message></textarea></div>
                                    <div class="form-group form-group-last"><button class=submit-btn
                                            type=submit>Submit</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" defer>
    </script>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        defer>
    </script> -->
        <script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"
        defer>
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer>
    </script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js" defer>
    </script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js" defer></script>
    <script type="text/javascript" src="assets/js/custom.min.js" defer></script>
</body>

</html>