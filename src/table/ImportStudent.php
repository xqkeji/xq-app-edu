<?php
namespace xqkeji\app\edu\table;

use xqkeji\form\Table;

class ImportStudent extends Table
{
    protected $name = 'edu_import_student';
    protected $foot = '@Foot';

    // 表格元素列表
    protected $el = [
        '@Id',
        '~SelectSection',
        '~ImportFile',
        '~ImportCounts',
        '@CreateTime',
        '@Delete',
    ];
}
