<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListDevicesResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @description accessProtocolType
     *
     * @var string
     */
    public $accessProtocolType;

    /**
     * @description bitRate
     *
     * @var string
     */
    public $bitRate;

    /**
     * @description CoverImgUrl
     *
     * @var string
     */
    public $coverImageUrl;

    /**
     * @description gbId
     *
     * @var string
     */
    public $gbId;

    /**
     * @description installAddress
     *
     * @var string
     */
    public $deviceAddress;

    /**
     * @description installDirection
     *
     * @var string
     */
    public $deviceDirection;

    /**
     * @description installSite
     *
     * @var string
     */
    public $deviceSite;

    /**
     * @description latitude
     *
     * @var string
     */
    public $latitude;

    /**
     * @description longitude
     *
     * @var string
     */
    public $longitude;

    /**
     * @description name
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description resolution
     *
     * @var string
     */
    public $resolution;

    /**
     * @description sipGbId
     *
     * @var string
     */
    public $sipGBId;

    /**
     * @description sipPassword
     *
     * @var string
     */
    public $sipPassword;

    /**
     * @description sipServerIp
     *
     * @var string
     */
    public $sipServerIp;

    /**
     * @description sipServerPort
     *
     * @var string
     */
    public $sipServerPort;

    /**
     * @description status
     *
     * @var int
     */
    public $status;

    /**
     * @description type
     *
     * @var string
     */
    public $deviceType;

    /**
     * @description vendor
     *
     * @var string
     */
    public $vendor;

    /**
     * @description gmtCreate
     *
     * @var string
     */
    public $createTime;
    protected $_name = [
        'accessProtocolType' => 'AccessProtocolType',
        'bitRate'            => 'BitRate',
        'coverImageUrl'      => 'CoverImageUrl',
        'gbId'               => 'GbId',
        'deviceAddress'      => 'DeviceAddress',
        'deviceDirection'    => 'DeviceDirection',
        'deviceSite'         => 'DeviceSite',
        'latitude'           => 'Latitude',
        'longitude'          => 'Longitude',
        'deviceName'         => 'DeviceName',
        'resolution'         => 'Resolution',
        'sipGBId'            => 'SipGBId',
        'sipPassword'        => 'SipPassword',
        'sipServerIp'        => 'SipServerIp',
        'sipServerPort'      => 'SipServerPort',
        'status'             => 'Status',
        'deviceType'         => 'DeviceType',
        'vendor'             => 'Vendor',
        'createTime'         => 'CreateTime',
    ];

    public function validate()
    {
        Model::validateRequired('accessProtocolType', $this->accessProtocolType, true);
        Model::validateRequired('bitRate', $this->bitRate, true);
        Model::validateRequired('coverImageUrl', $this->coverImageUrl, true);
        Model::validateRequired('gbId', $this->gbId, true);
        Model::validateRequired('deviceAddress', $this->deviceAddress, true);
        Model::validateRequired('deviceDirection', $this->deviceDirection, true);
        Model::validateRequired('deviceSite', $this->deviceSite, true);
        Model::validateRequired('latitude', $this->latitude, true);
        Model::validateRequired('longitude', $this->longitude, true);
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('resolution', $this->resolution, true);
        Model::validateRequired('sipGBId', $this->sipGBId, true);
        Model::validateRequired('sipPassword', $this->sipPassword, true);
        Model::validateRequired('sipServerIp', $this->sipServerIp, true);
        Model::validateRequired('sipServerPort', $this->sipServerPort, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('deviceType', $this->deviceType, true);
        Model::validateRequired('vendor', $this->vendor, true);
        Model::validateRequired('createTime', $this->createTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessProtocolType) {
            $res['AccessProtocolType'] = $this->accessProtocolType;
        }
        if (null !== $this->bitRate) {
            $res['BitRate'] = $this->bitRate;
        }
        if (null !== $this->coverImageUrl) {
            $res['CoverImageUrl'] = $this->coverImageUrl;
        }
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->deviceAddress) {
            $res['DeviceAddress'] = $this->deviceAddress;
        }
        if (null !== $this->deviceDirection) {
            $res['DeviceDirection'] = $this->deviceDirection;
        }
        if (null !== $this->deviceSite) {
            $res['DeviceSite'] = $this->deviceSite;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->sipGBId) {
            $res['SipGBId'] = $this->sipGBId;
        }
        if (null !== $this->sipPassword) {
            $res['SipPassword'] = $this->sipPassword;
        }
        if (null !== $this->sipServerIp) {
            $res['SipServerIp'] = $this->sipServerIp;
        }
        if (null !== $this->sipServerPort) {
            $res['SipServerPort'] = $this->sipServerPort;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessProtocolType'])) {
            $model->accessProtocolType = $map['AccessProtocolType'];
        }
        if (isset($map['BitRate'])) {
            $model->bitRate = $map['BitRate'];
        }
        if (isset($map['CoverImageUrl'])) {
            $model->coverImageUrl = $map['CoverImageUrl'];
        }
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['DeviceAddress'])) {
            $model->deviceAddress = $map['DeviceAddress'];
        }
        if (isset($map['DeviceDirection'])) {
            $model->deviceDirection = $map['DeviceDirection'];
        }
        if (isset($map['DeviceSite'])) {
            $model->deviceSite = $map['DeviceSite'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['SipGBId'])) {
            $model->sipGBId = $map['SipGBId'];
        }
        if (isset($map['SipPassword'])) {
            $model->sipPassword = $map['SipPassword'];
        }
        if (isset($map['SipServerIp'])) {
            $model->sipServerIp = $map['SipServerIp'];
        }
        if (isset($map['SipServerPort'])) {
            $model->sipServerPort = $map['SipServerPort'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        return $model;
    }
}
