<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDisksRequest extends Model
{
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
     * @description regionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description izNo
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description instanceIds
     *
     * @var string
     */
    public $diskIds;

    /**
     * @description ecsInstanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description diskType
     *
     * @var string
     */
    public $diskType;

    /**
     * @description diskCategory
     *
     * @var string
     */
    public $category;

    /**
     * @description diskStatus
     *
     * @var string
     */
    public $status;

    /**
     * @description snapshotNo
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description portable
     *
     * @var bool
     */
    public $portable;

    /**
     * @description deleteWithInstance
     *
     * @var bool
     */
    public $deleteWithInstance;

    /**
     * @description deleteAutoSnapshot
     *
     * @var bool
     */
    public $deleteAutoSnapshot;

    /**
     * @description pageNo
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description ownerAccount
     *
     * @var string
     */
    public $ownerAccount;

    /**
     * @description fuzzyDiskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description autoSnapshotPolicyId
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description enableAutoSnapshot
     *
     * @var bool
     */
    public $enableAutoSnapshot;

    /**
     * @description enableAutomatedSnapshotPolicy
     *
     * @var bool
     */
    public $enableAutomatedSnapshotPolicy;

    /**
     * @description diskChargeType
     *
     * @var string
     */
    public $diskChargeType;

    /**
     * @description lockReason
     *
     * @var string
     */
    public $lockReason;

    /**
     * @description tagKeyValueParams
     *
     * @var array
     */
    public $tag;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description enableShared
     *
     * @var bool
     */
    public $enableShared;

    /**
     * @description encrypted
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description additionalAttributes
     *
     * @var array
     */
    public $additionalAttributes;

    /**
     * @description dryRun
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description kmsKeyId
     *
     * @var string
     */
    public $KMSKeyId;
    protected $_name = [
        'ownerId'                       => 'OwnerId',
        'resourceOwnerAccount'          => 'ResourceOwnerAccount',
        'resourceOwnerId'               => 'ResourceOwnerId',
        'regionId'                      => 'RegionId',
        'zoneId'                        => 'ZoneId',
        'diskIds'                       => 'DiskIds',
        'instanceId'                    => 'InstanceId',
        'diskType'                      => 'DiskType',
        'category'                      => 'Category',
        'status'                        => 'Status',
        'snapshotId'                    => 'SnapshotId',
        'portable'                      => 'Portable',
        'deleteWithInstance'            => 'DeleteWithInstance',
        'deleteAutoSnapshot'            => 'DeleteAutoSnapshot',
        'pageNumber'                    => 'PageNumber',
        'pageSize'                      => 'PageSize',
        'ownerAccount'                  => 'OwnerAccount',
        'diskName'                      => 'DiskName',
        'autoSnapshotPolicyId'          => 'AutoSnapshotPolicyId',
        'enableAutoSnapshot'            => 'EnableAutoSnapshot',
        'enableAutomatedSnapshotPolicy' => 'EnableAutomatedSnapshotPolicy',
        'diskChargeType'                => 'DiskChargeType',
        'lockReason'                    => 'LockReason',
        'tag'                           => 'Tag',
        'resourceGroupId'               => 'ResourceGroupId',
        'enableShared'                  => 'EnableShared',
        'encrypted'                     => 'Encrypted',
        'additionalAttributes'          => 'AdditionalAttributes',
        'dryRun'                        => 'DryRun',
        'KMSKeyId'                      => 'KMSKeyId',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->diskIds) {
            $res['DiskIds'] = $this->diskIds;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->diskType) {
            $res['DiskType'] = $this->diskType;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->portable) {
            $res['Portable'] = $this->portable;
        }
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->deleteAutoSnapshot) {
            $res['DeleteAutoSnapshot'] = $this->deleteAutoSnapshot;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->enableAutoSnapshot) {
            $res['EnableAutoSnapshot'] = $this->enableAutoSnapshot;
        }
        if (null !== $this->enableAutomatedSnapshotPolicy) {
            $res['EnableAutomatedSnapshotPolicy'] = $this->enableAutomatedSnapshotPolicy;
        }
        if (null !== $this->diskChargeType) {
            $res['DiskChargeType'] = $this->diskChargeType;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->enableShared) {
            $res['EnableShared'] = $this->enableShared;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->additionalAttributes) {
            $res['AdditionalAttributes'] = [];
            if (null !== $this->additionalAttributes) {
                $res['AdditionalAttributes'] = $this->additionalAttributes;
            }
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDisksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DiskIds'])) {
            $model->diskIds = $map['DiskIds'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['DiskType'])) {
            $model->diskType = $map['DiskType'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Portable'])) {
            $model->portable = $map['Portable'];
        }
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['DeleteAutoSnapshot'])) {
            $model->deleteAutoSnapshot = $map['DeleteAutoSnapshot'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['EnableAutoSnapshot'])) {
            $model->enableAutoSnapshot = $map['EnableAutoSnapshot'];
        }
        if (isset($map['EnableAutomatedSnapshotPolicy'])) {
            $model->enableAutomatedSnapshotPolicy = $map['EnableAutomatedSnapshotPolicy'];
        }
        if (isset($map['DiskChargeType'])) {
            $model->diskChargeType = $map['DiskChargeType'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['EnableShared'])) {
            $model->enableShared = $map['EnableShared'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['AdditionalAttributes'])) {
            if (!empty($map['AdditionalAttributes'])) {
                $model->additionalAttributes = [];
                $model->additionalAttributes = $map['AdditionalAttributes'];
            }
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }

        return $model;
    }
}
