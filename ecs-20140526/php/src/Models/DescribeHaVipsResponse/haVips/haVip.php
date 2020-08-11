<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponse\haVips;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponse\haVips\haVip\associatedEipAddresses;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponse\haVips\haVip\associatedInstances;
use AlibabaCloud\Tea\Model;

class haVip extends Model
{
    /**
     * @var string
     */
    public $haVipId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $masterInstanceId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var associatedInstances
     */
    public $associatedInstances;

    /**
     * @var associatedEipAddresses
     */
    public $associatedEipAddresses;
    protected $_name = [
        'haVipId'                => 'HaVipId',
        'regionId'               => 'RegionId',
        'vpcId'                  => 'VpcId',
        'vSwitchId'              => 'VSwitchId',
        'ipAddress'              => 'IpAddress',
        'status'                 => 'Status',
        'masterInstanceId'       => 'MasterInstanceId',
        'description'            => 'Description',
        'createTime'             => 'CreateTime',
        'associatedInstances'    => 'AssociatedInstances',
        'associatedEipAddresses' => 'AssociatedEipAddresses',
    ];

    public function validate()
    {
        Model::validateRequired('haVipId', $this->haVipId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('vSwitchId', $this->vSwitchId, true);
        Model::validateRequired('ipAddress', $this->ipAddress, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('masterInstanceId', $this->masterInstanceId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('associatedInstances', $this->associatedInstances, true);
        Model::validateRequired('associatedEipAddresses', $this->associatedEipAddresses, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->haVipId) {
            $res['HaVipId'] = $this->haVipId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->masterInstanceId) {
            $res['MasterInstanceId'] = $this->masterInstanceId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->associatedInstances) {
            $res['AssociatedInstances'] = null !== $this->associatedInstances ? $this->associatedInstances->toMap() : null;
        }
        if (null !== $this->associatedEipAddresses) {
            $res['AssociatedEipAddresses'] = null !== $this->associatedEipAddresses ? $this->associatedEipAddresses->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return haVip
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HaVipId'])) {
            $model->haVipId = $map['HaVipId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['MasterInstanceId'])) {
            $model->masterInstanceId = $map['MasterInstanceId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['AssociatedInstances'])) {
            $model->associatedInstances = associatedInstances::fromMap($map['AssociatedInstances']);
        }
        if (isset($map['AssociatedEipAddresses'])) {
            $model->associatedEipAddresses = associatedEipAddresses::fromMap($map['AssociatedEipAddresses']);
        }

        return $model;
    }
}
