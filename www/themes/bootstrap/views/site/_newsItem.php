<table width="520" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="440" height="37" align="left" valign="middle"
            background="<?php echo $this->createUrl('images/line2.jpg'); ?>">・ <a
                href="<?php echo $this->createUrl('news/'.$data->id.'.html');?>"><?php echo CHtml::encode($data->title); ?></a>
        </td>
        <td width="80" align="center" valign="middle" background="<?php echo $this->createUrl('/images/line2.jpg'); ?>"><?php echo CHtml::encode(date('Y-m-d', strtotime($data->publish_time))); ?>
        </td>
    </tr>
</table>