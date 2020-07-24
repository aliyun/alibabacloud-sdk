<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\AttachInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description message
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'code'       => 'code',
        'instanceId' => 'instanceId',
        'message'    => 'message',
    ];

    public function validate()
    {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('message', $this->message, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
