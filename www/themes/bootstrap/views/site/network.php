<?php
$cs = Yii::app()->clientScript;
$cs->registerCssFile('http://code.google.com/apis/maps/documentation/javascript/examples/default.css');
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center" valign="top">
            <img src="<?php echo $this->createUrl('images/support.jpg'); ?>" width="1234" height="260"/>
        </td>
    </tr>
    <tr>
        <td bgcolor="#FFFFFF">
            <div align="center">
                <table width="996" cellpadding="0" cellspacing="8">
                    <tr>
                        <td width="221" align="left" valign="top">
                            <?php echo $this->renderPartial('_supportmenu', array()); ?><!-- supportmenu -->
                            <br/>
                        </td>
                        <td width="749" align="left" valign="top">
                            <table width="720" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                <tr>
                                    <td height="40" align="left" valign="middle" background="/images/line1.jpg"><span
                                            class="STYLE5">销售/服务网络</span></td>
                                </tr>
                                </tbody>
                            </table>
                            <table width="721" height="15" border="0" cellpadding="0" cellspacing="0">
                                <tbody>
                                <tr>
                                    <td align="left" valign="top">
                                        <div id="container" style="width: 600px; height: 400px;">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"/>
<script type="text/javascript">
    $(function () {
        var point = new google.maps.LatLng(28.20976, 113.06445);            // location, （纬度, 经度）
        var option = {
            zoom: 15,
            center: point,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var obj = document.getElementById("container");                       // container
        var map = new google.maps.Map(obj, option);                           // show map

        var marker = new google.maps.Marker({
            position: point,
            map: map,
            title: '湖南中科本安新材料有限公司'
        });
    });
</script>
