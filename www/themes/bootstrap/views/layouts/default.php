<?php $this->beginContent('/layouts/main'); // 取当前Admin模块下的布局文件 ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td height="87" background="<?php echo $this->createUrl('images/0.jpg'); ?>">
                <?php echo $this->renderPartial('_header', array()); ?><!-- header -->
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $content; ?>
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