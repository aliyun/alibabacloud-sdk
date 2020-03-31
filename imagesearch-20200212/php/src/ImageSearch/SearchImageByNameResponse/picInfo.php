<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByNameResponse;

use AlibabaCloud\Tea\Model;

class picInfo extends Model
{
    public $categoryId;
    public $region;
    public $allCategories;
    protected $_required = [
        'categoryId'    => true,
        'region'        => true,
        'allCategories' => true,
    ];
    protected $_name = [
        'categoryId'    => 'CategoryId',
        'region'        => 'Region',
        'allCategories' => 'AllCategories',
    ];
    protected $_description = [
        'categoryId'    => 'categoryId',
        'region'        => 'region',
        'allCategories' => 'allCategories',
    ];
}
