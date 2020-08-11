<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpPeersResponse\bgpPeers;

use AlibabaCloud\Tea\Model;

class bgpPeer extends Model
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
    public $bgpPeerId;

    /**
     * @var string
     */
    public $bgpGroupId;

    /**
     * @var string
     */
    public $peerIpAddress;

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
    public $bgpStatus;

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
     * @var bool
     */
    public $enableBfd;

    /**
     * @var string
     */
    public $ipVersion;

    /**
     * @var int
     */
    public $bfdMultiHop;
    protected $_name = [
        'name'          => 'Name',
        'description'   => 'Description',
        'bgpPeerId'     => 'BgpPeerId',
        'bgpGroupId'    => 'BgpGroupId',
        'peerIpAddress' => 'PeerIpAddress',
        'peerAsn'       => 'PeerAsn',
        'authKey'       => 'AuthKey',
        'routerId'      => 'RouterId',
        'bgpStatus'     => 'BgpStatus',
        'status'        => 'Status',
        'keepalive'     => 'Keepalive',
        'localAsn'      => 'LocalAsn',
        'hold'          => 'Hold',
        'isFake'        => 'IsFake',
        'routeLimit'    => 'RouteLimit',
        'regionId'      => 'RegionId',
        'enableBfd'     => 'EnableBfd',
        'ipVersion'     => 'IpVersion',
        'bfdMultiHop'   => 'BfdMultiHop',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('bgpPeerId', $this->bgpPeerId, true);
        Model::validateRequired('bgpGroupId', $this->bgpGroupId, true);
        Model::validateRequired('peerIpAddress', $this->peerIpAddress, true);
        Model::validateRequired('peerAsn', $this->peerAsn, true);
        Model::validateRequired('authKey', $this->authKey, true);
        Model::validateRequired('routerId', $this->routerId, true);
        Model::validateRequired('bgpStatus', $this->bgpStatus, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('keepalive', $this->keepalive, true);
        Model::validateRequired('localAsn', $this->localAsn, true);
        Model::validateRequired('hold', $this->hold, true);
        Model::validateRequired('isFake', $this->isFake, true);
        Model::validateRequired('routeLimit', $this->routeLimit, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('enableBfd', $this->enableBfd, true);
        Model::validateRequired('ipVersion', $this->ipVersion, true);
        Model::validateRequired('bfdMultiHop', $this->bfdMultiHop, true);
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
        if (null !== $this->bgpPeerId) {
            $res['BgpPeerId'] = $this->bgpPeerId;
        }
        if (null !== $this->bgpGroupId) {
            $res['BgpGroupId'] = $this->bgpGroupId;
        }
        if (null !== $this->peerIpAddress) {
            $res['PeerIpAddress'] = $this->peerIpAddress;
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
        if (null !== $this->bgpStatus) {
            $res['BgpStatus'] = $this->bgpStatus;
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
        if (null !== $this->enableBfd) {
            $res['EnableBfd'] = $this->enableBfd;
        }
        if (null !== $this->ipVersion) {
            $res['IpVersion'] = $this->ipVersion;
        }
        if (null !== $this->bfdMultiHop) {
            $res['BfdMultiHop'] = $this->bfdMultiHop;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bgpPeer
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
        if (isset($map['BgpPeerId'])) {
            $model->bgpPeerId = $map['BgpPeerId'];
        }
        if (isset($map['BgpGroupId'])) {
            $model->bgpGroupId = $map['BgpGroupId'];
        }
        if (isset($map['PeerIpAddress'])) {
            $model->peerIpAddress = $map['PeerIpAddress'];
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
        if (isset($map['BgpStatus'])) {
            $model->bgpStatus = $map['BgpStatus'];
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
        if (isset($map['EnableBfd'])) {
            $model->enableBfd = $map['EnableBfd'];
        }
        if (isset($map['IpVersion'])) {
            $model->ipVersion = $map['IpVersion'];
        }
        if (isset($map['BfdMultiHop'])) {
            $model->bfdMultiHop = $map['BfdMultiHop'];
        }

        return $model;
    }
}
