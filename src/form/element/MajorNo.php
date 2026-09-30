<?php
namespace xqkeji\app\edu\form\element;

use xqkeji\form\element\Text;

class MajorNo extends Text
{
    protected $name = 'major_no';
    protected $text = '专业代码';
    protected $attrs = [
        'required' => 'true',
        'class' => 'form-control',
    ];
    protected $template = '@row';
}
