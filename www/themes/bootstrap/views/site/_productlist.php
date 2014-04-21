<?php

if ($model->products !== null)
    for ($i = 0; $i < count($model->products); $i = $i + 4) {
        ?>
        <table width="717" border="0" cellspacing="12" cellpadding="0">
            <tr>
                <?php
                for ($j = 0; $j < 4; $j++) {
                    if ($i * 4 + $j < count($model->products)) {
                        $product = $model->products[$i * 4 + $j];
                        ?>
                        <td height="16" align="center" valign="top"><a
                                href="<?php echo $this->createUrl('product/' . $product->id . '.html'); ?>"><img
                                    src="<?php echo $this->createUrl('images/products/' . $product->image); ?>" width="150" height="200" border="0"/></a></td>
                    <?php
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                for ($j = 0; $j < 4; $j++) {
                    if ($i * 4 + $j < count($model->products)) {
                        $product = $model->products[$i * 4 + $j];
                        ?>
                        <td height="16" align="center" valign="top"><a
                                href="<?php echo $this->createUrl('product/' . $product->id . '.html'); ?>"><?php echo $product->name; ?></a>
                        </td>
                    <?php
                    }
                }
                ?>
            </tr>
        </table>
    <?php
    }
?>
<table width="717" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td height="50" align="center" valign="middle"><a href="#">上一页</a>&nbsp;1&nbsp;2&nbsp;3&nbsp;......&nbsp;101&nbsp;<a
                href="#">下一页</a>&nbsp;&nbsp;&nbsp;跳转至
            <input name="textfield2" type="text" size="5"/>
            页
        </td>
    </tr>
</table>