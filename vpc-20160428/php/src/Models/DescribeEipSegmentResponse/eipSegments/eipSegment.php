<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipSegmentResponse\eipSegments;

use AlibabaCloud\Tea\Model;

class eipSegment extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $segment;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ipCount;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $descritpion;

    /**
     * @var string
     */
    public $creationTime;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'segment'      => 'Segment',
        'status'       => 'Status',
        'regionId'     => 'RegionId',
        'ipCount'      => 'IpCount',
        'name'         => 'Name',
        'descritpion'  => 'Descritpion',
        'creationTime' => 'CreationTime',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('segment', $this->segment, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('ipCount', $this->ipCount, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('descritpion', $this->descritpion, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->segment) {
            $res['Segment'] = $this->segment;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->descritpion) {
            $res['Descritpion'] = $this->descritpion;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipSegment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Segment'])) {
            $model->segment = $map['Segment'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Descritpion'])) {
            $model->descritpion = $map['Descritpion'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        return $model;
    }
}
