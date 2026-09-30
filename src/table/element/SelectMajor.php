<?php
namespace xqkeji\app\edu\table\element;

use xqkeji\form\element\ListSelectModel;
use xqkeji\mvc\builder\Model;

class SelectMajor extends ListSelectModel
{
    protected $text = '所属专业';
    protected $attrs = [
        'style' => 'min-width:200px;',
    ];
}
