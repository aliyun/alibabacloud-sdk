<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeServiceMeshesResponse\serviceMeshes\spec;

use AlibabaCloud\Tea\Model;

class network extends Model
{
    /**
     * @description security_group_id
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description vpc_id
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description vswitch_ids
     *
     * @var array
     */
    public $vSwitches;
    protected $_name = [
        'securityGroupId' => 'SecurityGroupId',
        'vpcId'           => 'VpcId',
        'vSwitches'       => 'VSwitches',
    ];

    public function validate()
    {
        Model::validateRequired('securityGroupId', $this->securityGroupId, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('vSwitches', $this->vSwitches, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = [];
            if (null !== $this->vSwitches) {
                $res['VSwitches'] = $this->vSwitches;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return network
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = [];
                $model->vSwitches = $map['VSwitches'];
            }
        }

        return $model;
    }
}
