<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class EvaluateDedicatedHostInstanceResourceResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.dbInstanceClass
     *
     * @var string
     */
    public $DBInstanceClass;

    /**
     * @description data.available
     *
     * @var int
     */
    public $available;
    protected $_name = [
        'requestId'       => 'RequestId',
        'DBInstanceClass' => 'DBInstanceClass',
        'available'       => 'Available',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('DBInstanceClass', $this->DBInstanceClass, true);
        Model::validateRequired('available', $this->available, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->DBInstanceClass) {
            $res['DBInstanceClass'] = $this->DBInstanceClass;
        }
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EvaluateDedicatedHostInstanceResourceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DBInstanceClass'])) {
            $model->DBInstanceClass = $map['DBInstanceClass'];
        }
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }

        return $model;
    }
}
