<?php
use app\widget\nav\NavWidget;

echo NavWidget::widget();
?>
<!--start-header-section-->
<div class="header">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="index.html">WildWood</a>
            </div>
        </div>
        <div class="header-bottom">
            <div class="top-menu">
                <span class="menu"><img src="/statics/image/home/nav.png" alt=""/></span>

                <ul class="cl-effect-16">
                    <li class="active"><a href="index.html" data-hover="HOME">HOME</a></li>
                    <li><a href="ourbusiness.html" data-hover="OUR BUSINESS">OUR BUSINESS</a></li>
                    <li><a href="timbers.html" data-hover="TIMBERS" >TIMBERS</a></li>
                    <li><a href="services.html" data-hover="SERVICES">SERVICES</a></li>
                    <li><a href="environment.html" data-hover="ENVIRONMENT">ENVIRONMENT</a></li>
                    <li><a href="mail.html" data-hover="MAIL">MAIL</a></li>
            </div>
            <div class="search">
                <div class="b-search">
                    <form>
                        <input type="text" value="Search here" onfocus="this.value = ''" onblur="if (this.value == '') {this.value = 'Search here';}">
                        <input type="submit" value="">
                    </form>
                </div>
            </div>

            <!-- //script for menu -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
