<?php
namespace xqkeji\app\edu\table\element;

use xqkeji\form\element\ListItem;
use xqkeji\mvc\builder\Model;

class SelectTerm extends ListItem
{
    protected $name = 'select_term';
    protected $text = '所属学期';
    protected $attrs = [
        'style' => 'min-width:200px;',
    ];
}
