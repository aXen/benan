<?php $this->beginContent('/layouts/main'); // 取当前Admin模块下的布局文件 ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td height="87" background="<?php echo $this->createUrl('images/0.jpg'); ?>">
                <?php echo $this->renderPartial('_header', array()); ?><!-- header -->
            </td>
        </tr>
        <tr>
            <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center" valign="top">
                            <?php echo $this->renderPartial('_headerpic'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td bgcolor="#FFFFFF">
                            <div align="center">
                                <table width="996" cellpadding="0" cellspacing="8">
                                    <tr>
                                        <td width="221" align="left" valign="top">
                                            <?php echo $this->renderPartial('_intromenu', array()); ?>
                                        </td>
                                        <td width="749" align="left" valign="top">
                                            <?php echo $content; ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td align="center" valign="top" background="<?php echo $this->createUrl('images/5.jpg'); ?>">
                <?php echo $this->renderPartial('_footer'); ?><!-- footer -->
            </td>
        </tr>
    </table>
<?php $this->endContent(); ?>