<?php
namespace xqkeji\app\edu\table\element;

use xqkeji\form\element\ListItem;
use xqkeji\mvc\builder\Model;

class SelectSection extends ListItem
{
    protected $name = 'select_section';
    protected $text = '所属班级';
    protected $attrs = [
        'style' => 'min-width:200px;',
    ];
}
