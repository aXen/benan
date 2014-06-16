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
                                        <div align="center" class="fn-fs-14">新闻动态</div>
                                    </td>
                                </tr>
                            </table>
                            <table width="200" border="0" cellpadding="0" cellspacing="1">
                                <tr>
                                    <td height="25" bgcolor="#F2F2F2">
                                        <div align="center" class="fn-fs-14"><a href="companynews">公司新闻</a></div>
                                    </td>
                                </tr>
                            </table>
                            <table width="200" border="0" cellpadding="0" cellspacing="1">
                                <tr>
                                    <td height="25" bgcolor="#F2F2F2">
                                        <div align="center" class="fn-fs-14"><a href="industrynews">行业动态</a></div>
                                    </td>
                                </tr>
                            </table>
                            <table width="200" border="0" cellpadding="0" cellspacing="1">
                                <tr>
                                    <td height="25" bgcolor="#F2F2F2">
                                        <div align="center" class="fn-fs-14"><a href="medianews">媒体报道</a></div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="749" align="left" valign="top">
                            <?php echo $this->renderPartial('_news', array(
                                'dataProvider' => $dataProvider,
                            )); ?><!-- news -->
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>