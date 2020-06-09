<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDedicatedHostGroupRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId' => 'RegionId',
        'engine' => 'Engine',
        'cpuAllocationRatio' => 'CpuAllocationRatio',
        'memAllocationRatio' => 'MemAllocationRatio',
        'diskAllocationRatio' => 'DiskAllocationRatio',
        'allocationPolicy' => 'AllocationPolicy',
        'VPCId' => 'VPCId',
        'hostReplacePolicy' => 'HostReplacePolicy',
        'clientToken' => 'ClientToken',
        'openPermission' => 'OpenPermission',
    ];
    public function validate() {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('VPCId', $this->VPCId, true);
        Model::validateRequired('clientToken', $this->clientToken, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['RegionId'] = $this->regionId;
        $res['Engine'] = $this->engine;
        $res['CpuAllocationRatio'] = $this->cpuAllocationRatio;
        $res['MemAllocationRatio'] = $this->memAllocationRatio;
        $res['DiskAllocationRatio'] = $this->diskAllocationRatio;
        $res['AllocationPolicy'] = $this->allocationPolicy;
        $res['VPCId'] = $this->VPCId;
        $res['HostReplacePolicy'] = $this->hostReplacePolicy;
        $res['ClientToken'] = $this->clientToken;
        $res['OpenPermission'] = $this->openPermission;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateDedicatedHostGroupRequest
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
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
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
        if(isset($map['VPCId'])){
            $model->VPCId = $map['VPCId'];
        }
        if(isset($map['HostReplacePolicy'])){
            $model->hostReplacePolicy = $map['HostReplacePolicy'];
        }
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
        }
        if(isset($map['OpenPermission'])){
            $model->openPermission = $map['OpenPermission'];
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
     * @description engine
     * @var string
     */
    public $engine;

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
     * @description vpcId
     * @var string
     */
    public $VPCId;

    /**
     * @description hostReplacePolicy
     * @var string
     */
    public $hostReplacePolicy;

    /**
     * @description clientToken
     * @var string
     */
    public $clientToken;

    /**
     * @description openPermission
     * @var integer
     */
    public $openPermission;

}
