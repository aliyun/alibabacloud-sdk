<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DetectStackDriftResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $driftDetectionId;
    protected $_name = [
        'requestId'        => 'RequestId',
        'driftDetectionId' => 'DriftDetectionId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('driftDetectionId', $this->driftDetectionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->driftDetectionId) {
            $res['DriftDetectionId'] = $this->driftDetectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectStackDriftResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DriftDetectionId'])) {
            $model->driftDetectionId = $map['DriftDetectionId'];
        }

        return $model;
    }
}
