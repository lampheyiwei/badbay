<?php
foreach( $nav as $k=>$v) {
    ?>
    <li class="<?=$v['class']?>"><a href="<?=$v['url']?>" data-hover="<?=$v['name']?>"><?=$v['name']?></a></li>
    <?php
}
?>