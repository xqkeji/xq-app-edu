<?php
namespace xqkeji\app\edu\form;

use xqkeji\form\Form;

class Student extends Form
{
    protected $name = 'student';

    // 表单元素列表
    protected $el = [
        '~SelectSection',
        '~StudentNo',
        '@Fullname',
        '@Sex',
        '@Status',
        '@SubmitReset',
    ];
}
