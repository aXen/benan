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
<!--            <ul id="category-tree" class="nav nav-list">-->
<!--                <li><label class="tree-toggle nav-header">Bootstrap</label>-->
<!--                    <ul class="nav nav-list tree">-->
<!--                        <li class="leaf"><a href="#">JavaScript</a></li>-->
<!--                        <li><a href="#">CSS</a></li>-->
<!--                        <li><label class="tree-toggle nav-header">Buttons</label>-->
<!--                            <ul class="nav nav-list tree">-->
<!--                                <li><a href="#">Colors</a></li>-->
<!--                                <li><a href="#">Sizes</a></li>-->
<!--                                <li><label class="tree-toggle nav-header">Forms</label>-->
<!--                                    <ul class="nav nav-list tree">-->
<!--                                        <li><label class="tree-toggle nav-header">Forms</label>-->
<!--                                            <ul class="nav nav-list tree">-->
<!--                                                <li><label class="tree-toggle nav-header">Forms</label>-->
<!--                                                    <ul class="nav nav-list tree">-->
<!--                                                        <li><a href="#">Horizontal</a></li>-->
<!--                                                        <li><a href="#">Vertical</a></li>-->
<!--                                                    </ul>-->
<!--                                                </li>-->
<!--                                                <li><a href="#">Vertical</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
<!--                                        <li><a href="#">Vertical</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="divider"></li>-->
<!--                <li><label class="tree-toggle nav-header">Responsive</label>-->
<!--                    <ul class="nav nav-list tree">-->
<!--                        <li><a href="#">Overview</a></li>-->
<!--                        <li><a href="#">CSS</a></li>-->
<!--                        <li><label class="tree-toggle nav-header">Media Queries</label>-->
<!--                            <ul class="nav nav-list tree">-->
<!--                                <li><a href="#">Text</a></li>-->
<!--                                <li><a href="#">Images</a></li>-->
<!--                                <li><label class="tree-toggle nav-header">Mobile Devices</label>-->
<!--                                    <ul class="nav nav-list tree">-->
<!--                                        <li><a href="#">iPhone</a></li>-->
<!--                                        <li><a href="#">Samsung</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li><label class="tree-toggle nav-header">Coding</label>-->
<!--                            <ul class="nav nav-list tree">-->
<!--                                <li><a href="#">JavaScript</a></li>-->
<!--                                <li><a href="#">jQuery</a></li>-->
<!--                                <li><label class="tree-toggle nav-header">HTML DOM</label>-->
<!--                                    <ul class="nav nav-list tree">-->
<!--                                        <li><a href="#">DOM Elements</a></li>-->
<!--                                        <li><a href="#">Recursive</a></li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
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