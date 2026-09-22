<?php
namespace xqkeji\app\edu\form;

use xqkeji\form\Form;

class Course extends Form
{
    protected $name = 'course';

    // 表单元素列表
    protected $el = [
        '@Name',
        '~SelectDept',
        '~SelectTerm',
        '@Status',
        '@Ordernum',
        '@SubmitReset',
    ];
}
