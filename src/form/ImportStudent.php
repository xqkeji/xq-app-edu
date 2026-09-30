<?php
namespace xqkeji\app\edu\form;

use xqkeji\form\Form;

class ImportStudent extends Form
{
    protected $name = 'import_student';

    // 表单元素列表
    protected $el = [
        '~SelectSection',
        '~ImportFile',
        '@SubmitReset',
    ];
}
