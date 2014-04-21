<div class="span3">
    <div class="well">
        <div>
            <?php
            $this->widget('CTreeView',array(
                'id'=>'category-treeview',
                'data'=>Category::model()->getTreeItems(),
                'control'=>'#treecontrol',
                'animated'=>'fast',
                'collapsed'=>true,
                'htmlOptions'=>array(
                    'class'=>'filetree'
                )
            ));
            ?>
        </div>
    </div>
</div>

<script type="application/javascript">

    $('.tree-toggle').click(function () {
        $(this).parent().children('ul.tree').toggle(200);
    });

    $("#category-tree li.leaf").click(function () {
        $("#Category_parent_id").val($(this).text());
    });

    $("#category-treeview li").click(function () {
        $("#Category_parent_id").val($(this).attr("id"));
        return false;
    });
</script>