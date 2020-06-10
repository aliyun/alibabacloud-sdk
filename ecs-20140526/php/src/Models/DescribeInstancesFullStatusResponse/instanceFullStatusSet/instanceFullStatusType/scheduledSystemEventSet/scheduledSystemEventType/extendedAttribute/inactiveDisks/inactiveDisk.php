<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponse\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\extendedAttribute\inactiveDisks;

use AlibabaCloud\Tea\Model;

class inactiveDisk extends Model
{
    /**
     * @description createTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description releaseTime
     *
     * @var string
     */
    public $releaseTime;

    /**
     * @description deviceType
     *
     * @var string
     */
    public $deviceType;

    /**
     * @description deviceCategory
     *
     * @var string
     */
    public $deviceCategory;

    /**
     * @description deviceSize
     *
     * @var string
     */
    public $deviceSize;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'releaseTime'    => 'ReleaseTime',
        'deviceType'     => 'DeviceType',
        'deviceCategory' => 'DeviceCategory',
        'deviceSize'     => 'DeviceSize',
    ];

    public function validate()
    {
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('releaseTime', $this->releaseTime, true);
        Model::validateRequired('deviceType', $this->deviceType, true);
        Model::validateRequired('deviceCategory', $this->deviceCategory, true);
        Model::validateRequired('deviceSize', $this->deviceSize, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->releaseTime) {
            $res['ReleaseTime'] = $this->releaseTime;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->deviceCategory) {
            $res['DeviceCategory'] = $this->deviceCategory;
        }
        if (null !== $this->deviceSize) {
            $res['DeviceSize'] = $this->deviceSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inactiveDisk
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ReleaseTime'])) {
            $model->releaseTime = $map['ReleaseTime'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['DeviceCategory'])) {
            $model->deviceCategory = $map['DeviceCategory'];
        }
        if (isset($map['DeviceSize'])) {
            $model->deviceSize = $map['DeviceSize'];
        }

        return $model;
    }
}
