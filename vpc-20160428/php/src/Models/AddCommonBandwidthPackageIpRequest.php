<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AddCommonBandwidthPackageIpRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $ipInstanceId;

    /**
     * @var string
     */
    public $ipType;
    protected $_name = [
        'regionId'           => 'RegionId',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'ipInstanceId'       => 'IpInstanceId',
        'ipType'             => 'IpType',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('bandwidthPackageId', $this->bandwidthPackageId, true);
        Model::validateRequired('ipInstanceId', $this->ipInstanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->ipInstanceId) {
            $res['IpInstanceId'] = $this->ipInstanceId;
        }
        if (null !== $this->ipType) {
            $res['IpType'] = $this->ipType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCommonBandwidthPackageIpRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['IpInstanceId'])) {
            $model->ipInstanceId = $map['IpInstanceId'];
        }
        if (isset($map['IpType'])) {
            $model->ipType = $map['IpType'];
        }

        return $model;
    }
}
