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
                                        <div align="center" class="fn-fs-14">合作伙伴</div>
                                    </td>
                                </tr>
                            </table>
                            <table width="200" border="0" cellpadding="0" cellspacing="1">
                                <tr>
                                    <td height="25" bgcolor="#F2F2F2">
                                        <div align="center" class="fn-fs-14">
                                            <a href="<?php echo $this->createUrl('casestype/1.html'); ?>">桥梁、交通钢结构</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <table width="200" border="0" cellpadding="0" cellspacing="1">
                                <tr>
                                    <td height="25" bgcolor="#F2F2F2">
                                        <div align="center" class="fn-fs-14">
                                            <a href="<?php echo $this->createUrl('casestype/2.html'); ?>">工程机械</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <table width="200" border="0" cellpadding="0" cellspacing="1">
                                <tr>
                                    <td height="25" bgcolor="#F2F2F2">
                                        <div align="center" class="fn-fs-14">
                                            <a href="<?php echo $this->createUrl('casestype/3.html'); ?>">机械仪表</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <table width="200" border="0" cellpadding="0" cellspacing="1">
                                <tr>
                                    <td height="25" bgcolor="#F2F2F2">
                                        <div align="center" class="fn-fs-14">
                                            <a href="<?php echo $this->createUrl('casestype/4.html'); ?>">厂房钢结构</a>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="749" align="left" valign="top">
                            <table width="720" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td height="40" align="left" valign="middle" background="images/line1.jpg"><span
                                            class="STYLE5">所有案例</span></td>
                                </tr>
                            </table>
                            <table width="721" height="15" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td align="left" valign="top">
                                        <?php echo $this->renderPartial('_caselist', array(
                                            'dataProvider' => $dataProvider,
                                        )); ?><!-- product list -->
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