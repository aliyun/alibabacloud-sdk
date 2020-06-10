<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageFromFamilyResponse\image\diskDeviceMappings;

use AlibabaCloud\Tea\Model;

class diskDeviceMapping extends Model
{
    /**
     * @description snapshotId
     *
     * @var string
     */
    public $snapshotId;

    /**
     * @description size
     *
     * @var string
     */
    public $size;

    /**
     * @description device
     *
     * @var string
     */
    public $device;

    /**
     * @description diskType
     *
     * @var string
     */
    public $type;

    /**
     * @description format
     *
     * @var string
     */
    public $format;

    /**
     * @description importOSSBucket
     *
     * @var string
     */
    public $importOSSBucket;

    /**
     * @description importOSSObject
     *
     * @var string
     */
    public $importOSSObject;
    protected $_name = [
        'snapshotId'      => 'SnapshotId',
        'size'            => 'Size',
        'device'          => 'Device',
        'type'            => 'Type',
        'format'          => 'Format',
        'importOSSBucket' => 'ImportOSSBucket',
        'importOSSObject' => 'ImportOSSObject',
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

        return $model;
    }
}
