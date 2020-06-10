<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class SaveApSsidConfigRequest extends Model
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
     * @description fourthAuthPort
     *
     * @var int
     */
    public $fourthAuthPort;

    /**
     * @description cirType
     *
     * @var int
     */
    public $cirType;

    /**
     * @description ieee80211r
     *
     * @var int
     */
    public $ieee80211r;

    /**
     * @description mobilityDomain
     *
     * @var string
     */
    public $mobilityDomain;

    /**
     * @description daePort
     *
     * @var int
     */
    public $daePort;

    /**
     * @description fourthAuthServer
     *
     * @var string
     */
    public $fourthAuthServer;

    /**
     * @description secondaryAcctSecret
     *
     * @var string
     */
    public $secondaryAcctSecret;

    /**
     * @description type
     *
     * @var int
     */
    public $type;

    /**
     * @description fourthAuthSecret
     *
     * @var string
     */
    public $fourthAuthSecret;

    /**
     * @description acct_status_server_enable
     *
     * @var int
     */
    public $acctStatusServerWork;

    /**
     * @description ieee80211w
     *
     * @var string
     */
    public $ieee80211w;

    /**
     * @description ssidLb
     *
     * @var int
     */
    public $ssidLb;

    /**
     * @description authPort
     *
     * @var int
     */
    public $authPort;

    /**
     * @description authServer
     *
     * @var string
     */
    public $authServer;

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
     * @description cirStep
     *
     * @var int
     */
    public $cirStep;

    /**
     * @description auth_status_server_enable
     *
     * @var int
     */
    public $authStatusServerWork;

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
     * @description shortPreamble
     *
     * @var string
     */
    public $shortPreamble;

    /**
     * @description cirUl
     *
     * @var int
     */
    public $cirUl;

    /**
     * @description daeClient
     *
     * @var string
     */
    public $daeClient;

    /**
     * @description liteEffect
     *
     * @var bool
     */
    public $liteEffect;

    /**
     * @description thirdAuthSecret
     *
     * @var string
     */
    public $thirdAuthSecret;

    /**
     * @description thirdAuthPort
     *
     * @var int
     */
    public $thirdAuthPort;

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
     * @description radioIndex
     *
     * @var string
     */
    public $radioIndex;

    /**
     * @description ndproxy_enable
     *
     * @var int
     */
    public $ndProxyWork;

    /**
     * @description hidden
     *
     * @var string
     */
    public $hidden;

    /**
     * @description maxInactivity
     *
     * @var int
     */
    public $maxInactivity;

    /**
     * @description thirdAuthServer
     *
     * @var string
     */
    public $thirdAuthServer;

    /**
     * @description sendConfigToAp
     *
     * @var bool
     */
    public $sendConfigToAp;

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
     * @description mac
     *
     * @var string
     */
    public $mac;

    /**
     * @description network
     *
     * @var int
     */
    public $network;

    /**
     * @description isolate
     *
     * @var string
     */
    public $isolate;

    /**
     * @description disassocWeakRssi
     *
     * @var int
     */
    public $disassocWeakRssi;

    /**
     * @description apAssetId
     *
     * @var int
     */
    public $apAssetId;

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
     * @description disabled
     *
     * @var string
     */
    public $disabled;

    /**
     * @description maxassoc
     *
     * @var int
     */
    public $maxassoc;

    /**
     * @description acctPort
     *
     * @var int
     */
    public $acctPort;

    /**
     * @description authSecret
     *
     * @var string
     */
    public $authSecret;

    /**
     * @description ftOverDs
     *
     * @var int
     */
    public $ftOverDs;

    /**
     * @description arpproxy_enable
     *
     * @var int
     */
    public $arpProxyEnable;

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
        'appName'              => 'AppName',
        'appCode'              => 'AppCode',
        'nasid'                => 'Nasid',
        'ignoreWeakProbe'      => 'IgnoreWeakProbe',
        'fourthAuthPort'       => 'FourthAuthPort',
        'cirType'              => 'CirType',
        'ieee80211r'           => 'Ieee80211r',
        'mobilityDomain'       => 'MobilityDomain',
        'daePort'              => 'DaePort',
        'fourthAuthServer'     => 'FourthAuthServer',
        'secondaryAcctSecret'  => 'SecondaryAcctSecret',
        'type'                 => 'Type',
        'fourthAuthSecret'     => 'FourthAuthSecret',
        'acctStatusServerWork' => 'AcctStatusServerWork',
        'ieee80211w'           => 'Ieee80211w',
        'ssidLb'               => 'SsidLb',
        'authPort'             => 'AuthPort',
        'authServer'           => 'AuthServer',
        'daeSecret'            => 'DaeSecret',
        'id'                   => 'Id',
        'cirStep'              => 'CirStep',
        'authStatusServerWork' => 'AuthStatusServerWork',
        'secondaryAuthPort'    => 'SecondaryAuthPort',
        'secondaryAuthSecret'  => 'SecondaryAuthSecret',
        'shortPreamble'        => 'ShortPreamble',
        'cirUl'                => 'CirUl',
        'daeClient'            => 'DaeClient',
        'liteEffect'           => 'LiteEffect',
        'thirdAuthSecret'      => 'ThirdAuthSecret',
        'thirdAuthPort'        => 'ThirdAuthPort',
        'acctServer'           => 'AcctServer',
        'secondaryAuthServer'  => 'SecondaryAuthServer',
        'encKey'               => 'EncKey',
        'acctSecret'           => 'AcctSecret',
        'authCache'            => 'AuthCache',
        'multicastForward'     => 'MulticastForward',
        'secondaryAcctPort'    => 'SecondaryAcctPort',
        'radioIndex'           => 'RadioIndex',
        'ndProxyWork'          => 'NdProxyWork',
        'hidden'               => 'Hidden',
        'maxInactivity'        => 'MaxInactivity',
        'thirdAuthServer'      => 'ThirdAuthServer',
        'sendConfigToAp'       => 'SendConfigToAp',
        'ssid'                 => 'Ssid',
        'cir'                  => 'Cir',
        'mac'                  => 'Mac',
        'network'              => 'Network',
        'isolate'              => 'Isolate',
        'disassocWeakRssi'     => 'DisassocWeakRssi',
        'apAssetId'            => 'ApAssetId',
        'encryption'           => 'Encryption',
        'vlanDhcp'             => 'VlanDhcp',
        'wmm'                  => 'Wmm',
        'dynamicVlan'          => 'DynamicVlan',
        'disabled'             => 'Disabled',
        'maxassoc'             => 'Maxassoc',
        'acctPort'             => 'AcctPort',
        'authSecret'           => 'AuthSecret',
        'ftOverDs'             => 'FtOverDs',
        'arpProxyEnable'       => 'ArpProxyEnable',
        'disassocLowAck'       => 'DisassocLowAck',
        'secondaryAcctServer'  => 'SecondaryAcctServer',
        'ownip'                => 'Ownip',
    ];

    public function validate()
    {
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('appCode', $this->appCode, true);
        Model::validateRequired('ieee80211w', $this->ieee80211w, true);
        Model::validateRequired('ssidLb', $this->ssidLb, true);
        Model::validateRequired('shortPreamble', $this->shortPreamble, true);
        Model::validateRequired('authCache', $this->authCache, true);
        Model::validateRequired('radioIndex', $this->radioIndex, true);
        Model::validateRequired('hidden', $this->hidden, true);
        Model::validateRequired('maxInactivity', $this->maxInactivity, true);
        Model::validateRequired('ssid', $this->ssid, true);
        Model::validateRequired('mac', $this->mac, true);
        Model::validateRequired('network', $this->network, true);
        Model::validateRequired('isolate', $this->isolate, true);
        Model::validateRequired('disassocWeakRssi', $this->disassocWeakRssi, true);
        Model::validateRequired('encryption', $this->encryption, true);
        Model::validateRequired('vlanDhcp', $this->vlanDhcp, true);
        Model::validateRequired('wmm', $this->wmm, true);
        Model::validateRequired('dynamicVlan', $this->dynamicVlan, true);
        Model::validateRequired('disabled', $this->disabled, true);
        Model::validateRequired('maxassoc', $this->maxassoc, true);
        Model::validateRequired('disassocLowAck', $this->disassocLowAck, true);
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
        if (null !== $this->nasid) {
            $res['Nasid'] = $this->nasid;
        }
        if (null !== $this->ignoreWeakProbe) {
            $res['IgnoreWeakProbe'] = $this->ignoreWeakProbe;
        }
        if (null !== $this->fourthAuthPort) {
            $res['FourthAuthPort'] = $this->fourthAuthPort;
        }
        if (null !== $this->cirType) {
            $res['CirType'] = $this->cirType;
        }
        if (null !== $this->ieee80211r) {
            $res['Ieee80211r'] = $this->ieee80211r;
        }
        if (null !== $this->mobilityDomain) {
            $res['MobilityDomain'] = $this->mobilityDomain;
        }
        if (null !== $this->daePort) {
            $res['DaePort'] = $this->daePort;
        }
        if (null !== $this->fourthAuthServer) {
            $res['FourthAuthServer'] = $this->fourthAuthServer;
        }
        if (null !== $this->secondaryAcctSecret) {
            $res['SecondaryAcctSecret'] = $this->secondaryAcctSecret;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->fourthAuthSecret) {
            $res['FourthAuthSecret'] = $this->fourthAuthSecret;
        }
        if (null !== $this->acctStatusServerWork) {
            $res['AcctStatusServerWork'] = $this->acctStatusServerWork;
        }
        if (null !== $this->ieee80211w) {
            $res['Ieee80211w'] = $this->ieee80211w;
        }
        if (null !== $this->ssidLb) {
            $res['SsidLb'] = $this->ssidLb;
        }
        if (null !== $this->authPort) {
            $res['AuthPort'] = $this->authPort;
        }
        if (null !== $this->authServer) {
            $res['AuthServer'] = $this->authServer;
        }
        if (null !== $this->daeSecret) {
            $res['DaeSecret'] = $this->daeSecret;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->cirStep) {
            $res['CirStep'] = $this->cirStep;
        }
        if (null !== $this->authStatusServerWork) {
            $res['AuthStatusServerWork'] = $this->authStatusServerWork;
        }
        if (null !== $this->secondaryAuthPort) {
            $res['SecondaryAuthPort'] = $this->secondaryAuthPort;
        }
        if (null !== $this->secondaryAuthSecret) {
            $res['SecondaryAuthSecret'] = $this->secondaryAuthSecret;
        }
        if (null !== $this->shortPreamble) {
            $res['ShortPreamble'] = $this->shortPreamble;
        }
        if (null !== $this->cirUl) {
            $res['CirUl'] = $this->cirUl;
        }
        if (null !== $this->daeClient) {
            $res['DaeClient'] = $this->daeClient;
        }
        if (null !== $this->liteEffect) {
            $res['LiteEffect'] = $this->liteEffect;
        }
        if (null !== $this->thirdAuthSecret) {
            $res['ThirdAuthSecret'] = $this->thirdAuthSecret;
        }
        if (null !== $this->thirdAuthPort) {
            $res['ThirdAuthPort'] = $this->thirdAuthPort;
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
        if (null !== $this->authCache) {
            $res['AuthCache'] = $this->authCache;
        }
        if (null !== $this->multicastForward) {
            $res['MulticastForward'] = $this->multicastForward;
        }
        if (null !== $this->secondaryAcctPort) {
            $res['SecondaryAcctPort'] = $this->secondaryAcctPort;
        }
        if (null !== $this->radioIndex) {
            $res['RadioIndex'] = $this->radioIndex;
        }
        if (null !== $this->ndProxyWork) {
            $res['NdProxyWork'] = $this->ndProxyWork;
        }
        if (null !== $this->hidden) {
            $res['Hidden'] = $this->hidden;
        }
        if (null !== $this->maxInactivity) {
            $res['MaxInactivity'] = $this->maxInactivity;
        }
        if (null !== $this->thirdAuthServer) {
            $res['ThirdAuthServer'] = $this->thirdAuthServer;
        }
        if (null !== $this->sendConfigToAp) {
            $res['SendConfigToAp'] = $this->sendConfigToAp;
        }
        if (null !== $this->ssid) {
            $res['Ssid'] = $this->ssid;
        }
        if (null !== $this->cir) {
            $res['Cir'] = $this->cir;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }
        if (null !== $this->isolate) {
            $res['Isolate'] = $this->isolate;
        }
        if (null !== $this->disassocWeakRssi) {
            $res['DisassocWeakRssi'] = $this->disassocWeakRssi;
        }
        if (null !== $this->apAssetId) {
            $res['ApAssetId'] = $this->apAssetId;
        }
        if (null !== $this->encryption) {
            $res['Encryption'] = $this->encryption;
        }
        if (null !== $this->vlanDhcp) {
            $res['VlanDhcp'] = $this->vlanDhcp;
        }
        if (null !== $this->wmm) {
            $res['Wmm'] = $this->wmm;
        }
        if (null !== $this->dynamicVlan) {
            $res['DynamicVlan'] = $this->dynamicVlan;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->maxassoc) {
            $res['Maxassoc'] = $this->maxassoc;
        }
        if (null !== $this->acctPort) {
            $res['AcctPort'] = $this->acctPort;
        }
        if (null !== $this->authSecret) {
            $res['AuthSecret'] = $this->authSecret;
        }
        if (null !== $this->ftOverDs) {
            $res['FtOverDs'] = $this->ftOverDs;
        }
        if (null !== $this->arpProxyEnable) {
            $res['ArpProxyEnable'] = $this->arpProxyEnable;
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
     * @return SaveApSsidConfigRequest
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
        if (isset($map['Nasid'])) {
            $model->nasid = $map['Nasid'];
        }
        if (isset($map['IgnoreWeakProbe'])) {
            $model->ignoreWeakProbe = $map['IgnoreWeakProbe'];
        }
        if (isset($map['FourthAuthPort'])) {
            $model->fourthAuthPort = $map['FourthAuthPort'];
        }
        if (isset($map['CirType'])) {
            $model->cirType = $map['CirType'];
        }
        if (isset($map['Ieee80211r'])) {
            $model->ieee80211r = $map['Ieee80211r'];
        }
        if (isset($map['MobilityDomain'])) {
            $model->mobilityDomain = $map['MobilityDomain'];
        }
        if (isset($map['DaePort'])) {
            $model->daePort = $map['DaePort'];
        }
        if (isset($map['FourthAuthServer'])) {
            $model->fourthAuthServer = $map['FourthAuthServer'];
        }
        if (isset($map['SecondaryAcctSecret'])) {
            $model->secondaryAcctSecret = $map['SecondaryAcctSecret'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['FourthAuthSecret'])) {
            $model->fourthAuthSecret = $map['FourthAuthSecret'];
        }
        if (isset($map['AcctStatusServerWork'])) {
            $model->acctStatusServerWork = $map['AcctStatusServerWork'];
        }
        if (isset($map['Ieee80211w'])) {
            $model->ieee80211w = $map['Ieee80211w'];
        }
        if (isset($map['SsidLb'])) {
            $model->ssidLb = $map['SsidLb'];
        }
        if (isset($map['AuthPort'])) {
            $model->authPort = $map['AuthPort'];
        }
        if (isset($map['AuthServer'])) {
            $model->authServer = $map['AuthServer'];
        }
        if (isset($map['DaeSecret'])) {
            $model->daeSecret = $map['DaeSecret'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['CirStep'])) {
            $model->cirStep = $map['CirStep'];
        }
        if (isset($map['AuthStatusServerWork'])) {
            $model->authStatusServerWork = $map['AuthStatusServerWork'];
        }
        if (isset($map['SecondaryAuthPort'])) {
            $model->secondaryAuthPort = $map['SecondaryAuthPort'];
        }
        if (isset($map['SecondaryAuthSecret'])) {
            $model->secondaryAuthSecret = $map['SecondaryAuthSecret'];
        }
        if (isset($map['ShortPreamble'])) {
            $model->shortPreamble = $map['ShortPreamble'];
        }
        if (isset($map['CirUl'])) {
            $model->cirUl = $map['CirUl'];
        }
        if (isset($map['DaeClient'])) {
            $model->daeClient = $map['DaeClient'];
        }
        if (isset($map['LiteEffect'])) {
            $model->liteEffect = $map['LiteEffect'];
        }
        if (isset($map['ThirdAuthSecret'])) {
            $model->thirdAuthSecret = $map['ThirdAuthSecret'];
        }
        if (isset($map['ThirdAuthPort'])) {
            $model->thirdAuthPort = $map['ThirdAuthPort'];
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
        if (isset($map['AuthCache'])) {
            $model->authCache = $map['AuthCache'];
        }
        if (isset($map['MulticastForward'])) {
            $model->multicastForward = $map['MulticastForward'];
        }
        if (isset($map['SecondaryAcctPort'])) {
            $model->secondaryAcctPort = $map['SecondaryAcctPort'];
        }
        if (isset($map['RadioIndex'])) {
            $model->radioIndex = $map['RadioIndex'];
        }
        if (isset($map['NdProxyWork'])) {
            $model->ndProxyWork = $map['NdProxyWork'];
        }
        if (isset($map['Hidden'])) {
            $model->hidden = $map['Hidden'];
        }
        if (isset($map['MaxInactivity'])) {
            $model->maxInactivity = $map['MaxInactivity'];
        }
        if (isset($map['ThirdAuthServer'])) {
            $model->thirdAuthServer = $map['ThirdAuthServer'];
        }
        if (isset($map['SendConfigToAp'])) {
            $model->sendConfigToAp = $map['SendConfigToAp'];
        }
        if (isset($map['Ssid'])) {
            $model->ssid = $map['Ssid'];
        }
        if (isset($map['Cir'])) {
            $model->cir = $map['Cir'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }
        if (isset($map['Isolate'])) {
            $model->isolate = $map['Isolate'];
        }
        if (isset($map['DisassocWeakRssi'])) {
            $model->disassocWeakRssi = $map['DisassocWeakRssi'];
        }
        if (isset($map['ApAssetId'])) {
            $model->apAssetId = $map['ApAssetId'];
        }
        if (isset($map['Encryption'])) {
            $model->encryption = $map['Encryption'];
        }
        if (isset($map['VlanDhcp'])) {
            $model->vlanDhcp = $map['VlanDhcp'];
        }
        if (isset($map['Wmm'])) {
            $model->wmm = $map['Wmm'];
        }
        if (isset($map['DynamicVlan'])) {
            $model->dynamicVlan = $map['DynamicVlan'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['Maxassoc'])) {
            $model->maxassoc = $map['Maxassoc'];
        }
        if (isset($map['AcctPort'])) {
            $model->acctPort = $map['AcctPort'];
        }
        if (isset($map['AuthSecret'])) {
            $model->authSecret = $map['AuthSecret'];
        }
        if (isset($map['FtOverDs'])) {
            $model->ftOverDs = $map['FtOverDs'];
        }
        if (isset($map['ArpProxyEnable'])) {
            $model->arpProxyEnable = $map['ArpProxyEnable'];
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
