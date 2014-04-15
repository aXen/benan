<table width="520" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="474" height="40" align="left" valign="middle"
            background="/images/line1.jpg">
            <img src="/images/xw.jpg" width="64" height="21"/>
        </td>
        <td width="46" align="right" valign="middle" background="/images/line1.jpg"><a
                href="News.html">
                <img src="/images/more.jpg" width="38" height="14"
                     border="0"/></a></td>
    </tr>
</table>
<?php $this->widget('bootstrap.widgets.TbListView',array(
    'dataProvider'=>$dataProvider,
	'template'=>'{items}',
    'itemView'=>'_newsItem',
)); ?>