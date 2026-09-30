<?php
namespace xqkeji\app\edu\form;

use xqkeji\form\SearchForm;

class SearchStudent extends SearchForm
{
    protected $name = 'search_student';

    protected $attrs = [
        'method' => 'get',
        'class' => 'd-flex flex-wrap justify-content-end gap-2',
    ];

    // 表单元素列表
    protected $el = [
        [
            '~SelectSection',
            'name' => 'xq-s-section_id,eq',
            'template' => '@search',
        ],
		'@SearchSubmit',
    ];
}
