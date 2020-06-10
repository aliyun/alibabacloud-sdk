<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ft\V20180713\Models;

use AlibabaCloud\Tea\Model;

class FtEagleEyeResponse extends Model
{
    /**
     * @description Params.requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Params.name
     *
     * @var string
     */
    public $name;

    /**
     * @description Params.eagleEyeTraceId
     *
     * @var string
     */
    public $eagleEyeTraceId;
    protected $_name = [
        'requestId'       => 'RequestId',
        'name'            => 'Name',
        'eagleEyeTraceId' => 'eagleEyeTraceId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('eagleEyeTraceId', $this->eagleEyeTraceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->eagleEyeTraceId) {
            $res['eagleEyeTraceId'] = $this->eagleEyeTraceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FtEagleEyeResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['eagleEyeTraceId'])) {
            $model->eagleEyeTraceId = $map['eagleEyeTraceId'];
        }

        return $model;
    }
}
