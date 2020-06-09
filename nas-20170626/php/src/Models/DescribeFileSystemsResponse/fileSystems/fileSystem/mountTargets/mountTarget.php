<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponse\fileSystems\fileSystem\mountTargets;

use AlibabaCloud\Tea\Model;

class mountTarget extends Model {
    protected $_name = [
        'mountTargetDomain' => 'MountTargetDomain',
        'networkType' => 'NetworkType',
        'vpcId' => 'VpcId',
        'vswId' => 'VswId',
        'accessGroupName' => 'AccessGroupName',
        'status' => 'Status',
    ];
    public function validate() {
        Model::validateRequired('mountTargetDomain', $this->mountTargetDomain, true);
        Model::validateRequired('networkType', $this->networkType, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('vswId', $this->vswId, true);
        Model::validateRequired('accessGroupName', $this->accessGroupName, true);
        Model::validateRequired('status', $this->status, true);
    }
    public function toMap() {
        $res = [];
        $res['MountTargetDomain'] = $this->mountTargetDomain;
        $res['NetworkType'] = $this->networkType;
        $res['VpcId'] = $this->vpcId;
        $res['VswId'] = $this->vswId;
        $res['AccessGroupName'] = $this->accessGroupName;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return mountTarget
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MountTargetDomain'])){
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if(isset($map['NetworkType'])){
            $model->networkType = $map['NetworkType'];
        }
        if(isset($map['VpcId'])){
            $model->vpcId = $map['VpcId'];
        }
        if(isset($map['VswId'])){
            $model->vswId = $map['VswId'];
        }
        if(isset($map['AccessGroupName'])){
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        return $model;
    }
    /**
     * @description domainName
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @description networkType
     * @var string
     */
    public $networkType;

    /**
     * @description vpcId
     * @var string
     */
    public $vpcId;

    /**
     * @description vSwitchId
     * @var string
     */
    public $vswId;

    /**
     * @description accessGroupName
     * @var string
     */
    public $accessGroupName;

    /**
     * @description status
     * @var string
     */
    public $status;

}
