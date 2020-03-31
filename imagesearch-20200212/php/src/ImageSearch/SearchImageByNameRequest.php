<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class SearchImageByNameRequest extends Model
{
    public $categoryId;
    public $instanceName;
    public $productId;
    public $picName;
    public $num;
    public $start;
    public $filter;
    protected $_name = [
        'categoryId'   => 'CategoryId',
        'instanceName' => 'InstanceName',
        'productId'    => 'ProductId',
        'picName'      => 'PicName',
        'num'          => 'Num',
        'start'        => 'Start',
        'filter'       => 'Filter',
    ];
    protected $_description = [
        'categoryId'   => 'categoryId',
        'instanceName' => 'instanceName',
        'productId'    => 'productId',
        'picName'      => 'picName',
        'num'          => 'num',
        'start'        => 'start',
        'filter'       => 'filter',
    ];
    protected $_required = [
        'instanceName' => true,
        'productId'    => true,
        'picName'      => true,
    ];
}
