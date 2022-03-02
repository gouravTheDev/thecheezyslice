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