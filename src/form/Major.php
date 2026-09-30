<?php
namespace xqkeji\app\edu\form;

use xqkeji\form\Form;

class Major extends Form
{
    protected $name = 'major';

    // 表单元素列表
    protected $el = [
        '@Name',
        '~MajorNo',
        '~SelectDept',
        '@Status',
        '@Ordernum',
        '@SubmitReset',
    ];
}
