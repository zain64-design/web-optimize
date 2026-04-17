(function(){
    
    // ==========================================
    // Sticky Header JS (Optimized with RAF)
    // ==========================================
    let ticking = false;
    const header = document.querySelector("header");
    
    function updateStickyHeader() {
        if (window.scrollY > 50) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
        ticking = false;
    }

    window.addEventListener("scroll", function () {
        if (!ticking) {
            window.requestAnimationFrame(updateStickyHeader);
            ticking = true;
        }
    }, { passive: true });


    // ==========================================
    // Service Offer Slider JS (Lazy Load)
    // ==========================================
    let serviceOfferSlider = document.querySelector('.service-offer-slider');
    if (serviceOfferSlider) {
        let serviceOfferObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    $('.service-offer-slider').slick({
                        dots: false,
                        arrow: false,
                        infinite: true,
                        speed: 500,
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 1000,
                        lazyLoad: 'ondemand',
                        responsive: [
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1,
                                    infinite: true,
                                    dots: false
                                }
                            },
                            {
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1
                                }
                            },
                            {
                                breakpoint: 576,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            }
                        ]
                    });
                    serviceOfferObserver.unobserve(entry.target);
                }
            });
        }, { rootMargin: '100px' });
        serviceOfferObserver.observe(serviceOfferSlider);
    }


    // ==========================================
    // Award Brands Slider JS (Lazy Load)
    // ==========================================
    let awardBrandsSlider = document.querySelector('.award-brands-slider');
    if (awardBrandsSlider) {
        let awardBrandsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    $('.award-brands-slider').slick({
                        dots: false,
                        arrow: false,
                        infinite: true,
                        speed: 500,
                        slidesToShow: 5,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 1000,
                        lazyLoad: 'ondemand',
                        responsive: [
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1,
                                    infinite: true,
                                    dots: false
                                }
                            },
                            {
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1
                                }
                            },
                            {
                                breakpoint: 520,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1
                                }
                            }
                        ]
                    });
                    awardBrandsObserver.unobserve(entry.target);
                }
            });
        }, { rootMargin: '100px' });
        awardBrandsObserver.observe(awardBrandsSlider);
    }


    // ==========================================
    // Feedback Content Slider JS (Lazy Load)
    // ==========================================
    let feedbackSlider = document.querySelector('.customer-feedback-slider');
    if (feedbackSlider) {
        let feedbackObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    $('.customer-feedback-slider').slick({
                        dots: false,
                        arrow: true,
                        infinite: false,
                        speed: 400,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        fade: true,
                        asNavFor: '.customer-feedback-images',
                        autoplay: false,
                        autoplaySpeed: 2000,
                        lazyLoad: 'ondemand',
                        responsive: [
                            {
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    infinite: true,
                                    dots: false
                                }
                            },
                            {
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            },
                            {
                                breakpoint: 520,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            }
                        ]
                    });
                    
                    $('.customer-feedback-images').slick({
                        dots: false,
                        arrow: false,
                        infinite: false,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        asNavFor: '.customer-feedback-slider',
                        focusOnSelect: true,
                        lazyLoad: 'ondemand'
                    });
                    
                    feedbackObserver.unobserve(entry.target);
                }
            });
        }, { rootMargin: '800px',threshold: 0.1 });
        feedbackObserver.observe(feedbackSlider);
    }


    // ==========================================
    // Reviews Trustpilot Slider JS (Lazy Load)
    // ==========================================
    let reviewsSlider = document.querySelector('.reviews-trustpilot-items');
    if (reviewsSlider) {
        let reviewsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    $('.reviews-trustpilot-items').slick({
                        dots: false,
                        arrow: false,
                        infinite: true,
                        speed: 500,
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        autoplay: true,
                        autoplaySpeed: 2000,
                        lazyLoad: 'ondemand',
                        responsive: [
                            {
                                breakpoint: 1400,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 1,
                                    infinite: true,
                                    dots: false
                                }
                            },
                            {
                                breakpoint: 992,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1,
                                    infinite: true,
                                    dots: false
                                }
                            },
                            {
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 1
                                }
                            },
                            {
                                breakpoint: 576,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            }
                        ]
                    });
                    reviewsObserver.unobserve(entry.target);
                }
            });
        }, { rootMargin: '100px' });
        reviewsObserver.observe(reviewsSlider);
    }


    // ==========================================
    // Counter Timer JS (Lazy Load with Observer)
    // ==========================================
    $.fn.jQuerySimpleCounter = function (options) {
        var settings = $.extend({
            start: 0,
            end: 100,
            easing: 'swing',
            duration: 400,
            complete: '',
            point_tag: 0
        }, options);

        var thisElement = $(this);

        $({ count: settings.start }).animate({ count: settings.end }, {
            duration: settings.duration,
            easing: settings.easing,
            point_tag: settings.point_tag,
            step: function () {
                if (settings.point_tag == 1) {
                    var mathCount = parseFloat(this.count).toFixed(1);
                } else {
                    var mathCount = Math.ceil(this.count);
                }
                thisElement.text(mathCount);
            },
            complete: settings.complete
        });
    };

    // Counter Observer
    let counterElements = document.querySelectorAll('#number1, #number2, #number3, #number4, #number5');
    if (counterElements.length > 0) {
        let counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    var $el = $(entry.target);
                    var endVal = parseFloat($el.text());
                    var duration = 2000;
                    
                    if (entry.target.id === 'number1') duration = 2000;
                    if (entry.target.id === 'number2') duration = 5000;
                    if (entry.target.id === 'number3') duration = 3000;
                    if (entry.target.id === 'number4') duration = 4000;
                    if (entry.target.id === 'number5') duration = 5000;
                    
                    $el.jQuerySimpleCounter({ 
                        end: endVal, 
                        duration: duration, 
                        point_tag: 0 
                    });
                    
                    counterObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counterElements.forEach(el => counterObserver.observe(el));
    }


    // ==========================================
    // Form Validation JS (Optimized with Lazy Load)
    // ==========================================
    $(document).ready(function () {
        const formClass = '.myForm';
        const phoneInputClass = '.countryCode';
        const fullPhoneClass = '.fullPhoneNumber';

        // Phone inputs lazy initialize
        let phoneInputs = document.querySelectorAll(phoneInputClass);
        if (phoneInputs.length > 0) {
            let phoneObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !$(entry.target).data('iti-initialized')) {
                        const $input = $(entry.target);
                        $input.intlTelInput({
                            initialCountry: "us",
                            separateDialCode: true,
                            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/utils.js"
                        });
                        $input.data('iti-initialized', true);

                        $input.on("input", function () {
                            this.value = this.value.replace(/[^0-9]/g, '');
                            const maxLength = 10;
                            if ($(this).val().length > maxLength) {
                                $(this).val($(this).val().slice(0, maxLength));
                            }
                        });
                        
                        phoneObserver.unobserve(entry.target);
                    }
                });
            }, { rootMargin: '200px' });

            phoneInputs.forEach(input => phoneObserver.observe(input));
        }

        // Validation methods
        $.validator.addMethod("validPhone", function (value, element) {
            const $form = $(element).closest(formClass);
            const $phoneInput = $form.find(phoneInputClass);
            return $phoneInput.intlTelInput("isValidNumber");
        }, "Please enter a valid phone number");

        $.validator.addMethod("digitsOnly", function(value, element) {
            return this.optional(element) || /^[0-9]+$/.test(value);
        }, "Only digits are allowed");

        // Forms lazy initialize
        let forms = document.querySelectorAll(formClass);
        if (forms.length > 0) {
            let formObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting && !$(entry.target).data('validator-initialized')) {
                        const $form = $(entry.target);

                        $form.validate({
                            ignore: [],
                            debug: false,
                            errorClass: "error-msg",
                            rules: {
                                services: { required: true },
                                'manuscript-ready': { required: true },
                                'published-before': { required: true },
                                'plan-on-publishing': { required: true },
                                name: { required: true, minlength: 3 },
                                email: { required: true, email: true },
                                message: { required: true, minlength: 3 },
                                phone: { required: true, minlength: 10, digitsOnly: true },
                            },
                            messages: {
                                language: "Please select language",
                                service: "Please select service",
                                genre: "Please select genre",
                                'manuscript-ready': "Please select manuscript",
                                'published-before': "Please select published before",
                                'plan-on-publishing': "Please select plan",
                                name: {
                                    required: "Please enter your name",
                                    minlength: "Name must be more than 3 characters long"
                                },
                                email: {
                                    required: "Please enter your email",
                                    email: "Please enter valid email"
                                },
                                message: {
                                    required: "Please enter your message",
                                    minlength: "Message must be more than 3 characters long"
                                },
                                phone: {
                                    required: "Please enter your phone",
                                    minlength: "Please enter 10 digit phone number"
                                },
                                services: {
                                    required: "Please select a service"
                                },
                            },
                            errorPlacement: function (error, element) {
                                if (element.hasClass('fld-input')) {
                                    error.insertAfter(element);
                                }
                                else if (element.hasClass('field')) {
                                    error.insertAfter(element);
                                }
                                else if (element.attr("name") === "phone") {
                                    error.insertAfter($form.find('.iti--allow-dropdown'))
                                }
                                else if (element.attr("name") === "recieve-updates") {
                                    error.insertAfter(element.parent());
                                }
                                else {
                                    error.insertAfter(element);
                                }
                            },
                            submitHandler: function (form) {
                                const $form = $(form);
                                const fullNumber = $form.find(phoneInputClass).intlTelInput("getNumber");
                                $form.find(fullPhoneClass).val(fullNumber);
                                console.log("Submitted number:", fullNumber);
                                form.submit();
                            }
                        });
                        
                        $form.data('validator-initialized', true);
                        formObserver.unobserve(entry.target);
                    }
                });
            }, { rootMargin: '100px' });

            forms.forEach(form => formObserver.observe(form));
        }
    });
})();

