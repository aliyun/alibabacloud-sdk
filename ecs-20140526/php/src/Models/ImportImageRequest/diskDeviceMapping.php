<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ImportImageRequest;

use AlibabaCloud\Tea\Model;

class diskDeviceMapping extends Model
{
    /**
     * @description format
     *
     * @var string
     */
    public $format;

    /**
     * @description oSSBucket
     *
     * @var string
     */
    public $OSSBucket;

    /**
     * @description oSSObject
     *
     * @var string
     */
    public $OSSObject;

    /**
     * @description diskImSize
     *
     * @var int
     */
    public $diskImSize;

    /**
     * @description diskImageSize
     *
     * @var int
     */
    public $diskImageSize;

    /**
     * @description device
     *
     * @var string
     */
    public $device;
    protected $_name = [
        'format'        => 'Format',
        'OSSBucket'     => 'OSSBucket',
        'OSSObject'     => 'OSSObject',
        'diskImSize'    => 'DiskImSize',
        'diskImageSize' => 'DiskImageSize',
        'device'        => 'Device',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->OSSBucket) {
            $res['OSSBucket'] = $this->OSSBucket;
        }
        if (null !== $this->OSSObject) {
            $res['OSSObject'] = $this->OSSObject;
        }
        if (null !== $this->diskImSize) {
            $res['DiskImSize'] = $this->diskImSize;
        }
        if (null !== $this->diskImageSize) {
            $res['DiskImageSize'] = $this->diskImageSize;
        }
        if (null !== $this->device) {
            $res['Device'] = $this->device;
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
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['OSSBucket'])) {
            $model->OSSBucket = $map['OSSBucket'];
        }
        if (isset($map['OSSObject'])) {
            $model->OSSObject = $map['OSSObject'];
        }
        if (isset($map['DiskImSize'])) {
            $model->diskImSize = $map['DiskImSize'];
        }
        if (isset($map['DiskImageSize'])) {
            $model->diskImageSize = $map['DiskImageSize'];
        }
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }

        return $model;
    }
}
