<?php
namespace xqkeji\app\edu\form\element;

use xqkeji\form\element\Text;

class StudentNo extends Text
{
    protected $name = 'student_no';
    protected $text = '学号';
    protected $attrs = [
        'required' => 'true',
        'class' => 'form-control',
    ];
    protected $filters = ['string'];
    protected $vt = [['required']];
    protected $template = '@row';
}
