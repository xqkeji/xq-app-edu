<?php
namespace xqkeji\app\edu\table;

use xqkeji\form\TreegridTable;

class Dept extends TreegridTable
{
    protected $name = 'edu_dept';
    protected $foot = '~FootDept';

    // 表格元素列表
    protected $el = [
        '@Id',
        '~NameDept',
        '@Status',
        '~EditDeleteDept',
    ];
}
