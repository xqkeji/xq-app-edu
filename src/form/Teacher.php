<?php
namespace xqkeji\app\edu\form;

use xqkeji\form\Form;

class Teacher extends Form
{
    protected $name = 'teacher';

    // 表单元素列表
    protected $el = [
        '~TeacherNo',
        '@Fullname',
        '@Sex',
        '~SelectDept',
        '@SubmitReset',
    ];
}
