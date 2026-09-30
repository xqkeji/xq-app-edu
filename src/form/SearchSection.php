<?php
namespace xqkeji\app\edu\form;

use xqkeji\form\SearchForm;

class SearchSection extends SearchForm
{
    protected $name = 'search_section';



    // 表单元素列表
    protected $el = [
        [
            '~SelectDept',
            'name' => 'xq-s-dept_id,in',
			'isSearch'=>true,
			'template'=>'@Search',
        ],
        '@SearchSubmit',
    ];
}
