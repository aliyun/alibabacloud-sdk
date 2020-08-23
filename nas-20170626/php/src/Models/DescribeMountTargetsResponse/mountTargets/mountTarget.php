<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponse\mountTargets;

use AlibabaCloud\Tea\Model;

class mountTarget extends Model
{
    /**
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswId;

    /**
     * @var string
     */
    public $accessGroup;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'mountTargetDomain' => 'MountTargetDomain',
        'networkType'       => 'NetworkType',
        'vpcId'             => 'VpcId',
        'vswId'             => 'VswId',
        'accessGroup'       => 'AccessGroup',
        'status'            => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('mountTargetDomain', $this->mountTargetDomain, true);
        Model::validateRequired('networkType', $this->networkType, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('vswId', $this->vswId, true);
        Model::validateRequired('accessGroup', $this->accessGroup, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswId) {
            $res['VswId'] = $this->vswId;
        }
        if (null !== $this->accessGroup) {
            $res['AccessGroup'] = $this->accessGroup;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountTarget
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswId'])) {
            $model->vswId = $map['VswId'];
        }
        if (isset($map['AccessGroup'])) {
            $model->accessGroup = $map['AccessGroup'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
