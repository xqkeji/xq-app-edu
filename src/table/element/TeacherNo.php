<?php
namespace xqkeji\app\edu\table\element;

use xqkeji\form\element\ListItem;
use xqkeji\mvc\builder\Model;

class TeacherNo extends ListItem
{
    protected $name = 'teacher_no';
    protected $text = '教师工号';
    protected $attrs = [
        'style' => 'min-width:200px;',
    ];
}
