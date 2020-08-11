<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponse\ipv6Addresses\ipv6Address;

use AlibabaCloud\Tea\Model;

class ipv6InternetBandwidth extends Model
{
    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $ipv6InternetBandwidthId;
    protected $_name = [
        'bandwidth'               => 'Bandwidth',
        'instanceChargeType'      => 'InstanceChargeType',
        'internetChargeType'      => 'InternetChargeType',
        'businessStatus'          => 'BusinessStatus',
        'ipv6InternetBandwidthId' => 'Ipv6InternetBandwidthId',
    ];

    public function validate()
    {
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('instanceChargeType', $this->instanceChargeType, true);
        Model::validateRequired('internetChargeType', $this->internetChargeType, true);
        Model::validateRequired('businessStatus', $this->businessStatus, true);
        Model::validateRequired('ipv6InternetBandwidthId', $this->ipv6InternetBandwidthId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->ipv6InternetBandwidthId) {
            $res['Ipv6InternetBandwidthId'] = $this->ipv6InternetBandwidthId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6InternetBandwidth
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['Ipv6InternetBandwidthId'])) {
            $model->ipv6InternetBandwidthId = $map['Ipv6InternetBandwidthId'];
        }

        return $model;
    }
}
