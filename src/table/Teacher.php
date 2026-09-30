<?php
namespace xqkeji\app\edu\table;

use xqkeji\form\Table;

class Teacher extends Table
{
    protected $name = 'edu_teacher';
    protected $foot = '@Foot';

    // 表格元素列表
    protected $el = [
        '@Id',
        '~TeacherNo',
        '@Fullname',
        '@Sex',
        '~SelectDept',
        '@CreateTime',
        '@EditDelete',
    ];
}
