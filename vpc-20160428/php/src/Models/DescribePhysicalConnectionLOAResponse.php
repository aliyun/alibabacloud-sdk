<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponse\physicalConnectionLOAType;
use AlibabaCloud\Tea\Model;

class DescribePhysicalConnectionLOAResponse extends Model
{
    /**
     * @description description: The ID of the request. ;
     *
     * @var string
     */
    public $requestId;

    /**
     * @description description: The LOA information of the physical connection.
     *
     * @var physicalConnectionLOAType
     */
    public $physicalConnectionLOAType;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'physicalConnectionLOAType' => 'PhysicalConnectionLOAType',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('physicalConnectionLOAType', $this->physicalConnectionLOAType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->physicalConnectionLOAType) {
            $res['PhysicalConnectionLOAType'] = null !== $this->physicalConnectionLOAType ? $this->physicalConnectionLOAType->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePhysicalConnectionLOAResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PhysicalConnectionLOAType'])) {
            $model->physicalConnectionLOAType = physicalConnectionLOAType::fromMap($map['PhysicalConnectionLOAType']);
        }

        return $model;
    }
}
