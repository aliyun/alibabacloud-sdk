<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListResourceTypesResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description ResourceTypes
     *
     * @var array
     */
    public $resourceTypes;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resourceTypes' => 'ResourceTypes',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('resourceTypes', $this->resourceTypes, true);
    }

    public function toMap()
    {
        $res                  = [];
        $res['RequestId']     = $this->requestId;
        $res['ResourceTypes'] = [];
        if (null !== $this->resourceTypes) {
            $res['ResourceTypes'] = $this->resourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceTypesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceTypes'])) {
            if (!empty($map['ResourceTypes'])) {
                $model->resourceTypes = [];
                $model->resourceTypes = $map['ResourceTypes'];
            }
        }

        return $model;
    }
}
