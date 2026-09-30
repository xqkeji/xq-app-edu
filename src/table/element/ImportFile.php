<?php
namespace xqkeji\app\edu\table\element;

use xqkeji\form\element\ListItem;
use xqkeji\mvc\builder\Model;

class ImportFile extends ListItem
{
    protected $name = 'import_file';
    protected $text = '导入文件';
    protected $attrs = [
        'style' => 'min-width:200px;',
    ];
}
