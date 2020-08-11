<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponse\vpnConnections;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponse\vpnConnections\vpnConnection\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponse\vpnConnections\vpnConnection\ipsecConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponse\vpnConnections\vpnConnection\vcoHealthCheck;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnConnectionsResponse\vpnConnections\vpnConnection\vpnBgpConfig;
use AlibabaCloud\Tea\Model;

class vpnConnection extends Model
{
    /**
     * @var string
     */
    public $vpnConnectionId;

    /**
     * @var string
     */
    public $customerGatewayId;

    /**
     * @var string
     */
    public $vpnGatewayId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $localSubnet;

    /**
     * @var string
     */
    public $remoteSubnet;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $effectImmediately;

    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $enableDpd;

    /**
     * @var bool
     */
    public $enableNatTraversal;

    /**
     * @var ikeConfig
     */
    public $ikeConfig;

    /**
     * @var ipsecConfig
     */
    public $ipsecConfig;

    /**
     * @var vcoHealthCheck
     */
    public $vcoHealthCheck;

    /**
     * @var vpnBgpConfig
     */
    public $vpnBgpConfig;
    protected $_name = [
        'vpnConnectionId'    => 'VpnConnectionId',
        'customerGatewayId'  => 'CustomerGatewayId',
        'vpnGatewayId'       => 'VpnGatewayId',
        'name'               => 'Name',
        'localSubnet'        => 'LocalSubnet',
        'remoteSubnet'       => 'RemoteSubnet',
        'createTime'         => 'CreateTime',
        'effectImmediately'  => 'EffectImmediately',
        'status'             => 'Status',
        'enableDpd'          => 'EnableDpd',
        'enableNatTraversal' => 'EnableNatTraversal',
        'ikeConfig'          => 'IkeConfig',
        'ipsecConfig'        => 'IpsecConfig',
        'vcoHealthCheck'     => 'VcoHealthCheck',
        'vpnBgpConfig'       => 'VpnBgpConfig',
    ];

    public function validate()
    {
        Model::validateRequired('vpnConnectionId', $this->vpnConnectionId, true);
        Model::validateRequired('customerGatewayId', $this->customerGatewayId, true);
        Model::validateRequired('vpnGatewayId', $this->vpnGatewayId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('localSubnet', $this->localSubnet, true);
        Model::validateRequired('remoteSubnet', $this->remoteSubnet, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('effectImmediately', $this->effectImmediately, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('enableDpd', $this->enableDpd, true);
        Model::validateRequired('enableNatTraversal', $this->enableNatTraversal, true);
        Model::validateRequired('ikeConfig', $this->ikeConfig, true);
        Model::validateRequired('ipsecConfig', $this->ipsecConfig, true);
        Model::validateRequired('vcoHealthCheck', $this->vcoHealthCheck, true);
        Model::validateRequired('vpnBgpConfig', $this->vpnBgpConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpnConnectionId) {
            $res['VpnConnectionId'] = $this->vpnConnectionId;
        }
        if (null !== $this->customerGatewayId) {
            $res['CustomerGatewayId'] = $this->customerGatewayId;
        }
        if (null !== $this->vpnGatewayId) {
            $res['VpnGatewayId'] = $this->vpnGatewayId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->remoteSubnet) {
            $res['RemoteSubnet'] = $this->remoteSubnet;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->effectImmediately) {
            $res['EffectImmediately'] = $this->effectImmediately;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->enableDpd) {
            $res['EnableDpd'] = $this->enableDpd;
        }
        if (null !== $this->enableNatTraversal) {
            $res['EnableNatTraversal'] = $this->enableNatTraversal;
        }
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = null !== $this->ikeConfig ? $this->ikeConfig->toMap() : null;
        }
        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = null !== $this->ipsecConfig ? $this->ipsecConfig->toMap() : null;
        }
        if (null !== $this->vcoHealthCheck) {
            $res['VcoHealthCheck'] = null !== $this->vcoHealthCheck ? $this->vcoHealthCheck->toMap() : null;
        }
        if (null !== $this->vpnBgpConfig) {
            $res['VpnBgpConfig'] = null !== $this->vpnBgpConfig ? $this->vpnBgpConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnConnection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpnConnectionId'])) {
            $model->vpnConnectionId = $map['VpnConnectionId'];
        }
        if (isset($map['CustomerGatewayId'])) {
            $model->customerGatewayId = $map['CustomerGatewayId'];
        }
        if (isset($map['VpnGatewayId'])) {
            $model->vpnGatewayId = $map['VpnGatewayId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['RemoteSubnet'])) {
            $model->remoteSubnet = $map['RemoteSubnet'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EffectImmediately'])) {
            $model->effectImmediately = $map['EffectImmediately'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['EnableDpd'])) {
            $model->enableDpd = $map['EnableDpd'];
        }
        if (isset($map['EnableNatTraversal'])) {
            $model->enableNatTraversal = $map['EnableNatTraversal'];
        }
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = ikeConfig::fromMap($map['IkeConfig']);
        }
        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = ipsecConfig::fromMap($map['IpsecConfig']);
        }
        if (isset($map['VcoHealthCheck'])) {
            $model->vcoHealthCheck = vcoHealthCheck::fromMap($map['VcoHealthCheck']);
        }
        if (isset($map['VpnBgpConfig'])) {
            $model->vpnBgpConfig = vpnBgpConfig::fromMap($map['VpnBgpConfig']);
        }

        return $model;
    }
}
