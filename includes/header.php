<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="dns-prefetch" href="//cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon-icon.png">
    <?php  include 'includes/tags/tags.php';?>
    <?php  include 'includes/sections/variables-file.php';?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- banner preload -->
    <link rel="preload" as="image" href="assets/images/banner-publishing-bg.webp" fetchpriority="high">
    <style>
        body {
            font-family: Poppins, sans-serif;
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
    padding: 150px 0 50px;
    min-height: 100dvh;
    position: relative;
    z-index: 1;
    background: #000
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
    width: 100%;
}

.banner-main-content .heading-one {
    color: #fff;
    margin: 0 0 20px
}

.banner-main-content p {
    color: #fff;
    margin: 0 0 10px;
    text-align: center;
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
.banner-inner-published-form {
    background: #fff;
    width: 100%;
    border-radius: 0;
    box-shadow: 0 0 15px -5px #fff;
    padding: 20px;
    margin: 0 auto
}

.banner-inner-published-form .form-group {
    position: relative;
    padding: 0 0 20px
}

.banner-inner-published-form .form-group textarea {
    padding: 15px 10px 10px;
    width: 100%;
    background-color: #fbfbfb;
    outline: 0;
    box-shadow: none;
    color: #000;
    font-size: 16px;
    font-family: Poppins, sans-serif;
    border: 2px solid #e9e7e7;
    height: 100px;
    border-radius: 0;
    resize: none
}
.banner-inner-published-form .form-group button.submit-btn:hover {
    transform: scale(.9)
}
.banner-inner-published-form h4 {
    color: #000;
    font-size: 26px;
    line-height: 32px;
    margin: 0 0 10px;
        text-transform: capitalize;
    font-weight: 700;
    text-wrap-style: pretty;
}

.banner-inner-published-form p {
    font-size: 16px;
    font-weight: 500
}

.banner-inner-published-form p span {
    color: #00e533;
    font-weight: 700;
    font-size: 20px;
    text-decoration: underline
}
.banner-inner-published-form .form-group.form-group-last {
margin: 0
}
.banner-inner-published-form .form-group .form-select {
    font-family: Poppins, sans-serif;
    font-weight: 500;
    background-color: #fbfbfb;
    color: #000;
    font-size: 16px;
    width: 100%;
    border-radius: 0;
    border: 2px solid #e9e7e7;
    outline: 0;
    box-shadow: none;
    padding: 10px 30px 10px 10px;
    cursor: pointer
}
.banner-inner-published-form .form-group input {
    background: #fbfbfb;
    color: #000;
    font-size: 16px;
    width: 100%;
    height: 45px;
    border: 2px solid #e9e7e7;
    border-radius: 0;
    padding: 10px 8px
}

.banner-inner-published-form .form-group input::placeholder {
    color: #b2b2b2;
    font-size: 16px
}

.banner-inner-published-form .form-group button.submit-btn {
    background: var(--btn-gradient);
    color: #000;
    border: none;
    font-size: 18px;
    width: 175px;
    height: 45px;
    border-radius: 5px;
    padding: 8px 10px;
    margin: 10px 0 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .3s ease-in-out
}
    </style>
        <!-- GOOGLE FONTS DEFERRED CSS -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" onload="this.onload=null;this.rel='stylesheet'"/>
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"/>
    </noscript>
    <!-- BOOTSTRAP DEFERRED CSS -->
    <link rel="preload" href="assets/css/bootstrap.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"/>
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
        onload="this.onload=null;this.rel='stylesheet'"/>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css"
        as="style" onload="this.onload=null;this.rel='stylesheet'"/>
    <noscript>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css"/>
    </noscript>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K52MGDH2');
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11316340682">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-11316340682');
    </script>
    <script id="vtag-ai-js" async src="https://r2.leadsy.ai/tag.js" data-pid="3YGHIQ0iUzhQ3nlP" data-version="062024">
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K52MGDH2" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="main-header">
        <div class="container">
            <nav
                class="navbar navbar-expand-lg justify-content-center justify-content-sm-center justify-content-md-between justify-content-lg-between justify-content-xl-between justify-content-xxl-between">
                <a class="navbar-brand" href="void:;">
                    <img loading="lazy" src="assets/images/logo.webp" alt="logo" class="logo">
                </a>
                <div class="navbar-main-nav">
                    <div class="website-main-buttons">
                        <a class="popup-btn m-0" href="#calendary-sec">Let's Get Started</button>
                            <a href="tel:<?php echo $locNumber; ?>" class="call-btn">Call Now <i
                                    class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>