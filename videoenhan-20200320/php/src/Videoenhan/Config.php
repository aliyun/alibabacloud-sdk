<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Videoenhan;

use AlibabaCloud\Tea\Model;

class Config extends Model
{
    public $accessKeyId;
    public $accessKeySecret;
    public $type;
    public $securityToken;
    /**
     * @var string
     */
    public $endpoint;
    public $protocol;
    /**
     * @var string
     */
    public $regionId;
    public $userAgent;
    public $readTimeout;
    public $connectTimeout;
    public $httpProxy;
    public $httpsProxy;
    public $noProxy;
    public $socks5Proxy;
    public $socks5NetWork;
    public $maxIdleConns;
    public $endpointType;
    public $openPlatformEndpoint;

    public function validate()
    {
        Model::validateRequired('endpoint', $this->endpoint, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['accessKeyId']          = $this->accessKeyId;
        $res['accessKeySecret']      = $this->accessKeySecret;
        $res['type']                 = $this->type;
        $res['securityToken']        = $this->securityToken;
        $res['endpoint']             = $this->endpoint;
        $res['protocol']             = $this->protocol;
        $res['regionId']             = $this->regionId;
        $res['userAgent']            = $this->userAgent;
        $res['readTimeout']          = $this->readTimeout;
        $res['connectTimeout']       = $this->connectTimeout;
        $res['httpProxy']            = $this->httpProxy;
        $res['httpsProxy']           = $this->httpsProxy;
        $res['noProxy']              = $this->noProxy;
        $res['socks5Proxy']          = $this->socks5Proxy;
        $res['socks5NetWork']        = $this->socks5NetWork;
        $res['maxIdleConns']         = $this->maxIdleConns;
        $res['endpointType']         = $this->endpointType;
        $res['openPlatformEndpoint'] = $this->openPlatformEndpoint;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accessKeyId'])) {
            $model->accessKeyId = $map['accessKeyId'];
        }
        if (isset($map['accessKeySecret'])) {
            $model->accessKeySecret = $map['accessKeySecret'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['securityToken'])) {
            $model->securityToken = $map['securityToken'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['userAgent'])) {
            $model->userAgent = $map['userAgent'];
        }
        if (isset($map['readTimeout'])) {
            $model->readTimeout = $map['readTimeout'];
        }
        if (isset($map['connectTimeout'])) {
            $model->connectTimeout = $map['connectTimeout'];
        }
        if (isset($map['httpProxy'])) {
            $model->httpProxy = $map['httpProxy'];
        }
        if (isset($map['httpsProxy'])) {
            $model->httpsProxy = $map['httpsProxy'];
        }
        if (isset($map['noProxy'])) {
            $model->noProxy = $map['noProxy'];
        }
        if (isset($map['socks5Proxy'])) {
            $model->socks5Proxy = $map['socks5Proxy'];
        }
        if (isset($map['socks5NetWork'])) {
            $model->socks5NetWork = $map['socks5NetWork'];
        }
        if (isset($map['maxIdleConns'])) {
            $model->maxIdleConns = $map['maxIdleConns'];
        }
        if (isset($map['endpointType'])) {
            $model->endpointType = $map['endpointType'];
        }
        if (isset($map['openPlatformEndpoint'])) {
            $model->openPlatformEndpoint = $map['openPlatformEndpoint'];
        }

        return $model;
    }
}
