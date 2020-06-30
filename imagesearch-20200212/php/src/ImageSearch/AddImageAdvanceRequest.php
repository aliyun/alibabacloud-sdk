<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class AddImageAdvanceRequest extends Model
{
    /**
     * @description PicContentObject
     *
     * @var Stream
     */
    public $picContentObject;

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

    public function validate()
    {
        Model::validateRequired('picContentObject', $this->picContentObject, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('productId', $this->productId, true);
        Model::validateRequired('picName', $this->picName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->picContentObject) {
            $res['PicContentObject'] = $this->picContentObject;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->crop) {
            $res['Crop'] = $this->crop;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->customContent) {
            $res['CustomContent'] = $this->customContent;
        }
        if (null !== $this->intAttr) {
            $res['IntAttr'] = $this->intAttr;
        }
        if (null !== $this->strAttr) {
            $res['StrAttr'] = $this->strAttr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PicContentObject'])) {
            $model->picContentObject = $map['PicContentObject'];
        }
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
