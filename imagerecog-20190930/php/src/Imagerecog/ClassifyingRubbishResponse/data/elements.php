<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\ClassifyingRubbishResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    public $category;
    public $categoryScore;
    public $rubbish;
    public $rubbishScore;
    protected $_required = [
        'category'      => true,
        'categoryScore' => true,
        'rubbish'       => true,
        'rubbishScore'  => true,
    ];
    protected $_name = [
        'category'      => 'Category',
        'categoryScore' => 'CategoryScore',
        'rubbish'       => 'Rubbish',
        'rubbishScore'  => 'RubbishScore',
    ];
    protected $_description = [
        'category'      => 'category',
        'categoryScore' => 'categoryScore',
        'rubbish'       => 'rubbish',
        'rubbishScore'  => 'rubbishScore',
    ];
}
