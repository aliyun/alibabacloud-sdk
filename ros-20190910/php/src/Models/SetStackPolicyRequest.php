<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class SetStackPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackPolicyBody;

    /**
     * @var string
     */
    public $stackPolicyURL;
    protected $_name = [
        'stackId'         => 'StackId',
        'regionId'        => 'RegionId',
        'stackPolicyBody' => 'StackPolicyBody',
        'stackPolicyURL'  => 'StackPolicyURL',
    ];

    public function validate()
    {
        Model::validateRequired('stackId', $this->stackId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackPolicyBody) {
            $res['StackPolicyBody'] = $this->stackPolicyBody;
        }
        if (null !== $this->stackPolicyURL) {
            $res['StackPolicyURL'] = $this->stackPolicyURL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetStackPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackPolicyBody'])) {
            $model->stackPolicyBody = $map['StackPolicyBody'];
        }
        if (isset($map['StackPolicyURL'])) {
            $model->stackPolicyURL = $map['StackPolicyURL'];
        }

        return $model;
    }
}
