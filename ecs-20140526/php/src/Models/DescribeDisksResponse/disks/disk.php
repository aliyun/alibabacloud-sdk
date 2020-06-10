<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponse\disks;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponse\disks\disk\mountInstances;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponse\disks\disk\operationLocks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponse\disks\disk\tags;
use AlibabaCloud\Tea\Model;

class disk extends Model
{
    /**
     * @description resourceId
     *
     * @var string
     */
    public $diskId;

    /**
     * @description regionId
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
     * @description diskName
     *
     * @var string
     */
    public $diskName;

    /**
     * @description diskDesc
     *
     * @var string
     */
    public $description;

    /**
     * @description diskType
     *
     * @var string
     */
    public $type;

    /**
     * @description diskCategory
     *
     * @var string
     */
    public $category;

    /**
     * @description diskSize
     *
     * @var int
     */
    public $size;

    /**
     * @description imageNo
     *
     * @var string
     */
    public $imageId;

    /**
     * @description snapshotNo
     *
     * @var string
     */
    public $sourceSnapshotId;

    /**
     * @description autoSnapshotPolicyId
     *
     * @var string
     */
    public $autoSnapshotPolicyId;

    /**
     * @description productCode
     *
     * @var string
     */
    public $productCode;

    /**
     * @description portable
     *
     * @var bool
     */
    public $portable;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description ecsInstanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description mountPoint
     *
     * @var string
     */
    public $device;

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
     * @description gmtCreate
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description lastAttachTime
     *
     * @var string
     */
    public $attachedTime;

    /**
     * @description lastDetachTime
     *
     * @var string
     */
    public $detachedTime;

    /**
     * @description diskChargeType
     *
     * @var string
     */
    public $diskChargeType;

    /**
     * @description expiredTime
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description encrypted
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description storageSetId
     *
     * @var string
     */
    public $storageSetId;

    /**
     * @description storageSetPartitionNumber
     *
     * @var int
     */
    public $storageSetPartitionNumber;

    /**
     * @description mountInstanceNum
     *
     * @var int
     */
    public $mountInstanceNum;

    /**
     * @description iops
     *
     * @var int
     */
    public $IOPS;

    /**
     * @description iopsRead
     *
     * @var int
     */
    public $IOPSRead;

    /**
     * @description iopsWrite
     *
     * @var int
     */
    public $IOPSWrite;

    /**
     * @description kmsKeyId
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description performanceLevel
     *
     * @var string
     */
    public $performanceLevel;

    /**
     * @description bdfId
     *
     * @var string
     */
    public $bdfId;

    /**
     * @description operationLockTypes
     *
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description mountInstances
     *
     * @var mountInstances
     */
    public $mountInstances;

