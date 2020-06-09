<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDedicatedHostGroupAttributeRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId' => 'RegionId',
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dedicatedHostGroupDesc' => 'DedicatedHostGroupDesc',
        'cpuAllocationRatio' => 'CpuAllocationRatio',
        'memAllocationRatio' => 'MemAllocationRatio',
        'diskAllocationRatio' => 'DiskAllocationRatio',
        'allocationPolicy' => 'AllocationPolicy',
        'hostReplacePolicy' => 'HostReplacePolicy',
    ];
    public function validate() {
        Model::validateRequired('dedicatedHostGroupId', $this->dedicatedHostGroupId, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['RegionId'] = $this->regionId;
        $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        $res['DedicatedHostGroupDesc'] = $this->dedicatedHostGroupDesc;
        $res['CpuAllocationRatio'] = $this->cpuAllocationRatio;
        $res['MemAllocationRatio'] = $this->memAllocationRatio;
        $res['DiskAllocationRatio'] = $this->diskAllocationRatio;
        $res['AllocationPolicy'] = $this->allocationPolicy;
        $res['HostReplacePolicy'] = $this->hostReplacePolicy;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyDedicatedHostGroupAttributeRequest
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
        if(isset($map['DedicatedHostGroupDesc'])){
            $model->dedicatedHostGroupDesc = $map['DedicatedHostGroupDesc'];
        }
        if(isset($map['CpuAllocationRatio'])){
            $model->cpuAllocationRatio = $map['CpuAllocationRatio'];
        }
        if(isset($map['MemAllocationRatio'])){
            $model->memAllocationRatio = $map['MemAllocationRatio'];
        }
        if(isset($map['DiskAllocationRatio'])){
            $model->diskAllocationRatio = $map['DiskAllocationRatio'];
        }
        if(isset($map['AllocationPolicy'])){
            $model->allocationPolicy = $map['AllocationPolicy'];
        }
        if(isset($map['HostReplacePolicy'])){
            $model->hostReplacePolicy = $map['HostReplacePolicy'];
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
     * @description dedicatedHostGroupDesc
     * @var string
     */
    public $dedicatedHostGroupDesc;

    /**
     * @description cpuAllocationRatio
     * @var integer
     */
    public $cpuAllocationRatio;

    /**
     * @description memAllocationRatio
     * @var integer
     */
    public $memAllocationRatio;

    /**
     * @description diskAllocationRatio
     * @var integer
     */
    public $diskAllocationRatio;

    /**
     * @description allocationPolicy
     * @var string
     */
    public $allocationPolicy;

    /**
     * @description hostReplacePolicy
     * @var string
     */
    public $hostReplacePolicy;

}
