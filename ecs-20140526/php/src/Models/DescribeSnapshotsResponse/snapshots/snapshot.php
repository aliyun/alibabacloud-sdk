<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsResponse\snapshots;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotsResponse\snapshots\snapshot\tags;
use AlibabaCloud\Tea\Model;

class snapshot extends Model
{
    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $snapshotSN;

    /**
     * @var string
     */
    public $snapshotName;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $sourceDiskId;

    /**
     * @var string
     */
    public $sourceDiskType;

    /**
     * @var int
     */
    public $retentionDays;

    /**
     * @var bool
     */
    public $encrypted;

    /**
     * @var string
     */
    public $sourceDiskSize;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var string
     */
    public $sourceStorageType;

    /**
     * @var int
     */
    public $remainTime;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $KMSKeyId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $snapshotType;

    /**
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
