<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ConvertBandwidthPackageResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $convertInstanceId;
    protected $_name = [
        'requestId'         => 'RequestId',
        'convertInstanceId' => 'ConvertInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('convertInstanceId', $this->convertInstanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->convertInstanceId) {
            $res['ConvertInstanceId'] = $this->convertInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConvertBandwidthPackageResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ConvertInstanceId'])) {
            $model->convertInstanceId = $map['ConvertInstanceId'];
        }

        return $model;
    }
}
