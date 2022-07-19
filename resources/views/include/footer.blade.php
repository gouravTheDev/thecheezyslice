<div class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <h3>About The Cheezy Slice<span class="text-primary">.</span> </h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="widget">
                    <h3>Connect</h3>
                    <ul class="list-unstyled social">
                        <li><a href="#"><span class="fa fa-facebook" style="color: blue; font-size: 1.3em;"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram" style="color: #F51976; font-size: 1.3em;"></span></a></li>
                        <li><a href="#"><span class="fa fa-twitter" style="color: #12B0FF; font-size: 1.3em;"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 ml-auto">
                <!-- <div class="widget">
                        <h3>Projects</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">HTML5</a></li>
                            <li><a href="#">CSS3</a></li>
                            <li><a href="#">jQuery</a></li>
                            <li><a href="#">Bootstrap</a></li>
                        </ul>
                    </div> -->
            </div>
            <div class="col-lg-2">
                <!-- <div class="widget">
                        <h3>Services</h3>
                        <ul class="list-unstyled float-left links">
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Front-end</a></li>
                            <li><a href="#">Code</a></li>
                            <li><a href="#">Developer</a></li>
                        </ul>
                    </div> -->
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h3>Contact</h3>
                    <address>Naihati, India</address>
                    <ul class="list-unstyled links mb-4">
                        <li><a href="tel://11234567890">+91 79809 87521</a></li>
                        <li><a><span class="__cf_email__">contact@thechezzyslice.com</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-center">
                <p>

                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | The Cheezy Slice</a> </a>
                </p>
            </div>
        </div>
    </div>
</div>
<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js+bootstrap.min.js"></script>
<script type="text/javascript">
    eval(mod_pagespeed_N0Eu$JHSeg);
    eval(mod_pagespeed_1EaEE3zm8$);
</script>
<script src="js/owl.carousel.min.js+jquery.animateNumber.min.js+jquery.waypoints.min.js"></script>
<script type="text/javascript">
    eval(mod_pagespeed_AvaE3S8Vj4);
    eval(mod_pagespeed_tQhw4Td7OJ);
    eval(mod_pagespeed_9mJBtYefUy);
</script>
<script src="js/jquery.fancybox.min.js+aos.js+custom.js"></script>
<script type="text/javascript">
    eval(mod_pagespeed_FA1rmFTGI0);
    eval(mod_pagespeed_QUsmq5bg1C);
    eval(mod_pagespeed_KcQAD3COvb);
</script>
<script>
    var owls = $(".owl-single").owlCarousel({
        loop: true,
        autoHeight: true,
        margin: 0,
        smartSpeed: 800,
        mouseDrag: false,
        touchDrag: false,
        items: 1,
        nav: false,
        navText: [
            '<span class="icon-keyboard_backspace"></span>',
            '<span class="icon-keyboard_backspace"></span>',
        ],
    });

    $(".menu-item li").each(function(i) {
        var i = i + 1;
        $(this).attr("data-index", i);
    });
    $(".menu-item li").on("click", function(e) {
        $(".menu-item li").removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
        owls.trigger("stop.owl.autoplay");
        var k = $(this).closest("li").data("index");
        k = k - 1;
        owls.trigger("to.owl.carousel", [k, 500]);
    });

    $(".menu-item div").each(function(i) {
        var i = i + 1;
        $(this).attr("data-index", i);
    });
    $(".menu-item div").on("click", function(e) {
        $(".menu-item div").removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
        owls.trigger("stop.owl.autoplay");
        var k = $(this).closest("div").data("index");
        k = k - 1;
        owls.trigger("to.owl.carousel", [k, 500]);
    });

    // Send mail Function
    $(".submit-contact-btn").on("click", function() {
        var datastring = $("#contact-submit-form").serialize();
        console.log(datastring);

        if(!$('#contact-name').val() || !$('#contact-phone').val() || !$('#contact-message').val()){
            return;
        }

        console.log($('#contact-name').val())

        $.ajax({
            type: 'POST',
            url: '/contact',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
            },
            data: JSON.stringify({
                name: $('#contact-name').val() ? $('#contact-name').val() : '',
                phone: $('#contact-phone').val() ? $('#contact-phone').val() : '',
                email: $('#contact-email').val() ? $('#contact-email').val() : '',
                message: $('#contact-message').val() ? $('#contact-message').val() : ''
            }),
            processData: false,
            contentType: "application/json",
            error: function(res) {
                console.log("error", res);
                // location.reload();
            },
            success: function(res) {
                $("#contact-submit-form")[0].reset();
                $("#contact-msg").html("Contact form submitted successfully! We will get back to you soon!")
            }
        });
    })
</script>
</body>

</html>