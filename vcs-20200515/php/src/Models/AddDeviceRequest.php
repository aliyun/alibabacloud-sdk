<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class AddDeviceRequest extends Model {
    protected $_name = [
        'gbId' => 'GbId',
        'deviceName' => 'DeviceName',
        'deviceType' => 'DeviceType',
        'deviceAddress' => 'DeviceAddress',
        'deviceSite' => 'DeviceSite',
        'deviceDirection' => 'DeviceDirection',
        'deviceResolution' => 'DeviceResolution',
        'bitRate' => 'BitRate',
        'corpId' => 'CorpId',
        'vendor' => 'Vendor',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['GbId'] = $this->gbId;
        $res['DeviceName'] = $this->deviceName;
        $res['DeviceType'] = $this->deviceType;
        $res['DeviceAddress'] = $this->deviceAddress;
        $res['DeviceSite'] = $this->deviceSite;
        $res['DeviceDirection'] = $this->deviceDirection;
        $res['DeviceResolution'] = $this->deviceResolution;
        $res['BitRate'] = $this->bitRate;
        $res['CorpId'] = $this->corpId;
        $res['Vendor'] = $this->vendor;
        return $res;
    }
    /**
     * @param array $map
     * @return AddDeviceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['GbId'])){
            $model->gbId = $map['GbId'];
        }
        if(isset($map['DeviceName'])){
            $model->deviceName = $map['DeviceName'];
        }
        if(isset($map['DeviceType'])){
            $model->deviceType = $map['DeviceType'];
        }
        if(isset($map['DeviceAddress'])){
            $model->deviceAddress = $map['DeviceAddress'];
        }
        if(isset($map['DeviceSite'])){
            $model->deviceSite = $map['DeviceSite'];
        }
        if(isset($map['DeviceDirection'])){
            $model->deviceDirection = $map['DeviceDirection'];
        }
        if(isset($map['DeviceResolution'])){
            $model->deviceResolution = $map['DeviceResolution'];
        }
        if(isset($map['BitRate'])){
            $model->bitRate = $map['BitRate'];
        }
        if(isset($map['CorpId'])){
            $model->corpId = $map['CorpId'];
        }
        if(isset($map['Vendor'])){
            $model->vendor = $map['Vendor'];
        }
        return $model;
    }
    /**
     * @description gbId
     * @var string
     */
    public $gbId;

    /**
     * @description name
     * @var string
     */
    public $deviceName;

    /**
     * @description type
     * @var string
     */
    public $deviceType;

    /**
     * @description installAddress
     * @var string
     */
    public $deviceAddress;

    /**
     * @description installSite
     * @var string
     */
    public $deviceSite;

    /**
     * @description installDirection
     * @var string
     */
    public $deviceDirection;

    /**
     * @description resolution
     * @var string
     */
    public $deviceResolution;

    /**
     * @description bitRate
     * @var string
     */
    public $bitRate;

    /**
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description vendor
     * @var string
     */
    public $vendor;

}
