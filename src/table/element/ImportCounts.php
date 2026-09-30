<?php
namespace xqkeji\app\edu\table\element;

use xqkeji\form\element\ListItem;
use xqkeji\mvc\builder\Model;

class ImportCounts extends ListItem
{
    protected $name = 'import_counts';
    protected $text = '导入数量';
    protected $attrs = [
        'style' => 'min-width:200px;',
    ];
}