    /**
     * @description tags
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'diskId'                        => 'DiskId',
        'regionId'                      => 'RegionId',
        'zoneId'                        => 'ZoneId',
        'diskName'                      => 'DiskName',
        'description'                   => 'Description',
        'type'                          => 'Type',
        'category'                      => 'Category',
        'size'                          => 'Size',
        'imageId'                       => 'ImageId',
        'sourceSnapshotId'              => 'SourceSnapshotId',
        'autoSnapshotPolicyId'          => 'AutoSnapshotPolicyId',
        'productCode'                   => 'ProductCode',
        'portable'                      => 'Portable',
        'status'                        => 'Status',
        'instanceId'                    => 'InstanceId',
        'device'                        => 'Device',
        'deleteWithInstance'            => 'DeleteWithInstance',
        'deleteAutoSnapshot'            => 'DeleteAutoSnapshot',
        'enableAutoSnapshot'            => 'EnableAutoSnapshot',
        'enableAutomatedSnapshotPolicy' => 'EnableAutomatedSnapshotPolicy',
        'creationTime'                  => 'CreationTime',
        'attachedTime'                  => 'AttachedTime',
        'detachedTime'                  => 'DetachedTime',
        'diskChargeType'                => 'DiskChargeType',
        'expiredTime'                   => 'ExpiredTime',
        'resourceGroupId'               => 'ResourceGroupId',
        'encrypted'                     => 'Encrypted',
        'storageSetId'                  => 'StorageSetId',
        'storageSetPartitionNumber'     => 'StorageSetPartitionNumber',
        'mountInstanceNum'              => 'MountInstanceNum',
        'IOPS'                          => 'IOPS',
        'IOPSRead'                      => 'IOPSRead',
        'IOPSWrite'                     => 'IOPSWrite',
        'KMSKeyId'                      => 'KMSKeyId',
        'performanceLevel'              => 'PerformanceLevel',
        'bdfId'                         => 'BdfId',
        'operationLocks'                => 'OperationLocks',
        'mountInstances'                => 'MountInstances',
        'tags'                          => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('diskId', $this->diskId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('diskName', $this->diskName, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('sourceSnapshotId', $this->sourceSnapshotId, true);
        Model::validateRequired('autoSnapshotPolicyId', $this->autoSnapshotPolicyId, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('portable', $this->portable, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('device', $this->device, true);
        Model::validateRequired('deleteWithInstance', $this->deleteWithInstance, true);
        Model::validateRequired('deleteAutoSnapshot', $this->deleteAutoSnapshot, true);
        Model::validateRequired('enableAutoSnapshot', $this->enableAutoSnapshot, true);
        Model::validateRequired('enableAutomatedSnapshotPolicy', $this->enableAutomatedSnapshotPolicy, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('attachedTime', $this->attachedTime, true);
        Model::validateRequired('detachedTime', $this->detachedTime, true);
        Model::validateRequired('diskChargeType', $this->diskChargeType, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('encrypted', $this->encrypted, true);
        Model::validateRequired('storageSetId', $this->storageSetId, true);
        Model::validateRequired('storageSetPartitionNumber', $this->storageSetPartitionNumber, true);
        Model::validateRequired('mountInstanceNum', $this->mountInstanceNum, true);
        Model::validateRequired('IOPS', $this->IOPS, true);
        Model::validateRequired('IOPSRead', $this->IOPSRead, true);
        Model::validateRequired('IOPSWrite', $this->IOPSWrite, true);
        Model::validateRequired('KMSKeyId', $this->KMSKeyId, true);
        Model::validateRequired('performanceLevel', $this->performanceLevel, true);
        Model::validateRequired('bdfId', $this->bdfId, true);
        Model::validateRequired('operationLocks', $this->operationLocks, true);
        Model::validateRequired('mountInstances', $this->mountInstances, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskId) {
            $res['DiskId'] = $this->diskId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->diskName) {
            $res['DiskName'] = $this->diskName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->sourceSnapshotId) {
            $res['SourceSnapshotId'] = $this->sourceSnapshotId;
        }
        if (null !== $this->autoSnapshotPolicyId) {
            $res['AutoSnapshotPolicyId'] = $this->autoSnapshotPolicyId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->portable) {
            $res['Portable'] = $this->portable;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->deleteWithInstance) {
            $res['DeleteWithInstance'] = $this->deleteWithInstance;
        }
        if (null !== $this->deleteAutoSnapshot) {
            $res['DeleteAutoSnapshot'] = $this->deleteAutoSnapshot;
        }
        if (null !== $this->enableAutoSnapshot) {
            $res['EnableAutoSnapshot'] = $this->enableAutoSnapshot;
        }
        if (null !== $this->enableAutomatedSnapshotPolicy) {
            $res['EnableAutomatedSnapshotPolicy'] = $this->enableAutomatedSnapshotPolicy;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->attachedTime) {
            $res['AttachedTime'] = $this->attachedTime;
        }
        if (null !== $this->detachedTime) {
            $res['DetachedTime'] = $this->detachedTime;
        }
        if (null !== $this->diskChargeType) {
            $res['DiskChargeType'] = $this->diskChargeType;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->storageSetId) {
            $res['StorageSetId'] = $this->storageSetId;
        }
        if (null !== $this->storageSetPartitionNumber) {
            $res['StorageSetPartitionNumber'] = $this->storageSetPartitionNumber;
        }
        if (null !== $this->mountInstanceNum) {
            $res['MountInstanceNum'] = $this->mountInstanceNum;
        }
        if (null !== $this->IOPS) {
            $res['IOPS'] = $this->IOPS;
        }
        if (null !== $this->IOPSRead) {
            $res['IOPSRead'] = $this->IOPSRead;
        }
        if (null !== $this->IOPSWrite) {
            $res['IOPSWrite'] = $this->IOPSWrite;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->performanceLevel) {
            $res['PerformanceLevel'] = $this->performanceLevel;
        }
        if (null !== $this->bdfId) {
            $res['BdfId'] = $this->bdfId;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->mountInstances) {
            $res['MountInstances'] = null !== $this->mountInstances ? $this->mountInstances->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return disk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskId'])) {
            $model->diskId = $map['DiskId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DiskName'])) {
            $model->diskName = $map['DiskName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['SourceSnapshotId'])) {
            $model->sourceSnapshotId = $map['SourceSnapshotId'];
        }
        if (isset($map['AutoSnapshotPolicyId'])) {
            $model->autoSnapshotPolicyId = $map['AutoSnapshotPolicyId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Portable'])) {
            $model->portable = $map['Portable'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['DeleteWithInstance'])) {
            $model->deleteWithInstance = $map['DeleteWithInstance'];
        }
        if (isset($map['DeleteAutoSnapshot'])) {
            $model->deleteAutoSnapshot = $map['DeleteAutoSnapshot'];
        }
        if (isset($map['EnableAutoSnapshot'])) {
            $model->enableAutoSnapshot = $map['EnableAutoSnapshot'];
        }
        if (isset($map['EnableAutomatedSnapshotPolicy'])) {
            $model->enableAutomatedSnapshotPolicy = $map['EnableAutomatedSnapshotPolicy'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['AttachedTime'])) {
            $model->attachedTime = $map['AttachedTime'];
        }
        if (isset($map['DetachedTime'])) {
            $model->detachedTime = $map['DetachedTime'];
        }
        if (isset($map['DiskChargeType'])) {
            $model->diskChargeType = $map['DiskChargeType'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['StorageSetId'])) {
            $model->storageSetId = $map['StorageSetId'];
        }
        if (isset($map['StorageSetPartitionNumber'])) {
            $model->storageSetPartitionNumber = $map['StorageSetPartitionNumber'];
        }
        if (isset($map['MountInstanceNum'])) {
            $model->mountInstanceNum = $map['MountInstanceNum'];
        }
        if (isset($map['IOPS'])) {
            $model->IOPS = $map['IOPS'];
        }
        if (isset($map['IOPSRead'])) {
            $model->IOPSRead = $map['IOPSRead'];
        }
        if (isset($map['IOPSWrite'])) {
            $model->IOPSWrite = $map['IOPSWrite'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['PerformanceLevel'])) {
            $model->performanceLevel = $map['PerformanceLevel'];
        }
        if (isset($map['BdfId'])) {
            $model->bdfId = $map['BdfId'];
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['MountInstances'])) {
            $model->mountInstances = mountInstances::fromMap($map['MountInstances']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
