<?php
namespace xqkeji\app\edu\form;

use xqkeji\form\Form;

class Dept extends Form
{
    protected $name = 'dept';
    
    // 表单元素列表
    protected $el = [
        '@Name',
        '@Desc',
        '@Status',
		'@Csrf',
		'@SubmitReset',
    ];
}
