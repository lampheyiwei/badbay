<!--end header-section-->
<div class="header-slider">
    <div class="slider">
        <div class="callbacks_container">
            <ul class="rslides" id="slider">
                <li>
                    <img src="/statics/image/home/banner.jpg" alt="">
                    <div class="caption">
                        <h3>natural material </h3>
                        <p>FOURNIER Timber carefully selects from a wide range of quality hardwoods to customers exact requirements which minimises wastage; we do not supply in packs</p>
                        <a class="morebtn hvr-sweep-to-right" href="#">learn more</a>				  </div>
                </li>
                <li>
                    <img src="/statics/image/home/banner1.jpg" alt="">
                    <div class="caption">
                        <h3>Natural material</h3>
                        <p>FOURNIER Timber carefully selects from a wide range of quality hardwoods to customers exact requirements which minimises wastage; we do not supply in packs</p>
                        <a class="morebtn hvr-sweep-to-right" href="#">learn more</a>
                    </div>
                </li>
                <li>
                    <img src="/statics/image/home/banner2.jpg" alt="">
                    <div class="caption">
                        <h3>Natural material</h3>
                        <p>FOURNIER Timber carefully selects from a wide range of quality hardwoods to customers exact requirements which minimises wastage; we do not supply in packs</p>
                        <a class="morebtn hvr-sweep-to-right" href="#">learn more</a>
                    </div>
                </li>
                <li>
                    <img src="/statics/image/home/banner3.jpg" alt="">
                    <div class="caption">
                        <h3>Natural material</h3>
                        <p>FOURNIER Timber carefully selects from a wide range of quality hardwoods to customers exact requirements which minimises wastage; we do not supply in packs</p>
                        <a class="morebtn hvr-sweep-to-right" href="#">learn more</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="welcome-section">
    <div class="container">
        <div class="welcome-grids">
            <div class="col-md-6 welcome-grid">
                <h3>welcome !</h3>
                <p>Santos Timber Company manufactures a wide range of wood products with a focus on decorative wood panels featuring beautiful wood veneers and laminatesAdipiscing elit, sed diam nonummy nibh euismod tinci-dunt ut laoreet dolore set.sit amet consectetuer Aadipi-scing elit, sed diam nonummy. nonummy nibh euismodtincidunt ut laoreet dolore magna.</p>
                <p class="welcome-text">lorem ipsum dolor seradipiscing elit, sed diam nonummy nibh set dolor.Sed diam nonummy nibh euismod tincidunt ut laoreetdolore set.sit amet consectetuer Aadipiscing elit, seddiam nonummy. </p>
                <a href="#" class="button1">more</a>
            </div>
            <div class="col-md-6 welcome-slider">
                <ul id="flexiselDemo3">
                    <li>
                        <div class="biseller-column">
                            <div class="banner-grid">
                                <img src="/statics/image/home/p1.jpg" class="img-responsive" alt="/">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="biseller-column">
                            <div class="banner-grid">
                                <img src="/statics/image/home/p2.jpg" class="img-responsive" alt="/">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="biseller-column">
                            <div class="banner-grid">
                                <img src="/statics/image/home/p3.jpg" class="img-responsive" alt="/">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="new-section">
    <div class="new-grids">
        <div class="col-md-6 left-grid">
            <div class="top-grid">
                <h3>news</h3>
                <div class="col-md-6 new-grid">
                    <h5>Lorem ipsum dolor seradipiscing elit wide range of wood products</h5>
                    <h6>09 may 2015</h6>
                    <p>Santos Timber Company manufactures a wide range of wood products with a focus on decorative wood panels.</p>
                </div>
                <div class="col-md-6 new-grid">
                    <h5>Lorem ipsum dolor seradipiscing elit wide range of wood products</h5>
                    <h6>19 may 2015</h6>
                    <p>Santos Timber Company manufactures a wide range of wood products with a focus on decorative wood panels.</p>

                </div>
                <div class="clearfix"></div>
            </div>
            <div class="bottom-grid">
                <h3>contact</h3>
                <div class="col-md-6 contact">
                    <form>
                        <input type="text" placeholder="Your Name" required="">
                        <input type="text" placeholder="Your Email" required="">
                        <textarea placeholder="Your Comment" required=""></textarea>
                        <input type="submit" value="SEND">
                    </form>

                </div>
                <div class="col-md-6 address">
                    <p>7 Black Rock Rd Mound House, NV 89706 United States</p>
                    <h5>Toll Free Phone</h5>
                    <p>(800) 448-4222     (775) 246-5990</p>
                    <p>Note toll free numbers for USA & Canada Only </p>
                    <div class="social-icon">
                        <h5>follow us</h5>
                        <a href="#"><i class="icon"></i></a>
                        <a href="#"><i class="icon1"></i></a>
                        <a href="#"><i class="icon2"></i></a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 right-grid">
            <div class="top-grid1">
                <div class="col-md-6 right-img">
                    <a href="#" class="mask">
                        <img src="/statics/image/home/p4.jpg" class="img-responsive zoom-img" alt="">
                    </a>
                </div>
                <div class="col-md-6 right-img">
                    <a href="#" class="mask">
                        <img src="/statics/image/home/p5.jpg" class="img-responsive zoom-img" alt="">
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="google-map">
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
    });
</script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<script>
    $("span.menu").click(function(){
        $(".top-menu ul").slideToggle("slow" , function(){
        });
    });
</script>
<script type="text/javascript">
    $(window).load(function() {
        $("#flexiselDemo3").flexisel({
            visibleItems:2,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems:2
                },
                landscape: {
                    changePoint:640,
                    visibleItems:2
                },
                tablet: {
                    changePoint:768,
                    visibleItems:2
                }
            }
        });

    });
</script>