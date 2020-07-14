<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerLogRequest extends Model
{
    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description containerGroupId
     *
     * @var string
     */
    public $containerGroupId;

    /**
     * @description containerName
     *
     * @var string
     */
    public $containerName;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description tail
     *
     * @var int
     */
    public $tail;

    /**
     * @description previous
     *
     * @var bool
     */
    public $lastTime;

    /**
     * @description sinceSeconds
     *
     * @var int
     */
    public $sinceSeconds;

    /**
     * @description limitBytes
     *
     * @var int
     */
    public $limitBytes;
    protected $_name = [
        'regionId'         => 'RegionId',
        'containerGroupId' => 'ContainerGroupId',
        'containerName'    => 'ContainerName',
        'startTime'        => 'StartTime',
        'tail'             => 'Tail',
        'lastTime'         => 'LastTime',
        'sinceSeconds'     => 'SinceSeconds',
        'limitBytes'       => 'LimitBytes',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('containerGroupId', $this->containerGroupId, true);
        Model::validateRequired('containerName', $this->containerName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->containerGroupId) {
            $res['ContainerGroupId'] = $this->containerGroupId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tail) {
            $res['Tail'] = $this->tail;
        }
        if (null !== $this->lastTime) {
            $res['LastTime'] = $this->lastTime;
        }
        if (null !== $this->sinceSeconds) {
            $res['SinceSeconds'] = $this->sinceSeconds;
        }
        if (null !== $this->limitBytes) {
            $res['LimitBytes'] = $this->limitBytes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ContainerGroupId'])) {
            $model->containerGroupId = $map['ContainerGroupId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tail'])) {
            $model->tail = $map['Tail'];
        }
        if (isset($map['LastTime'])) {
            $model->lastTime = $map['LastTime'];
        }
        if (isset($map['SinceSeconds'])) {
            $model->sinceSeconds = $map['SinceSeconds'];
        }
        if (isset($map['LimitBytes'])) {
            $model->limitBytes = $map['LimitBytes'];
        }

        return $model;
    }
}
