<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class SaveApRadioConfigRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $appName;

    /**
     * @description appSecret
     *
     * @var string
     */
    public $appCode;

    /**
     * @description htmode
     *
     * @var string
     */
    public $htmode;

    /**
     * @description frag
     *
     * @var int
     */
    public $frag;

    /**
     * @description minrate
     *
     * @var int
     */
    public $minrate;

    /**
     * @description probereq
     *
     * @var string
     */
    public $probereq;

    /**
     * @description channel
     *
     * @var string
     */
    public $channel;

    /**
     * @description shortgi
     *
     * @var string
     */
    public $shortgi;

    /**
     * @description hwmode
     *
     * @var string
     */
    public $hwmode;

    /**
     * @description mgmtRate
     *
     * @var int
     */
    public $mgmtRate;

    /**
     * @description bcastRate
     *
     * @var int
     */
    public $bcastRate;

    /**
     * @description uapsd
     *
     * @var int
     */
    public $uapsd;

    /**
     * @description beaconInt
     *
     * @var int
     */
    public $beaconInt;

    /**
     * @description rts
     *
     * @var int
     */
    public $rts;

    /**
     * @description requireMode
     *
     * @var string
     */
    public $requireMode;

    /**
     * @description mcastRate
     *
     * @var int
     */
    public $mcastRate;

    /**
     * @description txpower
     *
     * @var string
     */
    public $txpower;

    /**
     * @description noscan
     *
     * @var string
     */
    public $noscan;

    /**
     * @description disabled
     *
     * @var string
     */
    public $disabled;

    /**
     * @description id
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'appName'     => 'AppName',
        'appCode'     => 'AppCode',
        'htmode'      => 'Htmode',
        'frag'        => 'Frag',
        'minrate'     => 'Minrate',
        'probereq'    => 'Probereq',
        'channel'     => 'Channel',
        'shortgi'     => 'Shortgi',
        'hwmode'      => 'Hwmode',
        'mgmtRate'    => 'MgmtRate',
        'bcastRate'   => 'BcastRate',
        'uapsd'       => 'Uapsd',
        'beaconInt'   => 'BeaconInt',
        'rts'         => 'Rts',
        'requireMode' => 'RequireMode',
        'mcastRate'   => 'McastRate',
        'txpower'     => 'Txpower',
        'noscan'      => 'Noscan',
        'disabled'    => 'Disabled',
        'id'          => 'Id',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('appCode', $this->appCode, true);
        Model::validateRequired('htmode', $this->htmode, true);
        Model::validateRequired('frag', $this->frag, true);
        Model::validateRequired('minrate', $this->minrate, true);
        Model::validateRequired('probereq', $this->probereq, true);
        Model::validateRequired('channel', $this->channel, true);
        Model::validateRequired('shortgi', $this->shortgi, true);
        Model::validateRequired('hwmode', $this->hwmode, true);
        Model::validateRequired('mgmtRate', $this->mgmtRate, true);
        Model::validateRequired('bcastRate', $this->bcastRate, true);
        Model::validateRequired('uapsd', $this->uapsd, true);
        Model::validateRequired('beaconInt', $this->beaconInt, true);
        Model::validateRequired('rts', $this->rts, true);
        Model::validateRequired('mcastRate', $this->mcastRate, true);
        Model::validateRequired('txpower', $this->txpower, true);
        Model::validateRequired('noscan', $this->noscan, true);
        Model::validateRequired('disabled', $this->disabled, true);
        Model::validateRequired('id', $this->id, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->htmode) {
            $res['Htmode'] = $this->htmode;
        }
        if (null !== $this->frag) {
            $res['Frag'] = $this->frag;
        }
        if (null !== $this->minrate) {
            $res['Minrate'] = $this->minrate;
        }
        if (null !== $this->probereq) {
            $res['Probereq'] = $this->probereq;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->shortgi) {
            $res['Shortgi'] = $this->shortgi;
        }
        if (null !== $this->hwmode) {
            $res['Hwmode'] = $this->hwmode;
        }
        if (null !== $this->mgmtRate) {
            $res['MgmtRate'] = $this->mgmtRate;
        }
        if (null !== $this->bcastRate) {
            $res['BcastRate'] = $this->bcastRate;
        }
        if (null !== $this->uapsd) {
            $res['Uapsd'] = $this->uapsd;
        }
        if (null !== $this->beaconInt) {
            $res['BeaconInt'] = $this->beaconInt;
        }
        if (null !== $this->rts) {
            $res['Rts'] = $this->rts;
        }
        if (null !== $this->requireMode) {
            $res['RequireMode'] = $this->requireMode;
        }
        if (null !== $this->mcastRate) {
            $res['McastRate'] = $this->mcastRate;
        }
        if (null !== $this->txpower) {
            $res['Txpower'] = $this->txpower;
        }
        if (null !== $this->noscan) {
            $res['Noscan'] = $this->noscan;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveApRadioConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['Htmode'])) {
            $model->htmode = $map['Htmode'];
        }
        if (isset($map['Frag'])) {
            $model->frag = $map['Frag'];
        }
        if (isset($map['Minrate'])) {
            $model->minrate = $map['Minrate'];
        }
        if (isset($map['Probereq'])) {
            $model->probereq = $map['Probereq'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['Shortgi'])) {
            $model->shortgi = $map['Shortgi'];
        }
        if (isset($map['Hwmode'])) {
            $model->hwmode = $map['Hwmode'];
        }
        if (isset($map['MgmtRate'])) {
            $model->mgmtRate = $map['MgmtRate'];
        }
        if (isset($map['BcastRate'])) {
            $model->bcastRate = $map['BcastRate'];
        }
        if (isset($map['Uapsd'])) {
            $model->uapsd = $map['Uapsd'];
        }
        if (isset($map['BeaconInt'])) {
            $model->beaconInt = $map['BeaconInt'];
        }
        if (isset($map['Rts'])) {
            $model->rts = $map['Rts'];
        }
        if (isset($map['RequireMode'])) {
            $model->requireMode = $map['RequireMode'];
        }
        if (isset($map['McastRate'])) {
            $model->mcastRate = $map['McastRate'];
        }
        if (isset($map['Txpower'])) {
            $model->txpower = $map['Txpower'];
        }
        if (isset($map['Noscan'])) {
            $model->noscan = $map['Noscan'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
