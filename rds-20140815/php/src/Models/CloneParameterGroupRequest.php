<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CloneParameterGroupRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId' => 'RegionId',
        'targetRegionId' => 'TargetRegionId',
        'parameterGroupId' => 'ParameterGroupId',
        'parameterGroupName' => 'ParameterGroupName',
        'parameterGroupDesc' => 'ParameterGroupDesc',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('targetRegionId', $this->targetRegionId, true);
        Model::validateRequired('parameterGroupId', $this->parameterGroupId, true);
        Model::validateRequired('parameterGroupName', $this->parameterGroupName, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['RegionId'] = $this->regionId;
        $res['TargetRegionId'] = $this->targetRegionId;
        $res['ParameterGroupId'] = $this->parameterGroupId;
        $res['ParameterGroupName'] = $this->parameterGroupName;
        $res['ParameterGroupDesc'] = $this->parameterGroupDesc;
        return $res;
    }
    /**
     * @param array $map
     * @return CloneParameterGroupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
        }
        if(isset($map['TargetRegionId'])){
            $model->targetRegionId = $map['TargetRegionId'];
        }
        if(isset($map['ParameterGroupId'])){
            $model->parameterGroupId = $map['ParameterGroupId'];
        }
        if(isset($map['ParameterGroupName'])){
            $model->parameterGroupName = $map['ParameterGroupName'];
        }
        if(isset($map['ParameterGroupDesc'])){
            $model->parameterGroupDesc = $map['ParameterGroupDesc'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

    /**
     * @description targetRegionId
     * @var string
     */
    public $targetRegionId;

    /**
     * @description parameterGroupId
     * @var string
     */
    public $parameterGroupId;

    /**
     * @description parameterGroupName
     * @var string
     */
    public $parameterGroupName;

    /**
     * @description parameterGroupDesc
     * @var string
     */
    public $parameterGroupDesc;

}
