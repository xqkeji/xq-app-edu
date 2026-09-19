<?php
namespace xqkeji\app\edu\table\element;
use xqkeji\form\element\ListItem;
class NameDept extends ListItem
{
	protected $name = 'list_name';
	protected $text = '部门';
	protected $attrs=[
		'style'=>'width:100%;',
	];
	protected $el = [
		[
			'$text',
			'name'=>'name',
			'attrs'=>[
				'class'=>'form-control',
				'style'=>'width:300px;',
			],
		]
	];
}

