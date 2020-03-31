<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class AddImageRequest extends Model
{
    public $instanceName;
    public $categoryId;
    public $productId;
    public $picName;
    public $picContent;
    public $crop;
    public $region;
    public $customContent;
    public $intAttr;
    public $strAttr;
    protected $_required = [
        'instanceName' => true,
        'productId'    => true,
        'picName'      => true,
        'picContent'   => true,
    ];
    protected $_name = [
        'instanceName'  => 'InstanceName',
        'categoryId'    => 'CategoryId',
        'productId'     => 'ProductId',
        'picName'       => 'PicName',
        'picContent'    => 'PicContent',
        'crop'          => 'Crop',
        'region'        => 'Region',
        'customContent' => 'CustomContent',
        'intAttr'       => 'IntAttr',
        'strAttr'       => 'StrAttr',
    ];
    protected $_description = [
        'instanceName'  => 'instanceName',
        'categoryId'    => 'categoryId',
        'productId'     => 'productId',
        'picName'       => 'picName',
        'picContent'    => 'picContent',
        'crop'          => 'crop',
        'region'        => 'region',
        'customContent' => 'customContent',
        'intAttr'       => 'intAttr',
        'strAttr'       => 'strAttr',
    ];
}
