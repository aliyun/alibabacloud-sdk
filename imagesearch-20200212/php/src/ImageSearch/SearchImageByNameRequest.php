<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class SearchImageByNameRequest extends Model
{
    /**
     * @description categoryId
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

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
     * @description num
     *
     * @var int
     */
    public $num;

    /**
     * @description start
     *
     * @var int
     */
    public $start;

    /**
     * @description filter
     *
     * @var string
     */
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

    public function validate()
    {
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('productId', $this->productId, true);
        Model::validateRequired('picName', $this->picName, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['CategoryId']   = $this->categoryId;
        $res['InstanceName'] = $this->instanceName;
        $res['ProductId']    = $this->productId;
        $res['PicName']      = $this->picName;
        $res['Num']          = $this->num;
        $res['Start']        = $this->start;
        $res['Filter']       = $this->filter;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImageByNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        return $model;
    }
}
