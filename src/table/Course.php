<?php
namespace xqkeji\app\edu\table;

use xqkeji\form\Table;

class Course extends Table
{
    protected $name = 'edu_course';
    protected $foot = '@Foot';

    // 表格元素列表
    protected $el = [
        '@Id',
        '@Name',
        '~SelectDept',
        '~SelectTerm',
        '@Status',
        '@Ordernum',
        '@CreateTime',
        '@EditDelete',
    ];
}
