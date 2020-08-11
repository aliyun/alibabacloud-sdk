<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponse\images\image\diskDeviceMappings;

use AlibabaCloud\Tea\Model;

class diskDeviceMapping extends Model
{
    /**
     * @var string
     */
    public $snapshotId;

    /**
     * @var string
     */
    public $size;

    /**
     * @var string
     */
    public $device;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $format;

    /**
     * @var string
     */
    public $importOSSBucket;

    /**
     * @var string
     */
    public $importOSSObject;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var int
     */
    public $remainTime;
    protected $_name = [
        'snapshotId'      => 'SnapshotId',
        'size'            => 'Size',
        'device'          => 'Device',
        'type'            => 'Type',
        'format'          => 'Format',
        'importOSSBucket' => 'ImportOSSBucket',
        'importOSSObject' => 'ImportOSSObject',
        'progress'        => 'Progress',
        'remainTime'      => 'RemainTime',
    ];

    public function validate()
    {
        Model::validateRequired('snapshotId', $this->snapshotId, true);
        Model::validateRequired('size', $this->size, true);
        Model::validateRequired('device', $this->device, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('format', $this->format, true);
        Model::validateRequired('importOSSBucket', $this->importOSSBucket, true);
        Model::validateRequired('importOSSObject', $this->importOSSObject, true);
        Model::validateRequired('progress', $this->progress, true);
        Model::validateRequired('remainTime', $this->remainTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snapshotId) {
            $res['SnapshotId'] = $this->snapshotId;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->importOSSBucket) {
            $res['ImportOSSBucket'] = $this->importOSSBucket;
        }
        if (null !== $this->importOSSObject) {
            $res['ImportOSSObject'] = $this->importOSSObject;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->remainTime) {
            $res['RemainTime'] = $this->remainTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskDeviceMapping
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnapshotId'])) {
            $model->snapshotId = $map['SnapshotId'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['ImportOSSBucket'])) {
            $model->importOSSBucket = $map['ImportOSSBucket'];
        }
        if (isset($map['ImportOSSObject'])) {
            $model->importOSSObject = $map['ImportOSSObject'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['RemainTime'])) {
            $model->remainTime = $map['RemainTime'];
        }

        return $model;
    }
}
