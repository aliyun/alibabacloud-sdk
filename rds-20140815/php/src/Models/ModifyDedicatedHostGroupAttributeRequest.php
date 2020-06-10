<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyDedicatedHostGroupAttributeRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description dedicatedHostGroupId
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description dedicatedHostGroupDesc
     *
     * @var string
     */
    public $dedicatedHostGroupDesc;

    /**
     * @description cpuAllocationRatio
     *
     * @var int
     */
    public $cpuAllocationRatio;

    /**
     * @description memAllocationRatio
     *
     * @var int
     */
    public $memAllocationRatio;

    /**
     * @description diskAllocationRatio
     *
     * @var int
     */
    public $diskAllocationRatio;

    /**
     * @description allocationPolicy
     *
     * @var string
     */
    public $allocationPolicy;

    /**
     * @description hostReplacePolicy
     *
     * @var string
     */
    public $hostReplacePolicy;
    protected $_name = [
        'accessKeyId'            => 'AccessKeyId',
        'ownerId'                => 'OwnerId',
        'resourceOwnerAccount'   => 'ResourceOwnerAccount',
        'resourceOwnerId'        => 'ResourceOwnerId',
        'regionId'               => 'RegionId',
        'dedicatedHostGroupId'   => 'DedicatedHostGroupId',
        'dedicatedHostGroupDesc' => 'DedicatedHostGroupDesc',
        'cpuAllocationRatio'     => 'CpuAllocationRatio',
        'memAllocationRatio'     => 'MemAllocationRatio',
        'diskAllocationRatio'    => 'DiskAllocationRatio',
        'allocationPolicy'       => 'AllocationPolicy',
        'hostReplacePolicy'      => 'HostReplacePolicy',
    ];

    public function validate()
    {
        Model::validateRequired('dedicatedHostGroupId', $this->dedicatedHostGroupId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHostGroupDesc) {
            $res['DedicatedHostGroupDesc'] = $this->dedicatedHostGroupDesc;
        }
        if (null !== $this->cpuAllocationRatio) {
            $res['CpuAllocationRatio'] = $this->cpuAllocationRatio;
        }
        if (null !== $this->memAllocationRatio) {
            $res['MemAllocationRatio'] = $this->memAllocationRatio;
        }
        if (null !== $this->diskAllocationRatio) {
            $res['DiskAllocationRatio'] = $this->diskAllocationRatio;
        }
        if (null !== $this->allocationPolicy) {
            $res['AllocationPolicy'] = $this->allocationPolicy;
        }
        if (null !== $this->hostReplacePolicy) {
            $res['HostReplacePolicy'] = $this->hostReplacePolicy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDedicatedHostGroupAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHostGroupDesc'])) {
            $model->dedicatedHostGroupDesc = $map['DedicatedHostGroupDesc'];
        }
        if (isset($map['CpuAllocationRatio'])) {
            $model->cpuAllocationRatio = $map['CpuAllocationRatio'];
        }
        if (isset($map['MemAllocationRatio'])) {
            $model->memAllocationRatio = $map['MemAllocationRatio'];
        }
        if (isset($map['DiskAllocationRatio'])) {
            $model->diskAllocationRatio = $map['DiskAllocationRatio'];
        }
        if (isset($map['AllocationPolicy'])) {
            $model->allocationPolicy = $map['AllocationPolicy'];
        }
        if (isset($map['HostReplacePolicy'])) {
            $model->hostReplacePolicy = $map['HostReplacePolicy'];
        }

        return $model;
    }
}
