<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateMountTargetRequest extends Model {
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'accessGroupName' => 'AccessGroupName',
        'networkType' => 'NetworkType',
        'vpcId' => 'VpcId',
        'VSwitchId' => 'VSwitchId',
        'securityGroupId' => 'SecurityGroupId',
    ];
    public function validate() {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('accessGroupName', $this->accessGroupName, true);
        Model::validateRequired('networkType', $this->networkType, true);
    }
    public function toMap() {
        $res = [];
        $res['FileSystemId'] = $this->fileSystemId;
        $res['AccessGroupName'] = $this->accessGroupName;
        $res['NetworkType'] = $this->networkType;
        $res['VpcId'] = $this->vpcId;
        $res['VSwitchId'] = $this->VSwitchId;
        $res['SecurityGroupId'] = $this->securityGroupId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateMountTargetRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['AccessGroupName'])){
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if(isset($map['NetworkType'])){
            $model->networkType = $map['NetworkType'];
        }
        if(isset($map['VpcId'])){
            $model->vpcId = $map['VpcId'];
        }
        if(isset($map['VSwitchId'])){
            $model->VSwitchId = $map['VSwitchId'];
        }
        if(isset($map['SecurityGroupId'])){
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        return $model;
    }
    /**
     * @description volume
     * @var string
     */
    public $fileSystemId;

    /**
     * @description accessGroupName
     * @var string
     */
    public $accessGroupName;

    /**
     * @description netWorkType
     * @var string
     */
    public $networkType;

    /**
     * @description vpcId
     * @var string
     */
    public $vpcId;

    /**
     * @description vswitchId
     * @var string
     */
    public $VSwitchId;

    /**
     * @description securityGroupId
     * @var string
     */
    public $securityGroupId;

}
