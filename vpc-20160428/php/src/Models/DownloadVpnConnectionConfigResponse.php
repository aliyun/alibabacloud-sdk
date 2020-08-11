<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DownloadVpnConnectionConfigResponse\vpnConnectionConfig;
use AlibabaCloud\Tea\Model;

class DownloadVpnConnectionConfigResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vpnConnectionConfig
     */
    public $vpnConnectionConfig;
    protected $_name = [
        'requestId'           => 'RequestId',
        'vpnConnectionConfig' => 'VpnConnectionConfig',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('vpnConnectionConfig', $this->vpnConnectionConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vpnConnectionConfig) {
            $res['VpnConnectionConfig'] = null !== $this->vpnConnectionConfig ? $this->vpnConnectionConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DownloadVpnConnectionConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VpnConnectionConfig'])) {
            $model->vpnConnectionConfig = vpnConnectionConfig::fromMap($map['VpnConnectionConfig']);
        }

        return $model;
    }
}
