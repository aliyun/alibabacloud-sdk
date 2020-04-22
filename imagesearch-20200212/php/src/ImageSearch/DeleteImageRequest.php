<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class DeleteImageRequest extends Model
{
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
    protected $_name = [
        'instanceName' => 'InstanceName',
        'productId'    => 'ProductId',
        'picName'      => 'PicName',
    ];

    public function validate()
    {
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('productId', $this->productId, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['InstanceName'] = $this->instanceName;
        $res['ProductId']    = $this->productId;
        $res['PicName']      = $this->picName;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }

        return $model;
    }
}
