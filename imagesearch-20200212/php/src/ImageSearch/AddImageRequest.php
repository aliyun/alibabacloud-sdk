<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class AddImageRequest extends Model
{
    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description categoryId
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description productId
     *
     * @var string
     */
    public $productId;

    /**
     * @description picName
     *
     * @var string
     */
    public $picName;

    /**
     * @description picContent
     *
     * @var string
     */
    public $picContent;

    /**
     * @description crop
     *
     * @var bool
     */
    public $crop;

    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description customContent
     *
     * @var string
     */
    public $customContent;

    /**
     * @description intAttr
     *
     * @var int
     */
    public $intAttr;

    /**
     * @description strAttr
     *
     * @var string
     */
    public $strAttr;
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

    public function validate()
    {
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('productId', $this->productId, true);
        Model::validateRequired('picName', $this->picName, true);
        Model::validateRequired('picContent', $this->picContent, true);
    }

    public function toMap()
    {
        $res                  = [];
        $res['InstanceName']  = $this->instanceName;
        $res['CategoryId']    = $this->categoryId;
        $res['ProductId']     = $this->productId;
        $res['PicName']       = $this->picName;
        $res['PicContent']    = $this->picContent;
        $res['Crop']          = $this->crop;
        $res['Region']        = $this->region;
        $res['CustomContent'] = $this->customContent;
        $res['IntAttr']       = $this->intAttr;
        $res['StrAttr']       = $this->strAttr;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['PicContent'])) {
            $model->picContent = $map['PicContent'];
        }
        if (isset($map['Crop'])) {
            $model->crop = $map['Crop'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }
        if (isset($map['IntAttr'])) {
            $model->intAttr = $map['IntAttr'];
        }
        if (isset($map['StrAttr'])) {
            $model->strAttr = $map['StrAttr'];
        }

        return $model;
    }
}
