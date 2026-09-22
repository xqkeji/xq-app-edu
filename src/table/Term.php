<?php
namespace xqkeji\app\edu\table;

use xqkeji\form\Table;

class Term extends Table
{
    protected $name = 'edu_term';
    protected $foot = '@Foot';
	protected $isDrag=true;

    // 表格元素列表
    protected $el = [
        '@Id',
        '@Name',
        '@Status',
		'@Ordernum',
        '@CreateTime',
        '@EditDelete',
    ];
}
