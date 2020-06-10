<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\SDK\PTS\V20190810\Models\DescribeJMeterSceneResponse\scene;
use AlibabaCloud\Tea\Model;

class DescribeJMeterSceneResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description success
     *
     * @var bool
     */
    public $success;

    /**
     * @description httpStatusCode
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description scene
     *
     * @var scene
     */
    public $scene;
    protected $_name = [
        'requestId'      => 'RequestId',
        'message'        => 'Message',
        'code'           => 'Code',
        'success'        => 'Success',
        'httpStatusCode' => 'HttpStatusCode',
        'scene'          => 'Scene',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('httpStatusCode', $this->httpStatusCode, true);
        Model::validateRequired('scene', $this->scene, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->scene) {
            $res['Scene'] = null !== $this->scene ? $this->scene->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeJMeterSceneResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Scene'])) {
            $model->scene = scene::fromMap($map['Scene']);
        }

        return $model;
    }
}
