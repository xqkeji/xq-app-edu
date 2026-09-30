<?php
namespace xqkeji\app\edu\table\element;

use xqkeji\form\element\ListItem;
use xqkeji\mvc\builder\Model;

class MajorNo extends ListItem
{
    protected $name = 'major_no';
    protected $text = '专业代码';
    protected $attrs = [
        'style' => 'min-width:200px;',
    ];
}
