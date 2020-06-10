<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class SaveApgroupSsidConfigRequest extends Model
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
     * @description newSsid
     *
     * @var string
     */
    public $newSsid;

    /**
     * @description nasid
     *
     * @var string
     */
    public $nasid;

    /**
     * @description ignoreWeakProbe
     *
     * @var int
     */
    public $ignoreWeakProbe;

    /**
     * @description daePort
     *
     * @var int
     */
    public $daePort;

    /**
     * @description apgroupId
     *
     * @var string
     */
    public $apgroupId;

    /**
     * @description hidden
     *
     * @var string
     */
    public $hidden;

    /**
     * @description secondaryAcctSecret
     *
     * @var string
     */
    public $secondaryAcctSecret;

    /**
     * @description binding
     *
     * @var string
     */
    public $binding;

    /**
     * @description maxInactivity
     *
     * @var int
     */
    public $maxInactivity;

    /**
     * @description type
     *
     * @var int
     */
    public $type;

    /**
     * @description ssid
     *
     * @var string
     */
    public $ssid;

    /**
     * @description cir
     *
     * @var int
     */
    public $cir;

    /**
     * @description network
     *
     * @var int
     */
    public $network;

    /**
     * @description ieee80211w
     *
     * @var string
     */
    public $ieee80211w;

    /**
     * @description isolate
     *
     * @var string
     */
    public $isolate;

    /**
     * @description ssidLb
     *
     * @var int
     */
    public $ssidLb;

    /**
     * @description disassocWeakRssi
     *
     * @var int
     */
    public $disassocWeakRssi;

    /**
     * @description encryption
     *
     * @var string
     */
    public $encryption;

    /**
     * @description vlanDhcp
     *
     * @var int
     */
    public $vlanDhcp;

    /**
     * @description authPort
     *
     * @var int
     */
    public $authPort;

    /**
     * @description wmm
     *
     * @var string
     */
    public $wmm;

    /**
     * @description dynamicVlan
     *
     * @var int
     */
    public $dynamicVlan;

    /**
     * @description authServer
     *
     * @var string
     */
    public $authServer;

    /**
     * @description disabled
     *
     * @var string
     */
    public $disabled;

    /**
     * @description daeSecret
     *
     * @var string
     */
    public $daeSecret;

    /**
     * @description id
     *
     * @var int
     */
    public $id;

    /**
     * @description maxassoc
     *
     * @var string
     */
    public $maxassoc;

    /**
     * @description secondaryAuthPort
     *
     * @var int
     */
    public $secondaryAuthPort;

    /**
     * @description secondaryAuthSecret
     *
     * @var string
     */
    public $secondaryAuthSecret;

    /**
     * @description acctPort
     *
     * @var int
     */
    public $acctPort;

    /**
     * @description shortPreamble
     *
     * @var string
     */
    public $shortPreamble;

    /**
     * @description liteEffect
     *
     * @var bool
     */
    public $liteEffect;

    /**
     * @description daeClient
     *
     * @var string
     */
    public $daeClient;

    /**
     * @description acctServer
     *
     * @var string
     */
    public $acctServer;

    /**
     * @description secondaryAuthServer
     *
     * @var string
     */
    public $secondaryAuthServer;

    /**
     * @description encKey
     *
     * @var string
     */
    public $encKey;

    /**
     * @description acctSecret
     *
     * @var string
     */
    public $acctSecret;

    /**
     * @description authSecret
     *
     * @var string
     */
    public $authSecret;

    /**
     * @description effect
     *
     * @var bool
     */
    public $effect;

    /**
     * @description authCache
     *
     * @var string
     */
    public $authCache;

    /**
     * @description multicastForward
     *
     * @var int
     */
    public $multicastForward;

    /**
     * @description secondaryAcctPort
     *
     * @var int
     */
    public $secondaryAcctPort;

    /**
     * @description disassocLowAck
     *
     * @var string
     */
    public $disassocLowAck;

    /**
     * @description secondaryAcctServer
     *
     * @var string
     */
    public $secondaryAcctServer;

    /**
     * @description ownip
     *
     * @var string
     */
    public $ownip;
    protected $_name = [
        'appName'             => 'AppName',
        'appCode'             => 'AppCode',
        'newSsid'             => 'NewSsid',
        'nasid'               => 'Nasid',
        'ignoreWeakProbe'     => 'IgnoreWeakProbe',
        'daePort'             => 'DaePort',
        'apgroupId'           => 'ApgroupId',
        'hidden'              => 'Hidden',
        'secondaryAcctSecret' => 'SecondaryAcctSecret',
        'binding'             => 'Binding',
        'maxInactivity'       => 'MaxInactivity',
        'type'                => 'Type',
        'ssid'                => 'Ssid',
        'cir'                 => 'Cir',
        'network'             => 'Network',
        'ieee80211w'          => 'Ieee80211w',
        'isolate'             => 'Isolate',
        'ssidLb'              => 'SsidLb',
        'disassocWeakRssi'    => 'DisassocWeakRssi',
        'encryption'          => 'Encryption',
        'vlanDhcp'            => 'VlanDhcp',
        'authPort'            => 'AuthPort',
        'wmm'                 => 'Wmm',
        'dynamicVlan'         => 'DynamicVlan',
        'authServer'          => 'AuthServer',
        'disabled'            => 'Disabled',
        'daeSecret'           => 'DaeSecret',
        'id'                  => 'Id',
        'maxassoc'            => 'Maxassoc',
        'secondaryAuthPort'   => 'SecondaryAuthPort',
        'secondaryAuthSecret' => 'SecondaryAuthSecret',
        'acctPort'            => 'AcctPort',
        'shortPreamble'       => 'ShortPreamble',
        'liteEffect'          => 'LiteEffect',
        'daeClient'           => 'DaeClient',
        'acctServer'          => 'AcctServer',
        'secondaryAuthServer' => 'SecondaryAuthServer',
        'encKey'              => 'EncKey',
        'acctSecret'          => 'AcctSecret',
        'authSecret'          => 'AuthSecret',
        'effect'              => 'Effect',
        'authCache'           => 'AuthCache',
        'multicastForward'    => 'MulticastForward',
        'secondaryAcctPort'   => 'SecondaryAcctPort',
        'disassocLowAck'      => 'DisassocLowAck',
        'secondaryAcctServer' => 'SecondaryAcctServer',
        'ownip'               => 'Ownip',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('appCode', $this->appCode, true);
        Model::validateRequired('newSsid', $this->newSsid, true);
        Model::validateRequired('apgroupId', $this->apgroupId, true);
        Model::validateRequired('binding', $this->binding, true);
        Model::validateRequired('ssid', $this->ssid, true);
        Model::validateRequired('network', $this->network, true);
        Model::validateRequired('encryption', $this->encryption, true);
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
        if (null !== $this->newSsid) {
            $res['NewSsid'] = $this->newSsid;
        }
        if (null !== $this->nasid) {
            $res['Nasid'] = $this->nasid;
        }
        if (null !== $this->ignoreWeakProbe) {
            $res['IgnoreWeakProbe'] = $this->ignoreWeakProbe;
        }
        if (null !== $this->daePort) {
            $res['DaePort'] = $this->daePort;
        }
        if (null !== $this->apgroupId) {
            $res['ApgroupId'] = $this->apgroupId;
        }
        if (null !== $this->hidden) {
            $res['Hidden'] = $this->hidden;
        }
        if (null !== $this->secondaryAcctSecret) {
            $res['SecondaryAcctSecret'] = $this->secondaryAcctSecret;
        }
        if (null !== $this->binding) {
            $res['Binding'] = $this->binding;
        }
        if (null !== $this->maxInactivity) {
            $res['MaxInactivity'] = $this->maxInactivity;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->ssid) {
            $res['Ssid'] = $this->ssid;
        }
        if (null !== $this->cir) {
            $res['Cir'] = $this->cir;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->ieee80211w) {
            $res['Ieee80211w'] = $this->ieee80211w;
        }
        if (null !== $this->isolate) {
            $res['Isolate'] = $this->isolate;
        }
        if (null !== $this->ssidLb) {
            $res['SsidLb'] = $this->ssidLb;
        }
        if (null !== $this->disassocWeakRssi) {
            $res['DisassocWeakRssi'] = $this->disassocWeakRssi;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }
        if (null !== $this->vlanDhcp) {
            $res['VlanDhcp'] = $this->vlanDhcp;
        }
        if (null !== $this->authPort) {
            $res['AuthPort'] = $this->authPort;
        }
        if (null !== $this->wmm) {
            $res['Wmm'] = $this->wmm;
        }
        if (null !== $this->dynamicVlan) {
            $res['DynamicVlan'] = $this->dynamicVlan;
        }
        if (null !== $this->authServer) {
            $res['AuthServer'] = $this->authServer;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->daeSecret) {
            $res['DaeSecret'] = $this->daeSecret;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->maxassoc) {
            $res['Maxassoc'] = $this->maxassoc;
        }
        if (null !== $this->secondaryAuthPort) {
            $res['SecondaryAuthPort'] = $this->secondaryAuthPort;
        }
        if (null !== $this->secondaryAuthSecret) {
            $res['SecondaryAuthSecret'] = $this->secondaryAuthSecret;
        }
        if (null !== $this->acctPort) {
            $res['AcctPort'] = $this->acctPort;
        }
        if (null !== $this->shortPreamble) {
            $res['ShortPreamble'] = $this->shortPreamble;
        }
        if (null !== $this->liteEffect) {
            $res['LiteEffect'] = $this->liteEffect;
        }
        if (null !== $this->daeClient) {
            $res['DaeClient'] = $this->daeClient;
        }
        if (null !== $this->acctServer) {
            $res['AcctServer'] = $this->acctServer;
        }
        if (null !== $this->secondaryAuthServer) {
            $res['SecondaryAuthServer'] = $this->secondaryAuthServer;
        }
        if (null !== $this->encKey) {
            $res['EncKey'] = $this->encKey;
        }
        if (null !== $this->acctSecret) {
            $res['AcctSecret'] = $this->acctSecret;
        }
        if (null !== $this->authSecret) {
            $res['AuthSecret'] = $this->authSecret;
        }
        if (null !== $this->effect) {
            $res['Effect'] = $this->effect;
        }
        if (null !== $this->authCache) {
            $res['AuthCache'] = $this->authCache;
        }
        if (null !== $this->multicastForward) {
            $res['MulticastForward'] = $this->multicastForward;
        }
        if (null !== $this->secondaryAcctPort) {
            $res['SecondaryAcctPort'] = $this->secondaryAcctPort;
        }
        if (null !== $this->disassocLowAck) {
            $res['DisassocLowAck'] = $this->disassocLowAck;
        }
        if (null !== $this->secondaryAcctServer) {
            $res['SecondaryAcctServer'] = $this->secondaryAcctServer;
        }
        if (null !== $this->ownip) {
            $res['Ownip'] = $this->ownip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveApgroupSsidConfigRequest
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
        if (isset($map['NewSsid'])) {
            $model->newSsid = $map['NewSsid'];
        }
        if (isset($map['Nasid'])) {
            $model->nasid = $map['Nasid'];
        }
        if (isset($map['IgnoreWeakProbe'])) {
            $model->ignoreWeakProbe = $map['IgnoreWeakProbe'];
        }
        if (isset($map['DaePort'])) {
            $model->daePort = $map['DaePort'];
        }
        if (isset($map['ApgroupId'])) {
            $model->apgroupId = $map['ApgroupId'];
        }
        if (isset($map['Hidden'])) {
            $model->hidden = $map['Hidden'];
        }
        if (isset($map['SecondaryAcctSecret'])) {
            $model->secondaryAcctSecret = $map['SecondaryAcctSecret'];
        }
        if (isset($map['Binding'])) {
            $model->binding = $map['Binding'];
        }
        if (isset($map['MaxInactivity'])) {
            $model->maxInactivity = $map['MaxInactivity'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Ssid'])) {
            $model->ssid = $map['Ssid'];
        }
        if (isset($map['Cir'])) {
            $model->cir = $map['Cir'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['Ieee80211w'])) {
            $model->ieee80211w = $map['Ieee80211w'];
        }
        if (isset($map['Isolate'])) {
            $model->isolate = $map['Isolate'];
        }
        if (isset($map['SsidLb'])) {
            $model->ssidLb = $map['SsidLb'];
        }
        if (isset($map['DisassocWeakRssi'])) {
            $model->disassocWeakRssi = $map['DisassocWeakRssi'];
        }
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }
        if (isset($map['VlanDhcp'])) {
            $model->vlanDhcp = $map['VlanDhcp'];
        }
        if (isset($map['AuthPort'])) {
            $model->authPort = $map['AuthPort'];
        }
        if (isset($map['Wmm'])) {
            $model->wmm = $map['Wmm'];
        }
        if (isset($map['DynamicVlan'])) {
            $model->dynamicVlan = $map['DynamicVlan'];
        }
        if (isset($map['AuthServer'])) {
            $model->authServer = $map['AuthServer'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['DaeSecret'])) {
            $model->daeSecret = $map['DaeSecret'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Maxassoc'])) {
            $model->maxassoc = $map['Maxassoc'];
        }
        if (isset($map['SecondaryAuthPort'])) {
            $model->secondaryAuthPort = $map['SecondaryAuthPort'];
        }
        if (isset($map['SecondaryAuthSecret'])) {
            $model->secondaryAuthSecret = $map['SecondaryAuthSecret'];
        }
        if (isset($map['AcctPort'])) {
            $model->acctPort = $map['AcctPort'];
        }
        if (isset($map['ShortPreamble'])) {
            $model->shortPreamble = $map['ShortPreamble'];
        }
        if (isset($map['LiteEffect'])) {
            $model->liteEffect = $map['LiteEffect'];
        }
        if (isset($map['DaeClient'])) {
            $model->daeClient = $map['DaeClient'];
        }
        if (isset($map['AcctServer'])) {
            $model->acctServer = $map['AcctServer'];
        }
        if (isset($map['SecondaryAuthServer'])) {
            $model->secondaryAuthServer = $map['SecondaryAuthServer'];
        }
        if (isset($map['EncKey'])) {
            $model->encKey = $map['EncKey'];
        }
        if (isset($map['AcctSecret'])) {
            $model->acctSecret = $map['AcctSecret'];
        }
        if (isset($map['AuthSecret'])) {
            $model->authSecret = $map['AuthSecret'];
        }
        if (isset($map['Effect'])) {
            $model->effect = $map['Effect'];
        }
        if (isset($map['AuthCache'])) {
            $model->authCache = $map['AuthCache'];
        }
        if (isset($map['MulticastForward'])) {
            $model->multicastForward = $map['MulticastForward'];
        }
        if (isset($map['SecondaryAcctPort'])) {
            $model->secondaryAcctPort = $map['SecondaryAcctPort'];
        }
        if (isset($map['DisassocLowAck'])) {
            $model->disassocLowAck = $map['DisassocLowAck'];
        }
        if (isset($map['SecondaryAcctServer'])) {
            $model->secondaryAcctServer = $map['SecondaryAcctServer'];
        }
        if (isset($map['Ownip'])) {
            $model->ownip = $map['Ownip'];
        }

        return $model;
    }
}
