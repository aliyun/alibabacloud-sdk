<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponse\vpnConnectionConfig\ikeConfig;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponse\vpnConnectionConfig\ipsecConfig;
use AlibabaCloud\Tea\Model;

class vpnConnectionConfig extends Model
{
    /**
     * @var string
     */
    public $localSubnet;

    /**
     * @var string
     */
    public $remoteSubnet;

    /**
     * @var string
     */
    public $local;

    /**
     * @var string
     */
    public $remote;

    /**
     * @var ikeConfig
     */
    public $ikeConfig;

    /**
     * @var ipsecConfig
     */
    public $ipsecConfig;
    protected $_name = [
        'localSubnet'  => 'LocalSubnet',
        'remoteSubnet' => 'RemoteSubnet',
        'local'        => 'Local',
        'remote'       => 'Remote',
        'ikeConfig'    => 'IkeConfig',
        'ipsecConfig'  => 'IpsecConfig',
    ];

    public function validate()
    {
        Model::validateRequired('localSubnet', $this->localSubnet, true);
        Model::validateRequired('remoteSubnet', $this->remoteSubnet, true);
        Model::validateRequired('local', $this->local, true);
        Model::validateRequired('remote', $this->remote, true);
        Model::validateRequired('ikeConfig', $this->ikeConfig, true);
        Model::validateRequired('ipsecConfig', $this->ipsecConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localSubnet) {
            $res['LocalSubnet'] = $this->localSubnet;
        }
        if (null !== $this->remoteSubnet) {
            $res['RemoteSubnet'] = $this->remoteSubnet;
        }
        if (null !== $this->local) {
            $res['Local'] = $this->local;
        }
        if (null !== $this->remote) {
            $res['Remote'] = $this->remote;
        }
        if (null !== $this->ikeConfig) {
            $res['IkeConfig'] = null !== $this->ikeConfig ? $this->ikeConfig->toMap() : null;
        }
        if (null !== $this->ipsecConfig) {
            $res['IpsecConfig'] = null !== $this->ipsecConfig ? $this->ipsecConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnConnectionConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalSubnet'])) {
            $model->localSubnet = $map['LocalSubnet'];
        }
        if (isset($map['RemoteSubnet'])) {
            $model->remoteSubnet = $map['RemoteSubnet'];
        }
        if (isset($map['Local'])) {
            $model->local = $map['Local'];
        }
        if (isset($map['Remote'])) {
            $model->remote = $map['Remote'];
        }
        if (isset($map['IkeConfig'])) {
            $model->ikeConfig = ikeConfig::fromMap($map['IkeConfig']);
        }
        if (isset($map['IpsecConfig'])) {
            $model->ipsecConfig = ipsecConfig::fromMap($map['IpsecConfig']);
        }

        return $model;
    }
}
