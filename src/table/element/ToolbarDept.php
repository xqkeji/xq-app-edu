<?php
namespace xqkeji\app\edu\table\element;
use xqkeji\form\element\Td;
class ToolbarDept extends Td
{
    protected $name = "list-toolbar-dept";
    protected $attrs = [
        'colspan' => 99,
        'style' => 'text-align:left;',
    ];
    protected $el = [
        [
            '$TableDiv',
            'name' => 'list-toolbar-content',
            'attrs' => [
                'class' => 'd-flex',
            ],
            'el' => [
                [
					'$button',
					'name'=>'add',
					'attrs'=>[
						'id'=>'xq-add',
						'class'=>'btn btn-primary xq-add',
						'data-bs-toggle'=>'tooltip',
						'data-bs-placement'=>'top',
						'data-bs-trigger'=>'hover',
						'data-bs-html'=>'true',
						'title'=>'没选中时，添加顶级部门；<br/>有选中时，添加子部门。',
						'value'=>'添加',
					],
				]
            ],
        ]
    ];
}
