<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td>
        <?php echo $this->renderPartial('_hero', array(
            'dataProvider'=>$dataProvider,
            'heros'=>$heros,
        )); ?><!-- hero -->
    </td>
</tr>
<tr>
    <td bgcolor="#FFFFFF">
        <?php echo $this->renderPartial('_content', array(
            'dataProvider'=>$dataProvider,
        )); ?><!-- content -->
    </td>
</tr>
</table>
<script type="text/javascript">
    $(function () {
        $("#kinMaxShow").kinMaxShow();
    });
</script>
