<?php

if ($dataProvider !== null)
    for ($i = 0; $i < count($dataProvider->data); $i++) {
        $usercase = $dataProvider->data[$i];
        ?>
        <table width="717" border="0" cellspacing="12" cellpadding="0">
            <tbody>
            <tr>
                <td width="180" height="16" rowspan="2" align="left" valign="top"><a
                        href="<?php echo $this->createUrl('case/' . $usercase->id . '.html'); ?>"><img
                            src="<?php echo $this->createUrl('images/case/' . $usercase->image); ?>" width="180"
                            height="120"></a></td>
                <td align="left" valign="top" class="STYLE4"><span
                        class="fn-fs-14"><strong><?php echo $usercase->name; ?><a
                                href="<?php echo $this->createUrl('case/' . $usercase->id . '.html'); ?>"></a></strong></span>
                </td>
            </tr>
            <tr>
                <td align="left" valign="top"><?php echo $usercase->brief; ?></td>
            </tr>
            </tbody>
        </table>
    <?php
    }
?>
<!--<table width="717" border="0" cellspacing="0" cellpadding="0">-->
<!--    <tr>-->
<!--        <td height="50" align="center" valign="middle"><a href="#">上一页</a>&nbsp;1&nbsp;2&nbsp;3&nbsp;......&nbsp;101&nbsp;<a-->
<!--                href="#">下一页</a>&nbsp;&nbsp;&nbsp;跳转至-->
<!--            <input name="textfield2" type="text" size="5"/>-->
<!--            页-->
<!--        </td>-->
<!--    </tr>-->
<!--</table>-->