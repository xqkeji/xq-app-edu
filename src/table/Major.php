<?php
namespace xqkeji\app\edu\table;

use xqkeji\form\Table;

class Major extends Table
{
    protected $name = 'edu_major';
    protected $foot = '@Foot';

    protected $isDrag = true;

    // 表格元素列表
    protected $el = [
        '@Id',
        '@Name',
        '~MajorNo',
        '~SelectDept',
        '@Status',
        '@Ordernum',
        '@EditDelete',
    ];
}
