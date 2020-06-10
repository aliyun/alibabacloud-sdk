<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeHASwitchConfigResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.haConfig
     *
     * @var string
     */
    public $HAConfig;

    /**
     * @description data.manualHATime
     *
     * @var string
     */
    public $manualHATime;
    protected $_name = [
        'requestId'    => 'RequestId',
        'HAConfig'     => 'HAConfig',
        'manualHATime' => 'ManualHATime',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('HAConfig', $this->HAConfig, true);
        Model::validateRequired('manualHATime', $this->manualHATime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->HAConfig) {
            $res['HAConfig'] = $this->HAConfig;
        }
        if (null !== $this->manualHATime) {
            $res['ManualHATime'] = $this->manualHATime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHASwitchConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HAConfig'])) {
            $model->HAConfig = $map['HAConfig'];
        }
        if (isset($map['ManualHATime'])) {
            $model->manualHATime = $map['ManualHATime'];
        }

        return $model;
    }
}
