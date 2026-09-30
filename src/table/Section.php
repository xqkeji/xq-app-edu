<?php
namespace xqkeji\app\edu\table;

use xqkeji\form\Table;

class Section extends Table
{
    protected $name = 'edu_section';
    protected $foot = '@Foot';

    protected $isDrag = true;

    // 表格元素列表
    protected $el = [
        '@Id',
        '@Name',
        '~SelectMajor',
		'@Status',
        '@Ordernum',
        '@CreateTime',
        '@EditDelete',
    ];
}
