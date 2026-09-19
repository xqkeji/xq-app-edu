<?php
namespace xqkeji\app\edu\table\element;
use xqkeji\form\element\ListFoot;
class FootDept extends ListFoot
{
	protected $name = 'list_foot_edu_dept';
	protected $el=[
		'@CheckAll',
		'~ToolbarDept',
	];

}

