<?php
namespace xqkeji\app\edu\form\element;

use xqkeji\form\element\FileInput;

class ImportFile extends FileInput
{
    protected $name = 'import_file';
    protected $text = '导入文件';
    protected $attrs = [
        'required' => 'true',
        'class' => 'form-control',
    ];
    protected $filters = ['string'];
    protected $vt = [['required']];
    protected $template = '@row';
	protected $options=[
		'allowedFileExtensions'=>['xls'],
	];
}
