<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class PublishVpnRouteEntryRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $vpnGatewayId;

    /**
     * @var string
     */
    public $routeDest;

    /**
     * @var string
     */
    public $nextHop;

    /**
     * @var string
     */
    public $routeType;

    /**
     * @var bool
     */
    public $publishVpc;
    protected $_name = [
        'regionId'     => 'RegionId',
        'clientToken'  => 'ClientToken',
        'vpnGatewayId' => 'VpnGatewayId',
        'routeDest'    => 'RouteDest',
        'nextHop'      => 'NextHop',
        'routeType'    => 'RouteType',
        'publishVpc'   => 'PublishVpc',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('vpnGatewayId', $this->vpnGatewayId, true);
        Model::validateRequired('routeDest', $this->routeDest, true);
        Model::validateRequired('nextHop', $this->nextHop, true);
        Model::validateRequired('routeType', $this->routeType, true);
        Model::validateRequired('publishVpc', $this->publishVpc, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }
        if (null !== $this->routeDest) {
            $res['RouteDest'] = $this->routeDest;
        }
        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
        }
        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
        }
        if (null !== $this->publishVpc) {
            $res['PublishVpc'] = $this->publishVpc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishVpnRouteEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }
        if (isset($map['RouteDest'])) {
            $model->routeDest = $map['RouteDest'];
        }
        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }
        if (isset($map['RouteType'])) {
            $model->routeType = $map['RouteType'];
        }
        if (isset($map['PublishVpc'])) {
            $model->publishVpc = $map['PublishVpc'];
        }

        return $model;
    }
}
