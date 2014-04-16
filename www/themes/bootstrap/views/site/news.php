<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>本安亚大</title>
    <link rel="stylesheet" type="text/css" href="/css/lrtk.css">
    <link type="text/css" href="/css/base.css" rel="stylesheet"/>
    <!-- dd menu -->
    <script type="text/javascript">
        <!--
        var timeout = 500;
        var closetimer = 0;
        var ddmenuitem = 0;

        // open hidden layer
        function mopen(id) {
            // cancel close timer
            mcancelclosetime();

            // close old layer
            if (ddmenuitem) ddmenuitem.style.visibility = 'hidden';

            // get new layer and show it
            ddmenuitem = document.getElementById(id);
            ddmenuitem.style.visibility = 'visible';

        }
        // close showed layer
        function mclose() {
            if (ddmenuitem) ddmenuitem.style.visibility = 'hidden';
        }

        // go close timer
        function mclosetime() {
            closetimer = window.setTimeout(mclose, timeout);
        }

        // cancel close timer
        function mcancelclosetime() {
            if (closetimer) {
                window.clearTimeout(closetimer);
                closetimer = null;
            }
        }

        // close layer when click-out
        document.onclick = mclose;
        // -->
    </script>
    <style type="text/css">
        <!--
        a {
            font-family: 'Microsoft Yahei';
            font-size: 12px;
            color: #333333;
        }

        a:link {
            text-decoration: none;
        }

        a:visited {
            text-decoration: none;
            color: #666666;
        }

        a:hover {
            text-decoration: underline;
            color: #0066FF;
        }

        a:active {
            text-decoration: none;
        }

        .style4 {
            color: #FF3300;
        }

        -->
    </style>
    <style type="text/css">
        #kinMaxShow {
            visibility: hidden;
            width: 100%;
            height: 500px;
            overflow: hidden;
        }

        body {
            background-color: #F1F1F1;
        }

        .STYLE2 {
            color: #666666;
            line-height: 20px;
        }

        .STYLE3 {
            color: #333333;
        }

        .STYLE5 {
            color: #000000;
        }

        .STYLE6 {
            font-size: 14px;
            color: #000000;
            font-weight: bold;
        }

        .STYLE8 {
            font-size: 12;
        }

        .STYLE9 {
            color: #000000;
            font-size: 14px;
        }
    </style>
    <script src="/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="/js/jquery.kinMaxShow-1.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(function () {
            $("#kinMaxShow").kinMaxShow();
        });

    </script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td height="87" background="/images/0.jpg">
            <?php echo $this->renderPartial('_header', array(
                'dataProvider'=>$dataProvider,
            )); ?><!-- header -->
        </td>
    </tr>
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
            <?php echo $this->renderPartial('_newscontent', array(
                'dataProvider'=>$dataProvider,
                'model'=>$model,
            )); ?><!-- content -->
        </td>
    </tr>
    <tr>
        <td align="center" valign="top" background="/images/5.jpg">
            <?php echo $this->renderPartial('_footer'); ?><!-- footer -->
        </td>
    </tr>
</table>
</body>
</html>
