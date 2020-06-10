<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsResponse\snapshots;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsResponse\snapshots\snapshot\tags;
use AlibabaCloud\Tea\Model;

class snapshot extends Model
{
    /**
     * @description resourceId
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description model.snapshotHouyiNo
     *
     * @var string
     */
    public $snapshotSN;

    /**
     * @description model.snapshotNickname
     *
     * @var string
     */
    public $snapshotName;

    /**
     * @description model.snapshotProcess
     *
     * @var string
     */
    public $progress;

    /**
     * @description model.imgPc
     *
     * @var string
     */
    public $productCode;

    /**
     * @description model.diskId
     *
     * @var string
     */
    public $sourceDiskId;

    /**
     * @description model.diskType
     *
     * @var string
     */
    public $sourceDiskType;

    /**
     * @description model.retentionDays
     *
     * @var int
     */
    public $retentionDays;

    /**
     * @description model.encrypted
     *
     * @var bool
     */
    public $encrypted;

    /**
     * @description model.snapshotSize
     *
     * @var string
     */
    public $sourceDiskSize;

    /**
     * @description model.description
     *
     * @var string
     */
    public $description;

    /**
     * @description gmtCreateTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description gmtModifyTime
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description usage
     *
     * @var string
     */
    public $usage;

    /**
     * @description model.srcStorageType
     *
     * @var string
     */
    public $sourceStorageType;

    /**
     * @description model.remainTime
     *
     * @var int
     */
    public $remainTime;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description kmsKeyId
     *
     * @var string
     */
    public $KMSKeyId;

    /**
     * @description model.category
     *
     * @var string
     */
    public $category;

    /**
     * @description model.snapshotType
     *
     * @var string
     */
    public $snapshotType;

    /**
     * @description model.tags
     *
     * @var tags
     */
    public $tags;
    protected $_name = [
        'snapshotId'        => 'SnapshotId',
        'snapshotSN'        => 'SnapshotSN',
        'snapshotName'      => 'SnapshotName',
        'progress'          => 'Progress',
        'productCode'       => 'ProductCode',
        'sourceDiskId'      => 'SourceDiskId',
        'sourceDiskType'    => 'SourceDiskType',
        'retentionDays'     => 'RetentionDays',
        'encrypted'         => 'Encrypted',
        'sourceDiskSize'    => 'SourceDiskSize',
        'description'       => 'Description',
        'creationTime'      => 'CreationTime',
        'lastModifiedTime'  => 'LastModifiedTime',
        'status'            => 'Status',
        'usage'             => 'Usage',
        'sourceStorageType' => 'SourceStorageType',
        'remainTime'        => 'RemainTime',
        'resourceGroupId'   => 'ResourceGroupId',
        'KMSKeyId'          => 'KMSKeyId',
        'category'          => 'Category',
        'snapshotType'      => 'SnapshotType',
        'tags'              => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('snapshotId', $this->snapshotId, true);
        Model::validateRequired('snapshotSN', $this->snapshotSN, true);
        Model::validateRequired('snapshotName', $this->snapshotName, true);
        Model::validateRequired('progress', $this->progress, true);
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('sourceDiskId', $this->sourceDiskId, true);
        Model::validateRequired('sourceDiskType', $this->sourceDiskType, true);
        Model::validateRequired('retentionDays', $this->retentionDays, true);
        Model::validateRequired('encrypted', $this->encrypted, true);
        Model::validateRequired('sourceDiskSize', $this->sourceDiskSize, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('lastModifiedTime', $this->lastModifiedTime, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('usage', $this->usage, true);
        Model::validateRequired('sourceStorageType', $this->sourceStorageType, true);
        Model::validateRequired('remainTime', $this->remainTime, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('KMSKeyId', $this->KMSKeyId, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('snapshotType', $this->snapshotType, true);
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->snapshotSN) {
            $res['SnapshotSN'] = $this->snapshotSN;
        }
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
        }
        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }
        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
        }
        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }
        if (null !== $this->sourceDiskSize) {
            $res['SourceDiskSize'] = $this->sourceDiskSize;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->sourceStorageType) {
            $res['SourceStorageType'] = $this->sourceStorageType;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->KMSKeyId) {
            $res['KMSKeyId'] = $this->KMSKeyId;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->snapshotType) {
            $res['SnapshotType'] = $this->snapshotType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['SnapshotSN'])) {
            $model->snapshotSN = $map['SnapshotSN'];
        }
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
        }
        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }
        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }
        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }
        if (isset($map['SourceDiskSize'])) {
            $model->sourceDiskSize = $map['SourceDiskSize'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['SourceStorageType'])) {
            $model->sourceStorageType = $map['SourceStorageType'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['KMSKeyId'])) {
            $model->KMSKeyId = $map['KMSKeyId'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['SnapshotType'])) {
            $model->snapshotType = $map['SnapshotType'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        return $model;
    }
}
