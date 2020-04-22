<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByNameResponse;

use AlibabaCloud\Tea\Model;

class auctions extends Model
{
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
     * @description customContent
     *
     * @var string
     */
    public $customContent;

    /**
     * @description sortExprValues
     *
     * @var string
     */
    public $sortExprValues;

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
        'categoryId'     => 'CategoryId',
        'productId'      => 'ProductId',
        'picName'        => 'PicName',
        'customContent'  => 'CustomContent',
        'sortExprValues' => 'SortExprValues',
        'intAttr'        => 'IntAttr',
        'strAttr'        => 'StrAttr',
    ];

    public function validate()
    {
        Model::validateRequired('categoryId', $this->categoryId, true);
        Model::validateRequired('productId', $this->productId, true);
        Model::validateRequired('picName', $this->picName, true);
        Model::validateRequired('customContent', $this->customContent, true);
        Model::validateRequired('sortExprValues', $this->sortExprValues, true);
        Model::validateRequired('intAttr', $this->intAttr, true);
        Model::validateRequired('strAttr', $this->strAttr, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['CategoryId']     = $this->categoryId;
        $res['ProductId']      = $this->productId;
        $res['PicName']        = $this->picName;
        $res['CustomContent']  = $this->customContent;
        $res['SortExprValues'] = $this->sortExprValues;
        $res['IntAttr']        = $this->intAttr;
        $res['StrAttr']        = $this->strAttr;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auctions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['CustomContent'])) {
            $model->customContent = $map['CustomContent'];
        }
        if (isset($map['SortExprValues'])) {
            $model->sortExprValues = $map['SortExprValues'];
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
