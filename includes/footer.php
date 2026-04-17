<footer class="footer-main-sec">
    <div class="footer-middle">
        <div class="container">
            <div class="footer-logo-area">
                <div class="footer-logo">
                    <img loading="lazy" src="assets/images/footer-logo.png" alt="Goodspeed Publishing Logo"
                        class="img-fluid">
                </div>
                <div class="footer-info">
                    <ul>
                        <li>
                            <a href="mailto:<?php echo $locEmail; ?>"><?php echo $locEmail; ?></a>
                        </li>
                        <li>
                            <a href="tel:<?php echo $locNumber; ?>">+1(646)-389-2410</a>
                        </li>
                    </ul>
                </div>
                <?php echo $socialLinks; ?>
            </div>
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="footer-disclaimer-area">
                    <p>
                        <b>Disclaimer:</b> Goodspeed Publishing is an independent entity and is not affiliated with,
                        sponsored by, or associated with any other company or brand with similar or identical names,
                        including but not limited to major publishing companies or corporations.
                        All content, services, and products offered through our website are solely provided by Goodspeed
                        Publishing and are not endorsed or approved by any other entities.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="footer-copyright">
                        <p>Copyright © <?php echo date("Y")?> Goodspeed Publishing All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- PopUp Modal Start Here -->
<?php include "modal/web-modal.php"?>
<!-- PopUp Modal End Here -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js" defer></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" defer></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js" defer></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js" defer></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js" defer></script>
<script type="text/javascript" src="assets/js/custom.min.js" defer></script>
</body>

</html>