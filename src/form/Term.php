<?php
namespace xqkeji\app\edu\form;

use xqkeji\form\Form;

class Term extends Form
{
    protected $name = 'term';

    // 表单元素列表
    protected $el = [
        '@Name',
        '@Status',
        '@Ordernum',
		'@Csrf',
		'@SubmitReset',
    ];
}
