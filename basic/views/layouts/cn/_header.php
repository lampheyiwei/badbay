<?php
    use app\widget\nav\NavWidget;
?>
<!--start-header-section-->
<div class="header">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="index.html">fimotioncn</a>
            </div>
        </div>
        <div class="header-bottom">
            <div class="top-menu">
                <span class="menu"><img src="/statics/image/home/nav.png" alt=""/></span>
                <ul class="cl-effect-16">
                    <?=NavWidget::widget(); ?>
                </ul>
            </div>
<!--            <div class="search">-->
<!--                <div class="b-search">-->
<!--                    <form>-->
<!--                        <input type="text" value="Search here" onfocus="this.value = ''" onblur="if (this.value == '') {this.value = 'Search here';}">-->
<!--                        <input type="submit" value="">-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
            <!-- //script for menu -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>

