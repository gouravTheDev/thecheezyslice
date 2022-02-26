@include('include.header')

<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<nav class="site-nav mb-5">
    <div class="container-fluid">
        <div class="site-navigation text-center">
            <a href="/" class="logo menu-absolute m-0"><img src="images/logo.png" style="height: 60px" alt=""></a>
            <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Items</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <a href="#" class="btn-book btn btn-primary btn-sm menu-absolute">Book a table</a>
            <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
                <span></span>
            </a>
        </div>
    </div>
</nav>
<div class="untree_co-hero overlay" style="background-image: url('images/pizza-h.jpg');">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <span class="caption" data-aos="fade-up" data-aos-delay="0">Enjoy Your Healthy Delicious Meal</span>
                        <h1 class="mb-4 heading text-white" data-aos="fade-up" data-aos-delay="100">Treat Yourself</h1>
                        <div class="mb-4 text-white desc" data-aos="fade-up" data-aos-delay="200">
                            Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                        <p class="mb-0" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Explore now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .social-hero-section li a span {
            position: absolute;
            top: 32%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
    <ul class="list-unstyled social-hero-section mb-0">
        <li data-aos="fade-left" data-aos-delay="0"><a href="#"><span class="icon-twitter"><img src="images/facebook.png" style="height: 20px;" alt=""></span></a></li>
        <li data-aos="fade-left" data-aos-delay="100"><a href="#"><span class="icon-twitter"><img src="images/instagram.png" style="height: 20px;" alt=""></span></a></li>
        <li data-aos="fade-left" data-aos-delay="200"><a href="#"><span class="icon-twitter"><img src="images/twitter.png" style="height: 20px;" alt=""></span></a></li>
    </ul>
</div>
<div class="untree_co-section bg-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 text-center text-lg-left" data-aos="fade-up" data-aos-delay="0">
                <div class="heading mb-4">
                    <span class="subtitle">Select your Meal</span>
                    <h3>Popular <strong class="text-primary">Foods</strong></h3>
                </div>
                <ul class="list-unstyled untree_co-tab-nav js-custom-dots">
                    <li class="active"><a href="#" class="d-flex align-items-center">
                            <script data-pagespeed-no-defer>
                                //<![CDATA[
                                (function() {
                                    for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function(b, c, a) {
                                            if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters.");
                                            b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                                        }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length - 1; l++) {
                                        var m = k[l];
                                        m in h || (h[m] = {});
                                        h = h[m]
                                    }
                                    var n = k[k.length - 1],
                                        p = h[n],
                                        q = p ? p : function(b) {
                                            var c;
                                            if (null == this) throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");
                                            c = this + "";
                                            if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value");
                                            b |= 0;
                                            for (var a = ""; b;)
                                                if (b & 1 && (a += c), b >>>= 1) c += c;
                                            return a
                                        };
                                    q != p && null != q && g(h, n, {
                                        configurable: !0,
                                        writable: !0,
                                        value: q
                                    });
                                    var t = this;

                                    function u(b, c) {
                                        var a = b.split("."),
                                            d = t;
                                        a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                                        for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} : d[e] = c
                                    };

                                    function v(b) {
                                        var c = b.length;
                                        if (0 < c) {
                                            for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                                            return a
                                        }
                                        return []
                                    };

                                    function w(b) {
                                        var c = window;
                                        if (c.addEventListener) c.addEventListener("load", b, !1);
                                        else if (c.attachEvent) c.attachEvent("onload", b);
                                        else {
                                            var a = c.onload;
                                            c.onload = function() {
                                                b.call(this);
                                                a && a.call(this)
                                            }
                                        }
                                    };
                                    var x;

                                    function y(b, c, a, d, e) {
                                        this.h = b;
                                        this.j = c;
                                        this.l = a;
                                        this.f = e;
                                        this.g = {
                                            height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
                                            width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
                                        };
                                        this.i = d;
                                        this.b = {};
                                        this.a = [];
                                        this.c = {}
                                    }

                                    function z(b, c) {
                                        var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                                        if (a = e && !(e in b.c))
                                            if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                                            else {
                                                d = c.getBoundingClientRect();
                                                var f = document.body;
                                                a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f.parentNode || f).scrollTop);
                                                d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f.parentNode || f).scrollLeft);
                                                f = a.toString() + "," + d;
                                                b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && d <= b.g.width)
                                            } a && (b.a.push(e),
                                            b.c[e] = !0)
                                    }
                                    y.prototype.checkImageForCriticality = function(b) {
                                        b.getBoundingClientRect && z(this, b)
                                    };
                                    u("pagespeed.CriticalImages.checkImageForCriticality", function(b) {
                                        x.checkImageForCriticality(b)
                                    });
                                    u("pagespeed.CriticalImages.checkCriticalImages", function() {
                                        A(x)
                                    });

                                    function A(b) {
                                        b.b = {};
                                        for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(document.getElementsByTagName(c[d])));
                                        if (a.length && a[0].getBoundingClientRect) {
                                            for (d = 0; c = a[d]; ++d) z(b, c);
                                            a = "oh=" + b.l;
                                            b.f && (a += "&n=" + b.f);
                                            if (c = !!b.a.length)
                                                for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) {
                                                    var e = "," + encodeURIComponent(b.a[d]);
                                                    131072 >= a.length + e.length && (a += e)
                                                }
                                            b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a += e), c = !0);
                                            C = a;
                                            if (c) {
                                                d = b.h;
                                                b = b.j;
                                                var f;
                                                if (window.XMLHttpRequest) f =
                                                    new XMLHttpRequest;
                                                else if (window.ActiveXObject) try {
                                                    f = new ActiveXObject("Msxml2.XMLHTTP")
                                                } catch (r) {
                                                    try {
                                                        f = new ActiveXObject("Microsoft.XMLHTTP")
                                                    } catch (D) {}
                                                }
                                                f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a))
                                            }
                                        }
                                    }

                                    function B() {
                                        var b = {},
                                            c;
                                        c = document.getElementsByTagName("IMG");
                                        if (!c.length) return {};
                                        var a = c[0];
                                        if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                                        for (var d = 0; a = c[d]; ++d) {
                                            var e = a.getAttribute("data-pagespeed-url-hash");
                                            e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = {
                                                rw: a.width,
                                                rh: a.height,
                                                ow: a.naturalWidth,
                                                oh: a.naturalHeight
                                            })
                                        }
                                        return b
                                    }
                                    var C = "";
                                    u("pagespeed.CriticalImages.getBeaconData", function() {
                                        return C
                                    });
                                    u("pagespeed.CriticalImages.Run", function(b, c, a, d, e, f) {
                                        var r = new y(b, c, a, e, f);
                                        x = r;
                                        d && w(function() {
                                            window.setTimeout(function() {
                                                A(r)
                                            }, 0)
                                        })
                                    });
                                })();

                                //]]>
                            </script><img src="images/1x/noodles.png" alt="Image" class="img-fluid" data-pagespeed-url-hash="1898401555" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> <span>Breakfast</span>
                        </a></li>
                    <li><a href="#" class="d-flex align-items-center"> <img src="images/1x/chicken.png" alt="Image" class="img-fluid" data-pagespeed-url-hash="551676380" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> <span>Lunch</span></a></li>
                    <li><a href="#" class="d-flex align-items-center"> <img src="images/1x/hotdog.png" alt="Image" class="img-fluid" data-pagespeed-url-hash="2455913026" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> <span>Dinner</span></a></li>
                    <li><a href="#" class="d-flex align-items-center"> <img src="images/1x/drinks.png" alt="Image" class="img-fluid" data-pagespeed-url-hash="1617543578" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"> <span>Drinks</span></a></li>
                </ul>
            </div>
            <div class="col-lg-8 ml-auto" data-aos="fade-up" data-aos-delay="100">
                <div class="owl-single no-dots owl-carousel">
                    <div class="item">
                        <div class="row align-items-center mb-4">
                            <div class="col-6">
                                <h2 class="text-black">Breakfast</h2>
                            </div>
                            <div class="col-6 text-right number">1/4</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-6 mb-4">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_1.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2099361916" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Italian Sauce Mushroom</a></h3>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mb-4">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_2.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2393861837" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Salted Fried Chicken</a></h3>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mb-0">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_3.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2688361758" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Fried Potato w/ Garlic</a></h3>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mb-0">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_4.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2982861679" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Shrimp and olive</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="row align-items-center mb-4">
                            <div class="col-6">
                                <h2 class="text-black">Lunch</h2>
                            </div>
                            <div class="col-6 text-right number">2/4</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-6 mb-4">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_1_b.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="3364204467" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Italian Sauce Mushroom</a></h3>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mb-4">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_2_b.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2100841356" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Salted Fried Chicken</a></h3>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mb-0">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_3_b.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="837478245" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Fried Potato w/ Garlic</a></h3>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mb-0">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_4_b.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="3869082430" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Shrimp and olive</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="row align-items-center mb-4">
                            <div class="col-6">
                                <h2 class="text-black">Dinner</h2>
                            </div>
                            <div class="col-6 text-right number">3/4</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-6 mb-4">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_1.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2099361916" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Italian Sauce Mushroom</a></h3>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mb-4">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_2.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2393861837" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Salted Fried Chicken</a></h3>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mb-0">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_1.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2099361916" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Fried Potato w/ Garlic</a></h3>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mb-0">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_2.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2393861837" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Shrimp and olive</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="item">
                        <div class="row align-items-center mb-4">
                            <div class="col-6">
                                <h2 class="text-black">Drinks</h2>
                            </div>
                            <div class="col-6 text-right number">4/4</div>
                        </div>
                        <div class="row">
                            <div class="col-6 col-lg-6 mb-4">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_1_d.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="3953204309" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Italian Sauce Mushroom</a></h3>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mb-4">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_2_d.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2689841198" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Salted Fried Chicken</a></h3>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mb-0">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_3_d.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="1426478087" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Fried Potato w/ Garlic</a></h3>
                                </div>
                            </div>
                            <div class="col-6 col-lg-6 mb-0">
                                <div class="product">
                                    <a href="#" class="thumbnail"><img src="images/img_4_d.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="163114976" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                                    <h3><a href="#">Shrimp and olive</a></h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="untree_co-section pt-0">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up" data-aos-delay="0">
            <span class="subtitle">Choose Desserts</span>
            <h3>Popular <strong class="text-primary">Desserts</strong></h3>
        </div>
        <div class="row align-items-stretch">
            <div class="col-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="0">
                <a href="#" class="d-flex dess-item align-items-center h-100">
                    <figure class="mr-3">
                        <img src="images/1x/dessert_1.png" alt="Image" class="img-fluid" data-pagespeed-url-hash="1845296955" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </figure>
                    <div>
                        <h3>Cherry Muffin</h3>
                        <span class="price">$20</span>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <a href="#" class="d-flex dess-item align-items-center h-100">
                    <figure class="mr-3">
                        <img src="images/1x/dessert_2.png" alt="Image" class="img-fluid" data-pagespeed-url-hash="2139796876" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </figure>
                    <div>
                        <h3>Rose Muffin</h3>
                        <span class="price">$20</span>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                <a href="#" class="d-flex dess-item align-items-center h-100">
                    <figure class="mr-3">
                        <img src="images/1x/dessert_5.png" alt="Image" class="img-fluid" data-pagespeed-url-hash="3023296639" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </figure>
                    <div>
                        <h3>Sweet Donut</h3>
                        <span class="price">$20</span>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
                <a href="#" class="d-flex dess-item align-items-center h-100">
                    <figure class="mr-3">
                        <img src="images/1x/dessert_4.png" alt="Image" class="img-fluid" data-pagespeed-url-hash="2728796718" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </figure>
                    <div>
                        <h3>Choco Cake</h3>
                        <span class="price">$20</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="untree_co-section bg-img fixed overlay" style="background-image: url('images/hero_bg_2.jpg');">
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-5 mb-5 mb-lg-0 mr-auto testimonial-wrap" data-aos="fade-up" data-aos-delay="0">
                <span class="subtitle">Testimonials</span>
                <h2 class="mb-5">Satisfied <strong class="text-primary">Customers</strong></h2>
                <div class="owl-carousel wide-slider-testimonial">
                    <div class="item">
                        <blockquote class="block-testimonial">
                            <div class="author">
                                <img src="images/person_1.jpg" alt="Free template by TemplateUX" data-pagespeed-url-hash="2281625846" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                <h3>John Doe</h3>
                                <p class="position mb-5">CEO, Founder</p>
                            </div>
                            <p>
                            <div class="quote">&ldquo;</div>
                            &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                        </blockquote>
                    </div>
                    <div class="item">
                        <blockquote class="block-testimonial">
                            <div class="author">
                                <img src="images/person_2.jpg" alt="Free template by TemplateUX" data-pagespeed-url-hash="2576125767" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                <h3>James Woodland</h3>
                                <p class="position mb-5">Designer at Facebook</p>
                            </div>
                            <p>
                            <div class="quote">&ldquo;</div>
                            &ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>
                        </blockquote>
                    </div>
                    <div class="item">
                        <blockquote class="block-testimonial">
                            <div class="author">
                                <img src="images/person_3.jpg" alt="Free template by TemplateUX" data-pagespeed-url-hash="2870625688" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                <h3>Rob Smith</h3>
                                <p class="position mb-5">Product Designer at Twitter</p>
                            </div>
                            <p>
                            <div class="quote">&ldquo;</div>
                            &ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                        </blockquote>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-12 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <span class="subtitle">Galleries</span>
                <h2 class="mb-5">Photo <strong class="text-primary">Galleries</strong></h2>
                <div class="row">
                    <div class="col-6 mb-4">
                        <a href="images/img_1.jpg" data-fancybox="gallery" class="gal"><img src="images/img_1.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2099361916" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                    </div>
                    <div class="col-6 mb-4">
                        <a href="images/img_2.jpg" data-fancybox="gallery" class="gal"><img src="images/img_2.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2393861837" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                    </div>
                    <div class="col-6 mb-4">
                        <a href="images/img_1_b.jpg" data-fancybox="gallery" class="gal"><img src="images/img_1_b.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="3364204467" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                    </div>
                    <div class="col-6 mb-4">
                        <a href="images/img_2_b.jpg" data-fancybox="gallery" class="gal"><img src="images/img_2_b.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="2100841356" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="untree_co-section">
    <div class="container">
        <div class="row mb-4 justify-content-center">
            <div class="col-md-7 text-center mb-5" data-aos="fade-up" data-aos-delay="0">
                <span class="subtitle">Events</span>
                <h2>Enjoy <strong class="text-primary">Our Events</strong></h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
        </div>
        <div class="events-slider owl-carousel" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <img src="images/party_1.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="4286113031" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
                <div class="col-lg-5">
                    <h3 class="mb-4">Birthday Party</h3>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <ul class="list-unstyled ul-check">
                        <li>Away behind the word</li>
                        <li>Bookmarksgrove right at the coast</li>
                        <li>Separated they live</li>
                    </ul>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 order-lg-2">
                    <img src="images/party_2.jpg" alt="Image" class="img-fluid" data-pagespeed-url-hash="285645656" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                </div>
                <div class="col-lg-5">
                    <h3 class="mb-4">Guest Chef Nihgt Party</h3>
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <ul class="list-unstyled ul-check">
                        <li>Away behind the word</li>
                        <li>Bookmarksgrove right at the coast</li>
                        <li>Separated they live</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="untree_co-section bg-img py-5 fixed overlay" style="background-image: url('images/hero_bg_2.jpg');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 text-center">
                <span class="subtitle">Book a table</span>
                <h3>Book A Table Now</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                <p class="mb-0"><a href="#" class="btn btn-primary">Book a table</a></p>
            </div>
        </div>
    </div>
</div>

@include('include.footer')