<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnRouteEntriesResponse\vpnRouteEntries;

use AlibabaCloud\Tea\Model;

class vpnRouteEntry extends Model
{
    /**
     * @var string
     */
    public $vpnInstanceId;

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

    /**
     * @var string
     */
    public $asPath;

    /**
     * @var string
     */
    public $community;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $routeEntryType;
    protected $_name = [
        'vpnInstanceId'  => 'VpnInstanceId',
        'routeDest'      => 'RouteDest',
        'nextHop'        => 'NextHop',
        'weight'         => 'Weight',
        'createTime'     => 'CreateTime',
        'state'          => 'State',
        'asPath'         => 'AsPath',
        'community'      => 'Community',
        'source'         => 'Source',
        'routeEntryType' => 'RouteEntryType',
    ];

    public function validate()
    {
        Model::validateRequired('vpnInstanceId', $this->vpnInstanceId, true);
        Model::validateRequired('routeDest', $this->routeDest, true);
        Model::validateRequired('nextHop', $this->nextHop, true);
        Model::validateRequired('weight', $this->weight, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('state', $this->state, true);
        Model::validateRequired('asPath', $this->asPath, true);
        Model::validateRequired('community', $this->community, true);
        Model::validateRequired('source', $this->source, true);
        Model::validateRequired('routeEntryType', $this->routeEntryType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpnInstanceId) {
            $res['VpnInstanceId'] = $this->vpnInstanceId;
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
        if (null !== $this->asPath) {
            $res['AsPath'] = $this->asPath;
        }
        if (null !== $this->community) {
            $res['Community'] = $this->community;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->routeEntryType) {
            $res['RouteEntryType'] = $this->routeEntryType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnRouteEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpnInstanceId'])) {
            $model->vpnInstanceId = $map['VpnInstanceId'];
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
        if (isset($map['AsPath'])) {
            $model->asPath = $map['AsPath'];
        }
        if (isset($map['Community'])) {
            $model->community = $map['Community'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['RouteEntryType'])) {
            $model->routeEntryType = $map['RouteEntryType'];
        }

        return $model;
    }
}
