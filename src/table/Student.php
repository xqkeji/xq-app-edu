<?php
namespace xqkeji\app\edu\table;

use xqkeji\form\Table;

class Student extends Table
{
    protected $name = 'edu_student';
    protected $foot = '@Foot';

    // 表格元素列表
    protected $el = [
        '@Id',
        '~SelectSection',
        '~StudentNo',
        '@Fullname',
        '@Sex',
        '@Status',
        '@CreateTime',
        '@EditDelete',
    ];
}
