<?php
foreach ($categories as $i => $category) {
    ?>
    <table width="200" border="0" cellpadding="0" cellspacing="1">
        <tr>
            <td height="25" bgcolor="#F2F2F2">
                <div align="center" class="fn-fs-14">
                    <a href="<?php echo $this->createUrl('category/' . $category->id . '.html'); ?>"><?php echo $category->name; ?></a></div>
            </td>
        </tr>
    </table>
<?php
}
?>