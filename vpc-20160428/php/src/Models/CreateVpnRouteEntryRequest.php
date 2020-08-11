<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateVpnRouteEntryRequest extends Model
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
     * @var int
     */
    public $weight;

    /**
     * @var bool
     */
    public $publishVpc;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $overlayMode;
    protected $_name = [
        'regionId'     => 'RegionId',
        'clientToken'  => 'ClientToken',
        'vpnGatewayId' => 'VpnGatewayId',
        'routeDest'    => 'RouteDest',
        'nextHop'      => 'NextHop',
        'weight'       => 'Weight',
        'publishVpc'   => 'PublishVpc',
        'description'  => 'Description',
        'overlayMode'  => 'OverlayMode',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('vpnGatewayId', $this->vpnGatewayId, true);
        Model::validateRequired('routeDest', $this->routeDest, true);
        Model::validateRequired('nextHop', $this->nextHop, true);
        Model::validateRequired('weight', $this->weight, true);
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
        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }
        if (null !== $this->publishVpc) {
            $res['PublishVpc'] = $this->publishVpc;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->overlayMode) {
            $res['OverlayMode'] = $this->overlayMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpnRouteEntryRequest
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
        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }
        if (isset($map['PublishVpc'])) {
            $model->publishVpc = $map['PublishVpc'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OverlayMode'])) {
            $model->overlayMode = $map['OverlayMode'];
        }

        return $model;
    }
}
