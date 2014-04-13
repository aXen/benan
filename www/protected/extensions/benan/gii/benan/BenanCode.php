<?php
/**
 * BenanCode class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

Yii::import('gii.generators.crud.CrudCode');

class BenanCode extends CrudCode
{
	public function generateActiveRow($modelClass, $column)
	{
        if($column->name==='status')
            return "\$form->dropDownListRow(\$model,'status',array('100'=>'正常', '-1'=>'已删除'), array('class'=>'span5 selectpicker','maxlength'=>16, 'placeholder'=>'请输入'.\$model->getAttributeLabel('status')))";
        if($column->name==='create_time')
            return "\$form->textFieldRow(\$model,'create_time',array('class'=>'span5 form_datetime', 'readonly'=>'true', 'placeholder'=>'请输入'.\$model->getAttributeLabel('create_time')))";
        if($column->name==='modify_time')
            return "\$form->textFieldRow(\$model,'modify_time',array('class'=>'span5 form_datetime', 'readonly'=>'true', 'placeholder'=>'请输入'.\$model->getAttributeLabel('modify_time')))";

		if ($column->type === 'boolean')
			return "\$form->checkBoxRow(\$model,'{$column->name}')";
		else if (stripos($column->dbType,'text') !== false)
			return "\$form->textAreaRow(\$model,'{$column->name}',array('rows'=>6, 'cols'=>50, 'class'=>'span8'))";
		else
		{
			if (preg_match('/^(password|pass|passwd|passcode)$/i',$column->name))
				$inputField='passwordFieldRow';
			else
				$inputField='textFieldRow';

			if ($column->type!=='string' || $column->size===null)
				return "\$form->{$inputField}(\$model,'{$column->name}',array('class'=>'span5', 'placeholder'=>'请输入'.\$model->getAttributeLabel('{$column->name}')))";
			else
				return "\$form->{$inputField}(\$model,'{$column->name}',array('class'=>'span5','maxlength'=>$column->size, 'placeholder'=>'请输入'.\$model->getAttributeLabel('{$column->name}')))";
		}
	}
}
