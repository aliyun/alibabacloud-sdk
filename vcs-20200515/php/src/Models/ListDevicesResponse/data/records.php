<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListDevicesResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model {
    protected $_name = [
        'accessProtocolType' => 'AccessProtocolType',
        'bitRate' => 'BitRate',
        'coverImageUrl' => 'CoverImageUrl',
        'gbId' => 'GbId',
        'deviceAddress' => 'DeviceAddress',
        'deviceDirection' => 'DeviceDirection',
        'deviceSite' => 'DeviceSite',
        'latitude' => 'Latitude',
        'longitude' => 'Longitude',
        'deviceName' => 'DeviceName',
        'resolution' => 'Resolution',
        'sipGBId' => 'SipGBId',
        'sipPassword' => 'SipPassword',
        'sipServerIp' => 'SipServerIp',
        'sipServerPort' => 'SipServerPort',
        'status' => 'Status',
        'deviceType' => 'DeviceType',
        'vendor' => 'Vendor',
        'createTime' => 'CreateTime',
    ];
    public function validate() {
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
    public function toMap() {
        $res = [];
        $res['AccessProtocolType'] = $this->accessProtocolType;
        $res['BitRate'] = $this->bitRate;
        $res['CoverImageUrl'] = $this->coverImageUrl;
        $res['GbId'] = $this->gbId;
        $res['DeviceAddress'] = $this->deviceAddress;
        $res['DeviceDirection'] = $this->deviceDirection;
        $res['DeviceSite'] = $this->deviceSite;
        $res['Latitude'] = $this->latitude;
        $res['Longitude'] = $this->longitude;
        $res['DeviceName'] = $this->deviceName;
        $res['Resolution'] = $this->resolution;
        $res['SipGBId'] = $this->sipGBId;
        $res['SipPassword'] = $this->sipPassword;
        $res['SipServerIp'] = $this->sipServerIp;
        $res['SipServerPort'] = $this->sipServerPort;
        $res['Status'] = $this->status;
        $res['DeviceType'] = $this->deviceType;
        $res['Vendor'] = $this->vendor;
        $res['CreateTime'] = $this->createTime;
        return $res;
    }
    /**
     * @param array $map
     * @return records
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessProtocolType'])){
            $model->accessProtocolType = $map['AccessProtocolType'];
        }
        if(isset($map['BitRate'])){
            $model->bitRate = $map['BitRate'];
        }
        if(isset($map['CoverImageUrl'])){
            $model->coverImageUrl = $map['CoverImageUrl'];
        }
        if(isset($map['GbId'])){
            $model->gbId = $map['GbId'];
        }
        if(isset($map['DeviceAddress'])){
            $model->deviceAddress = $map['DeviceAddress'];
        }
        if(isset($map['DeviceDirection'])){
            $model->deviceDirection = $map['DeviceDirection'];
        }
        if(isset($map['DeviceSite'])){
            $model->deviceSite = $map['DeviceSite'];
        }
        if(isset($map['Latitude'])){
            $model->latitude = $map['Latitude'];
        }
        if(isset($map['Longitude'])){
            $model->longitude = $map['Longitude'];
        }
        if(isset($map['DeviceName'])){
            $model->deviceName = $map['DeviceName'];
        }
        if(isset($map['Resolution'])){
            $model->resolution = $map['Resolution'];
        }
        if(isset($map['SipGBId'])){
            $model->sipGBId = $map['SipGBId'];
        }
        if(isset($map['SipPassword'])){
            $model->sipPassword = $map['SipPassword'];
        }
        if(isset($map['SipServerIp'])){
            $model->sipServerIp = $map['SipServerIp'];
        }
        if(isset($map['SipServerPort'])){
            $model->sipServerPort = $map['SipServerPort'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['DeviceType'])){
            $model->deviceType = $map['DeviceType'];
        }
        if(isset($map['Vendor'])){
            $model->vendor = $map['Vendor'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        return $model;
    }
    /**
     * @description accessProtocolType
     * @var string
     */
    public $accessProtocolType;

    /**
     * @description bitRate
     * @var string
     */
    public $bitRate;

    /**
     * @description CoverImgUrl
     * @var string
     */
    public $coverImageUrl;

    /**
     * @description gbId
     * @var string
     */
    public $gbId;

    /**
     * @description installAddress
     * @var string
     */
    public $deviceAddress;

    /**
     * @description installDirection
     * @var string
     */
    public $deviceDirection;

    /**
     * @description installSite
     * @var string
     */
    public $deviceSite;

    /**
     * @description latitude
     * @var string
     */
    public $latitude;

    /**
     * @description longitude
     * @var string
     */
    public $longitude;

    /**
     * @description name
     * @var string
     */
    public $deviceName;

    /**
     * @description resolution
     * @var string
     */
    public $resolution;

    /**
     * @description sipGbId
     * @var string
     */
    public $sipGBId;

    /**
     * @description sipPassword
     * @var string
     */
    public $sipPassword;

    /**
     * @description sipServerIp
     * @var string
     */
    public $sipServerIp;

    /**
     * @description sipServerPort
     * @var string
     */
    public $sipServerPort;

    /**
     * @description status
     * @var integer
     */
    public $status;

    /**
     * @description type
     * @var string
     */
    public $deviceType;

    /**
     * @description vendor
     * @var string
     */
    public $vendor;

    /**
     * @description gmtCreate
     * @var string
     */
    public $createTime;

}
