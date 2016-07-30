<!--banner轮播图-->
<div class="header-slider">
    <div class="slider">
        <div class="callbacks_container">
            <ul class="rslides" id="slider">
                <?php
                    foreach( $banner as $k=>$v ) {
                ?>
                    <li>
                        <img src="<?=$v['image']?>" alt="">
                        <div class="caption">
                            <h3><?=$v['title']?></h3>
                            <p><?=$v['description']?></p>
                            <a class="morebtn hvr-sweep-to-right" href="<?=$v['url']?>">learn more</a>
                        </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>
</div>