<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponse\haVips;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponse\haVips\haVip\associatedEipAddresses;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHaVipsResponse\haVips\haVip\associatedInstances;
use AlibabaCloud\Tea\Model;

class haVip extends Model
{
    /**
     * @description haVipId
     *
     * @var string
     */
    public $haVipId;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description vpcId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description vSwitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description ipAddress
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description masterInstanceId
     *
     * @var string
     */
    public $masterInstanceId;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description associatedInstances
     *
     * @var associatedInstances
     */
    public $associatedInstances;

    /**
     * @description associatedEipAddresses
     *
     * @var associatedEipAddresses
     */
    public $associatedEipAddresses;
    protected $_name = [
        'haVipId'                => 'HaVipId',
        'regionId'               => 'RegionId',
        'vpcId'                  => 'VpcId',
        'VSwitchId'              => 'VSwitchId',
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
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
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
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
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
            $model->VSwitchId = $map['VSwitchId'];
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
