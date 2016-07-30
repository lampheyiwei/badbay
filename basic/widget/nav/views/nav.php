<?php
foreach( $nav as $k=>$v) {
    ?>
    <li class="active<?=$v['class']?>"><a href="<?=$v['url']?>" data-hover="<?=$v['name']?>"><?=$v['name']?></a></li>
    <?php
}
?>