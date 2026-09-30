<?php
namespace xqkeji\app\edu\table\element;

use xqkeji\form\element\ListItem;
use xqkeji\mvc\builder\Model;

class StudentNo extends ListItem
{
    protected $name = 'student_no';
    protected $text = '学号';
    protected $attrs = [
        'style' => 'min-width:200px;',
    ];
}
