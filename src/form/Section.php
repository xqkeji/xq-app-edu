<?php
namespace xqkeji\app\edu\form;

use xqkeji\form\Form;

class Section extends Form
{
    protected $name = 'section';

    // 表单元素列表
    protected $el = [
        '@Name',
        '~SelectMajor',
        '@Status',
        '@Ordernum',
        '@SubmitReset',
    ];
}
