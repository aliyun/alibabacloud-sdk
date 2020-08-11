<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ImportSnapshotRequest extends Model
{
    /**
     * @var string
     */
    public $snapshotName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossObject;

    /**
     * @var string
     */
    public $roleName;
    protected $_name = [
        'snapshotName' => 'SnapshotName',
        'regionId'     => 'RegionId',
        'ossBucket'    => 'OssBucket',
        'ossObject'    => 'OssObject',
        'roleName'     => 'RoleName',
    ];

    public function validate()
    {
        Model::validateRequired('snapshotName', $this->snapshotName, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('ossBucket', $this->ossBucket, true);
        Model::validateRequired('ossObject', $this->ossObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotName) {
            $res['SnapshotName'] = $this->snapshotName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossObject) {
            $res['OssObject'] = $this->ossObject;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotName'])) {
            $model->snapshotName = $map['SnapshotName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssObject'])) {
            $model->ossObject = $map['OssObject'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
