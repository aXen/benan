<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center" valign="top">
            <img src="<?php echo $this->createUrl('images/Products.jpg'); ?>" width="1034" height="400"/>
        </td>
    </tr>
    <tr>
        <td bgcolor="#FFFFFF">
            <div align="center">
                <table width="996" cellpadding="0" cellspacing="8">
                    <tr>
                        <td width="221" align="left" valign="top">
                            <table width="200" border="0" cellpadding="0" cellspacing="1">
                                <tr>
                                    <td height="25" bgcolor="#D5E1EE">
                                        <div align="center" class="fn-fs-14">产品介绍</div>
                                    </td>
                                </tr>
                            </table>
                            <?php echo $this->renderPartial('_categoies', array(
                                'categories' => $categories,
                            )); ?><!-- categoies -->
                            <br/>
                        </td>
                        <td width="749" align="left" valign="top">
                            <table width="720" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td height="40" align="left" valign="middle" background="/images/line1.jpg"><span
                                            class="STYLE5"><?php echo $model->name; ?></span></td>
                                </tr>
                            </table>
                            <table width="721" height="15" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="center" valign="top"><img src="<?php echo $this->createUrl('images/products/' . $model->image); ?>" width="500" height="434" /></td>
                                </tr>
                                <tr>
                                    <td align="left" valign="top">
                                        <?php echo $model->description; ?><!-- product -->
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
