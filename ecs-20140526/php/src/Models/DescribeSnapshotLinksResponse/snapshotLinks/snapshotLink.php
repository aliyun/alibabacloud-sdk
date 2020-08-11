<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSnapshotLinksResponse\snapshotLinks;

use AlibabaCloud\Tea\Model;

class snapshotLink extends Model
{
    /**
     * @var string
     */
    public $snapshotLinkId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $sourceDiskId;

    /**
     * @var string
     */
    public $sourceDiskName;

    /**
     * @var int
     */
    public $sourceDiskSize;

    /**
     * @var string
     */
    public $sourceDiskType;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'snapshotLinkId' => 'SnapshotLinkId',
        'regionId'       => 'RegionId',
        'instanceId'     => 'InstanceId',
        'instanceName'   => 'InstanceName',
        'sourceDiskId'   => 'SourceDiskId',
        'sourceDiskName' => 'SourceDiskName',
        'sourceDiskSize' => 'SourceDiskSize',
        'sourceDiskType' => 'SourceDiskType',
        'category'       => 'Category',
        'totalSize'      => 'TotalSize',
        'totalCount'     => 'TotalCount',
    ];

    public function validate()
    {
        Model::validateRequired('snapshotLinkId', $this->snapshotLinkId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('sourceDiskId', $this->sourceDiskId, true);
        Model::validateRequired('sourceDiskName', $this->sourceDiskName, true);
        Model::validateRequired('sourceDiskSize', $this->sourceDiskSize, true);
        Model::validateRequired('sourceDiskType', $this->sourceDiskType, true);
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('totalSize', $this->totalSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotLinkId) {
            $res['SnapshotLinkId'] = $this->snapshotLinkId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->sourceDiskId) {
            $res['SourceDiskId'] = $this->sourceDiskId;
        }
        if (null !== $this->sourceDiskName) {
            $res['SourceDiskName'] = $this->sourceDiskName;
        }
        if (null !== $this->sourceDiskSize) {
            $res['SourceDiskSize'] = $this->sourceDiskSize;
        }
        if (null !== $this->sourceDiskType) {
            $res['SourceDiskType'] = $this->sourceDiskType;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotLink
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotLinkId'])) {
            $model->snapshotLinkId = $map['SnapshotLinkId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['SourceDiskId'])) {
            $model->sourceDiskId = $map['SourceDiskId'];
        }
        if (isset($map['SourceDiskName'])) {
            $model->sourceDiskName = $map['SourceDiskName'];
        }
        if (isset($map['SourceDiskSize'])) {
            $model->sourceDiskSize = $map['SourceDiskSize'];
        }
        if (isset($map['SourceDiskType'])) {
            $model->sourceDiskType = $map['SourceDiskType'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
