<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class GetStackPolicyResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description StackPolicyBody
     *
     * @var array
     */
    public $stackPolicyBody;
    protected $_name = [
        'requestId'       => 'RequestId',
        'stackPolicyBody' => 'StackPolicyBody',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('stackPolicyBody', $this->stackPolicyBody, true);
    }

    public function toMap()
    {
        $res                    = [];
        $res['RequestId']       = $this->requestId;
        $res['StackPolicyBody'] = $this->stackPolicyBody;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackPolicyResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
        }

        return $model;
    }
}
