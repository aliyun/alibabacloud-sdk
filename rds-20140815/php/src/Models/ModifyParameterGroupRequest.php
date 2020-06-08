<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyParameterGroupRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'parameterGroupId' => 'ParameterGroupId',
        'parameterGroupName' => 'ParameterGroupName',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'parameters' => 'Parameters',
        'regionId' => 'RegionId',
    ];
    public function validate() {
        Model::validateRequired('parameterGroupId', $this->parameterGroupId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ParameterGroupId'] = $this->parameterGroupId;
        $res['ParameterGroupName'] = $this->parameterGroupName;
        $res['ParameterGroupDesc'] = $this->parameterGroupDesc;
        $res['Parameters'] = $this->parameters;
        $res['RegionId'] = $this->regionId;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyParameterGroupRequest
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
        if(isset($map['ParameterGroupId'])){
            $model->parameterGroupId = $map['ParameterGroupId'];
        }
        if(isset($map['ParameterGroupName'])){
            $model->parameterGroupName = $map['ParameterGroupName'];
        }
        if(isset($map['ParameterGroupDesc'])){
            $model->parameterGroupDesc = $map['ParameterGroupDesc'];
        }
        if(isset($map['Parameters'])){
            $model->parameters = $map['Parameters'];
        }
        if(isset($map['RegionId'])){
            $model->regionId = $map['RegionId'];
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

    /**
     * @description parameters
     * @var string
     */
    public $parameters;

    /**
     * @description regionId
     * @var string
     */
    public $regionId;

}
