<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class ExportSnapshotRequest extends Model
{
    /**
     * @var string
     */
    public $snapshotId;

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
    public $roleName;
    protected $_name = [
        'snapshotId' => 'SnapshotId',
        'regionId'   => 'RegionId',
        'ossBucket'  => 'OssBucket',
        'roleName'   => 'RoleName',
    ];

    public function validate()
    {
        Model::validateRequired('snapshotId', $this->snapshotId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('ossBucket', $this->ossBucket, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
