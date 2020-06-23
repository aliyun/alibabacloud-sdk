<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CheckDataConsistencyResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data
     *
     * @var bool
     */
    public $isDataConsistency;
    protected $_name = [
        'requestId'         => 'RequestId',
        'isDataConsistency' => 'IsDataConsistency',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('isDataConsistency', $this->isDataConsistency, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->isDataConsistency) {
            $res['IsDataConsistency'] = $this->isDataConsistency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckDataConsistencyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IsDataConsistency'])) {
            $model->isDataConsistency = $map['IsDataConsistency'];
        }

        return $model;
    }
}
