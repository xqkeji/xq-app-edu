<?php
namespace xqkeji\app\edu\table\element;

use xqkeji\form\element\ListItem;
use xqkeji\mvc\builder\Model;

class SelectDept extends ListItem
{
    protected $name = 'select_dept';
    protected $text = '所属部门';
    protected $attrs = [
        'style' => 'min-width:200px;',
    ];
}
