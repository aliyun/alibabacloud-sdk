<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class EvaluateDedicatedHostInstanceResourceRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId' => 'RegionId',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'diskType' => 'DiskType',
        'diskSize' => 'DiskSize',
        'instanceClassNames' => 'InstanceClassNames',
        'engine' => 'Engine',
        'engineVersion' => 'EngineVersion',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('dedicatedHostGroupId', $this->dedicatedHostGroupId, true);
        Model::validateRequired('instanceClassNames', $this->instanceClassNames, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('engineVersion', $this->engineVersion, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['RegionId'] = $this->regionId;
        $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        $res['DiskType'] = $this->diskType;
        $res['DiskSize'] = $this->diskSize;
        $res['InstanceClassNames'] = $this->instanceClassNames;
        $res['Engine'] = $this->engine;
        $res['EngineVersion'] = $this->engineVersion;
        return $res;
    }
    /**
     * @param array $map
     * @return EvaluateDedicatedHostInstanceResourceRequest
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
        if(isset($map['DedicatedHostGroupId'])){
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if(isset($map['DiskType'])){
            $model->diskType = $map['DiskType'];
        }
        if(isset($map['DiskSize'])){
            $model->diskSize = $map['DiskSize'];
        }
        if(isset($map['InstanceClassNames'])){
            $model->instanceClassNames = $map['InstanceClassNames'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['EngineVersion'])){
            $model->engineVersion = $map['EngineVersion'];
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
     * @description dedicatedHostGroupId
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description diskType
     * @var string
     */
    public $diskType;

    /**
     * @description diskSize
     * @var string
     */
    public $diskSize;

    /**
     * @description instanceClassNames
     * @var string
     */
    public $instanceClassNames;

    /**
     * @description engine
     * @var string
     */
    public $engine;

    /**
     * @description engineVersion
     * @var string
     */
    public $engineVersion;

}
