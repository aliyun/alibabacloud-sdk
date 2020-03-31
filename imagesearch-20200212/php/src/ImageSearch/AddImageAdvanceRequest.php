<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class AddImageAdvanceRequest extends Model
{
    public $picContentObject;
    public $instanceName;
    public $categoryId;
    public $productId;
    public $picName;
    public $crop;
    public $region;
    public $customContent;
    public $intAttr;
    public $strAttr;
    protected $_required = [
        'picContentObject' => true,
        'instanceName'     => true,
        'productId'        => true,
        'picName'          => true,
    ];
    protected $_description = [
        'picContentObject' => 'PicContentObject',
        'instanceName'     => 'instanceName',
        'categoryId'       => 'categoryId',
        'productId'        => 'productId',
        'picName'          => 'picName',
        'crop'             => 'crop',
        'region'           => 'region',
        'customContent'    => 'customContent',
        'intAttr'          => 'intAttr',
        'strAttr'          => 'strAttr',
    ];
    protected $_name = [
        'picContentObject' => 'PicContentObject',
        'instanceName'     => 'InstanceName',
        'categoryId'       => 'CategoryId',
        'productId'        => 'ProductId',
        'picName'          => 'PicName',
        'crop'             => 'Crop',
        'region'           => 'Region',
        'customContent'    => 'CustomContent',
        'intAttr'          => 'IntAttr',
        'strAttr'          => 'StrAttr',
    ];
}
