<?php
namespace xqkeji\app\edu\form\element;

use xqkeji\form\element\Text;

class TeacherNo extends Text
{
    protected $name = 'teacher_no';
    protected $text = '教师工号';
    protected $attrs = [
        'required' => 'true',
        'class' => 'form-control',
    ];
    protected $filters = ['string'];
    protected $vt = [['required']];
    protected $template = '@row';
}
