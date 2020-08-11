<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponse\ipv6Addresses;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIpv6AddressesResponse\ipv6Addresses\ipv6Address\ipv6InternetBandwidth;
use AlibabaCloud\Tea\Model;

class ipv6Address extends Model
{
    /**
     * @var string
     */
    public $ipv6AddressId;

    /**
     * @var string
     */
    public $ipv6AddressName;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $ipv6GatewayId;

    /**
     * @var string
     */
    public $ipv6Address;

    /**
     * @var string
     */
    public $associatedInstanceId;

    /**
     * @var string
     */
    public $associatedInstanceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var int
     */
    public $realBandwidth;

    /**
     * @var string
     */
    public $allocationTime;

    /**
     * @var ipv6InternetBandwidth
     */
    public $ipv6InternetBandwidth;
    protected $_name = [
        'ipv6AddressId'          => 'Ipv6AddressId',
        'ipv6AddressName'        => 'Ipv6AddressName',
        'vSwitchId'              => 'VSwitchId',
        'vpcId'                  => 'VpcId',
        'ipv6GatewayId'          => 'Ipv6GatewayId',
        'ipv6Address'            => 'Ipv6Address',
        'associatedInstanceId'   => 'AssociatedInstanceId',
        'associatedInstanceType' => 'AssociatedInstanceType',
        'status'                 => 'Status',
        'networkType'            => 'NetworkType',
        'realBandwidth'          => 'RealBandwidth',
        'allocationTime'         => 'AllocationTime',
        'ipv6InternetBandwidth'  => 'Ipv6InternetBandwidth',
    ];

    public function validate()
    {
        Model::validateRequired('ipv6AddressId', $this->ipv6AddressId, true);
        Model::validateRequired('ipv6AddressName', $this->ipv6AddressName, true);
        Model::validateRequired('vSwitchId', $this->vSwitchId, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('ipv6GatewayId', $this->ipv6GatewayId, true);
        Model::validateRequired('ipv6Address', $this->ipv6Address, true);
        Model::validateRequired('associatedInstanceId', $this->associatedInstanceId, true);
        Model::validateRequired('associatedInstanceType', $this->associatedInstanceType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('networkType', $this->networkType, true);
        Model::validateRequired('realBandwidth', $this->realBandwidth, true);
        Model::validateRequired('allocationTime', $this->allocationTime, true);
        Model::validateRequired('ipv6InternetBandwidth', $this->ipv6InternetBandwidth, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipv6AddressId) {
            $res['Ipv6AddressId'] = $this->ipv6AddressId;
        }
        if (null !== $this->ipv6AddressName) {
            $res['Ipv6AddressName'] = $this->ipv6AddressName;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->ipv6GatewayId) {
            $res['Ipv6GatewayId'] = $this->ipv6GatewayId;
        }
        if (null !== $this->ipv6Address) {
            $res['Ipv6Address'] = $this->ipv6Address;
        }
        if (null !== $this->associatedInstanceId) {
            $res['AssociatedInstanceId'] = $this->associatedInstanceId;
        }
        if (null !== $this->associatedInstanceType) {
            $res['AssociatedInstanceType'] = $this->associatedInstanceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->realBandwidth) {
            $res['RealBandwidth'] = $this->realBandwidth;
        }
        if (null !== $this->allocationTime) {
            $res['AllocationTime'] = $this->allocationTime;
        }
        if (null !== $this->ipv6InternetBandwidth) {
            $res['Ipv6InternetBandwidth'] = null !== $this->ipv6InternetBandwidth ? $this->ipv6InternetBandwidth->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipv6Address
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ipv6AddressId'])) {
            $model->ipv6AddressId = $map['Ipv6AddressId'];
        }
        if (isset($map['Ipv6AddressName'])) {
            $model->ipv6AddressName = $map['Ipv6AddressName'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Ipv6GatewayId'])) {
            $model->ipv6GatewayId = $map['Ipv6GatewayId'];
        }
        if (isset($map['Ipv6Address'])) {
            $model->ipv6Address = $map['Ipv6Address'];
        }
        if (isset($map['AssociatedInstanceId'])) {
            $model->associatedInstanceId = $map['AssociatedInstanceId'];
        }
        if (isset($map['AssociatedInstanceType'])) {
            $model->associatedInstanceType = $map['AssociatedInstanceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['RealBandwidth'])) {
            $model->realBandwidth = $map['RealBandwidth'];
        }
        if (isset($map['AllocationTime'])) {
            $model->allocationTime = $map['AllocationTime'];
        }
        if (isset($map['Ipv6InternetBandwidth'])) {
            $model->ipv6InternetBandwidth = ipv6InternetBandwidth::fromMap($map['Ipv6InternetBandwidth']);
        }

        return $model;
    }
}