(function(){
    // ==========================================
    // Zendesk - 5 second delay
    // ==========================================
    // ✅ State globally track karo
    var widgetOpen = false;

    setTimeout(function() {
        var s = document.createElement('script');
        s.id = 'ze-snippet';
        s.src = 'https://static.zdassets.com/ekr/snippet.js?key=402fac6a-524a-4d4b-834f-7ee0784ebe99';
        s.async = true;
        document.head.appendChild(s);

        s.onload = function() {

            // ✅ Auto open after load
            zE('webWidget', 'open');
            widgetOpen = true;

            var userMinimized = false;
            var keyboardListenerActive = false;

            // ✅ Minimize/close track karo
            zE('webWidget:on', 'close', function() {
                userMinimized = true;
                widgetOpen = false;

                // ✅ Keyboard type pe reopen
                if (!keyboardListenerActive) {
                    keyboardListenerActive = true;

                    document.addEventListener('keydown', function handleKeyPress(e) {
                        var isPrintable = e.key.length === 1 && !e.ctrlKey && !e.altKey && !e.metaKey;

                        if (isPrintable && userMinimized) {
                            zE('webWidget', 'open');
                            userMinimized = false;
                            widgetOpen = true;
                            document.removeEventListener('keydown', handleKeyPress);
                            keyboardListenerActive = false;
                        }
                    });
                }
            });

            // ✅ Open hone par flag reset
            zE('webWidget:on', 'open', function() {
                userMinimized = false;
                widgetOpen = true;
            });

            // ✅ New agent message pe reopen
            zE('webWidget:on', 'chat:unreadMessages', function(number) {
                if (userMinimized && number > 0) {
                    zE('webWidget', 'open');
                    userMinimized = false;
                    widgetOpen = true;
                }
            });
        };

    }, 5000);

    // ==========================================
    // Calendly - scroll par load
    // ==========================================
    var calendlyLoaded = false;
    window.addEventListener('scroll', function() {
        if (!calendlyLoaded) {
            calendlyLoaded = true;
            
            var s = document.createElement('script');
            s.src = 'https://assets.calendly.com/assets/external/widget.js';
            s.async = true;
            document.head.appendChild(s);
            
            var c = document.createElement('link');
            c.rel = 'stylesheet';
            c.href = 'https://assets.calendly.com/assets/external/widget.css';
            document.head.appendChild(c);
        }
    }, { once: true });

    // ==========================================
    // setButtonURL function
    // ==========================================
    window.setButtonURL = function() {
        if (typeof zE === 'undefined') return;

        if (widgetOpen) {
            zE('webWidget', 'close');
            widgetOpen = false;
        } else {
            zE('webWidget', 'open');
            widgetOpen = true;
        }
    };

    // ==========================================
    // ✅ Chat.toggle() — button ke liye
    // ==========================================
    window.Chat = {
        toggle: function() {
            window.setButtonURL();
        }
    };

    // ==========================================
    // getUserIP function (with caching)
    // ==========================================
    async function getUserIP() {
        // Cache check
        const cached = sessionStorage.getItem('user_ip_data');
        if (cached) {
            const data = JSON.parse(cached);
            if (Date.now() - data.timestamp < 3600000) { // 1 hour cache
                document.querySelectorAll(".ip").forEach(el => el.value = data.ip || "");
                document.querySelectorAll(".city").forEach(el => el.value = data.city || "");
                document.querySelectorAll(".country").forEach(el => el.value = data.country || "");
                document.querySelectorAll(".zip_code").forEach(el => el.value = data.zip || "");
                return;
            }
        }

        try {
            const response = await fetch('https://api.ipapi.is/', {
                headers: {
                    'Accept': 'application/json'
                }
            });

            const data = await response.json();

            if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);

            // Cache data
            sessionStorage.setItem('user_ip_data', JSON.stringify({
                ip: data.ip || "",
                city: data.location?.city || "",
                country: data.location?.country || "",
                zip: data.location?.zip || "",
                timestamp: Date.now()
            }));

            document.querySelectorAll(".ip").forEach(el => el.value = data.ip || "");
            document.querySelectorAll(".city").forEach(el => el.value = data.location?.city || "");
            document.querySelectorAll(".country").forEach(el => el.value = data.location?.country || "");
            document.querySelectorAll(".zip_code").forEach(el => el.value = data.location?.zip || "");

        } catch (error) {
            console.error("Error fetching IP details:", error);
        }
    }

    getUserIP();
})();