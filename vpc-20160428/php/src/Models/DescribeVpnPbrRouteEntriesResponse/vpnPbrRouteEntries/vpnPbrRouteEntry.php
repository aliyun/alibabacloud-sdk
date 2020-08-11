<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnPbrRouteEntriesResponse\vpnPbrRouteEntries;

use AlibabaCloud\Tea\Model;

class vpnPbrRouteEntry extends Model
{
    /**
     * @var string
     */
    public $vpnInstanceId;

    /**
     * @var string
     */
    public $routeSource;

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
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'vpnInstanceId' => 'VpnInstanceId',
        'routeSource'   => 'RouteSource',
        'routeDest'     => 'RouteDest',
        'nextHop'       => 'NextHop',
        'weight'        => 'Weight',
        'createTime'    => 'CreateTime',
        'state'         => 'State',
    ];

    public function validate()
    {
        Model::validateRequired('vpnInstanceId', $this->vpnInstanceId, true);
        Model::validateRequired('routeSource', $this->routeSource, true);
        Model::validateRequired('routeDest', $this->routeDest, true);
        Model::validateRequired('nextHop', $this->nextHop, true);
        Model::validateRequired('weight', $this->weight, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('state', $this->state, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpnInstanceId) {
            $res['VpnInstanceId'] = $this->vpnInstanceId;
        }
        if (null !== $this->routeSource) {
            $res['RouteSource'] = $this->routeSource;
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnPbrRouteEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpnInstanceId'])) {
            $model->vpnInstanceId = $map['VpnInstanceId'];
        }
        if (isset($map['RouteSource'])) {
            $model->routeSource = $map['RouteSource'];
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
