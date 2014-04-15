<?php
/**
 * TbButtonColumn class file.
 * @author Christoffer Niska <ChristofferNiska@gmail.com>
 * @copyright  Copyright &copy; Christoffer Niska 2011-
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @package bootstrap.widgets
 * @since 0.9.8
 */

Yii::import('bootstrap.widgets.TbButtonColumn');

/**
 * Bootstrap button column widget.
 * Used to set buttons to use Glyphicons instead of the defaults images.
 */
class TbNewsButtonColumn extends TbButtonColumn
{
    /**
     * @var array the HTML options for the data cell tags.
     * 覆盖基类的class，以增加按钮列的宽度
     */
    public $htmlOptions=array('class'=>'button-column news-button-column');

	/**
	 * @var string the preview button icon (defaults to 'facetime-video').
     * 默认为放映图标
	 */
	public $previewButtonIcon = 'icon-facetime-video';

    /**
     * 添加预览按钮到最后
     */
    public $template='{view} {update} {delete} {preview}';

    /**
     * 添加预览按钮（默认自带了查看、更新、删除按钮）
     */
    public $buttons = array( 'preview' => array(
        'label'=>'preview',     // text label of the button
        //'options'=>array('style'=>'width: 75px;'),     // HTML options for the button tag
    ));

	/**
	 * Initializes the default buttons (view, update and delete).
	 */
	protected function initDefaultButtons()
	{
		parent::initDefaultButtons();

        if ($this->previewButtonIcon !== false && !isset($this->buttons['preview']['icon']))
            $this->buttons['preview']['icon'] = $this->previewButtonIcon;
	}

	/**
	 * Renders a link button.
	 * @param string $id the ID of the button
	 * @param array $button the button configuration which may contain 'label', 'url', 'imageUrl' and 'options' elements.
	 * @param integer $row the row number (zero-based)
	 * @param mixed $data the data object associated with the row
	 */
	protected function renderButton($id, $button, $row, $data)
	{
        parent::renderButton($id, $button, $row, $data);
	}
}
