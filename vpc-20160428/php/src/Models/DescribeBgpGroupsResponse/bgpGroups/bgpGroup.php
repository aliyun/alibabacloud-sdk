<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpGroupsResponse\bgpGroups;

use AlibabaCloud\Tea\Model;

class bgpGroup extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $bgpGroupId;

    /**
     * @var string
     */
    public $peerAsn;

    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $routerId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $keepalive;

    /**
     * @var string
     */
    public $localAsn;

    /**
     * @var string
     */
    public $hold;

    /**
     * @var string
     */
    public $isFake;

    /**
     * @var string
     */
    public $routeLimit;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ipVersion;
    protected $_name = [
        'name'        => 'Name',
        'description' => 'Description',
        'bgpGroupId'  => 'BgpGroupId',
        'peerAsn'     => 'PeerAsn',
        'authKey'     => 'AuthKey',
        'routerId'    => 'RouterId',
        'status'      => 'Status',
        'keepalive'   => 'Keepalive',
        'localAsn'    => 'LocalAsn',
        'hold'        => 'Hold',
        'isFake'      => 'IsFake',
        'routeLimit'  => 'RouteLimit',
        'regionId'    => 'RegionId',
        'ipVersion'   => 'IpVersion',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('bgpGroupId', $this->bgpGroupId, true);
        Model::validateRequired('peerAsn', $this->peerAsn, true);
        Model::validateRequired('authKey', $this->authKey, true);
        Model::validateRequired('routerId', $this->routerId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('keepalive', $this->keepalive, true);
        Model::validateRequired('localAsn', $this->localAsn, true);
        Model::validateRequired('hold', $this->hold, true);
        Model::validateRequired('isFake', $this->isFake, true);
        Model::validateRequired('routeLimit', $this->routeLimit, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('ipVersion', $this->ipVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->bgpGroupId) {
            $res['BgpGroupId'] = $this->bgpGroupId;
        }
        if (null !== $this->peerAsn) {
            $res['PeerAsn'] = $this->peerAsn;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->routerId) {
            $res['RouterId'] = $this->routerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->keepalive) {
            $res['Keepalive'] = $this->keepalive;
        }
        if (null !== $this->localAsn) {
            $res['LocalAsn'] = $this->localAsn;
        }
        if (null !== $this->hold) {
            $res['Hold'] = $this->hold;
        }
        if (null !== $this->isFake) {
            $res['IsFake'] = $this->isFake;
        }
        if (null !== $this->routeLimit) {
            $res['RouteLimit'] = $this->routeLimit;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bgpGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['BgpGroupId'])) {
            $model->bgpGroupId = $map['BgpGroupId'];
        }
        if (isset($map['PeerAsn'])) {
            $model->peerAsn = $map['PeerAsn'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['RouterId'])) {
            $model->routerId = $map['RouterId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Keepalive'])) {
            $model->keepalive = $map['Keepalive'];
        }
        if (isset($map['LocalAsn'])) {
            $model->localAsn = $map['LocalAsn'];
        }
        if (isset($map['Hold'])) {
            $model->hold = $map['Hold'];
        }
        if (isset($map['IsFake'])) {
            $model->isFake = $map['IsFake'];
        }
        if (isset($map['RouteLimit'])) {
            $model->routeLimit = $map['RouteLimit'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }

        return $model;
    }
}
