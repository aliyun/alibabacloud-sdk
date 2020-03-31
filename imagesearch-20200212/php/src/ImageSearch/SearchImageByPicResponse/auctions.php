<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByPicResponse;

use AlibabaCloud\Tea\Model;

class auctions extends Model
{
    public $categoryId;
    public $productId;
    public $picName;
    public $customContent;
    public $sortExprValues;
    public $intAttr;
    public $strAttr;
    protected $_required = [
        'categoryId'     => true,
        'productId'      => true,
        'picName'        => true,
        'customContent'  => true,
        'sortExprValues' => true,
        'intAttr'        => true,
        'strAttr'        => true,
    ];
    protected $_name = [
        'categoryId'     => 'CategoryId',
        'productId'      => 'ProductId',
        'picName'        => 'PicName',
        'customContent'  => 'CustomContent',
        'sortExprValues' => 'SortExprValues',
        'intAttr'        => 'IntAttr',
        'strAttr'        => 'StrAttr',
    ];
    protected $_description = [
        'categoryId'     => 'categoryId',
        'productId'      => 'productId',
        'picName'        => 'picName',
        'customContent'  => 'customContent',
        'sortExprValues' => 'sortExprValues',
        'intAttr'        => 'intAttr',
        'strAttr'        => 'strAttr',
    ];
}
