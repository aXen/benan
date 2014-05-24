<!-- 代码 开始 -->
<div id="kinMaxShow">
    <?php
        foreach($heros as $i=>$hero)
        {     ?>
    <div>
        <a href="#" target="_blank">
            <img src="/images/heros/<?php echo $hero->picture; ?>"/></a>
    </div>
    <?php
        }
    ?>
</div>
<!-- 代码 结束 -->