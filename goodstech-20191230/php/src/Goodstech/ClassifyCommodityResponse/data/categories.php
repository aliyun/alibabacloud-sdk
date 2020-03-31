<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Goodstech\V20191230\Goodstech\ClassifyCommodityResponse\data;

use AlibabaCloud\Tea\Model;

class categories extends Model
{
    public $score;
    public $categoryName;
    public $categoryId;
    protected $_required = [
        'score'        => true,
        'categoryName' => true,
        'categoryId'   => true,
    ];
    protected $_name = [
        'score'        => 'Score',
        'categoryName' => 'CategoryName',
        'categoryId'   => 'CategoryId',
    ];
    protected $_description = [
        'score'        => 'score',
        'categoryName' => 'categoryName',
        'categoryId'   => 'categoryId',
    ];
}
