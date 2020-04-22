<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit;

use AlibabaCloud\Tea\Model;

class Config extends Model
{
    /**
     * @description accessKeyId
     *
     * @var string
     */
    public $accessKeyId;

    /**
     * @description accessKeySecret
     *
     * @var string
     */
    public $accessKeySecret;

    /**
     * @description credential type
     *
     * @var string
     */
    public $type;

    /**
     * @description securityToken
     *
     * @var string
     */
    public $securityToken;

    /**
     * @description endpoint
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description protocol
     *
     * @var string
     */
    public $protocol;

    /**
     * @description regionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description read timeout
     *
     * @var int
     */
    public $readTimeout;

    /**
     * @description connect timeout
     *
     * @var int
     */
    public $connectTimeout;

    /**
     * @description http proxy
     *
     * @var string
     */
    public $httpProxy;

    /**
     * @description https proxy
     *
     * @var string
     */
    public $httpsProxy;

    /**
     * @description socks5 proxy
     *
     * @var string
     */
    public $socks5Proxy;

    /**
     * @description socks5 NetWork
     *
     * @var string
     */
    public $socks5NetWork;

    /**
     * @description no proxy
     *
     * @var string
     */
    public $noProxy;

    /**
     * @description userAgent
     *
     * @var string
     */
    public $userAgent;

    /**
     * @description maxIdleConns
     *
     * @var int
     */
    public $maxIdleConns;
    protected $_name = [
        'accessKeyId'     => 'accessKeyId',
        'accessKeySecret' => 'accessKeySecret',
        'type'            => 'type',
        'securityToken'   => 'securityToken',
        'endpoint'        => 'endpoint',
        'protocol'        => 'protocol',
        'regionId'        => 'regionId',
        'readTimeout'     => 'read timeout',
        'connectTimeout'  => 'connect timeout',
        'httpProxy'       => 'http proxy',
        'httpsProxy'      => 'https proxy',
        'socks5Proxy'     => 'socks5 proxy',
        'socks5NetWork'   => 'socks5 NetWork',
        'noProxy'         => 'no proxy',
        'userAgent'       => 'userAgent',
        'maxIdleConns'    => 'maxIdleConns',
    ];

    public function validate()
    {
        Model::validateRequired('endpoint', $this->endpoint, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res                    = [];
        $res['accessKeyId']     = $this->accessKeyId;
        $res['accessKeySecret'] = $this->accessKeySecret;
        $res['type']            = $this->type;
        $res['securityToken']   = $this->securityToken;
        $res['endpoint']        = $this->endpoint;
        $res['protocol']        = $this->protocol;
        $res['regionId']        = $this->regionId;
        $res['read timeout']    = $this->readTimeout;
        $res['connect timeout'] = $this->connectTimeout;
        $res['http proxy']      = $this->httpProxy;
        $res['https proxy']     = $this->httpsProxy;
        $res['socks5 proxy']    = $this->socks5Proxy;
        $res['socks5 NetWork']  = $this->socks5NetWork;
        $res['no proxy']        = $this->noProxy;
        $res['userAgent']       = $this->userAgent;
        $res['maxIdleConns']    = $this->maxIdleConns;

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
        if (isset($map['read timeout'])) {
            $model->readTimeout = $map['read timeout'];
        }
        if (isset($map['connect timeout'])) {
            $model->connectTimeout = $map['connect timeout'];
        }
        if (isset($map['http proxy'])) {
            $model->httpProxy = $map['http proxy'];
        }
        if (isset($map['https proxy'])) {
            $model->httpsProxy = $map['https proxy'];
        }
        if (isset($map['socks5 proxy'])) {
            $model->socks5Proxy = $map['socks5 proxy'];
        }
        if (isset($map['socks5 NetWork'])) {
            $model->socks5NetWork = $map['socks5 NetWork'];
        }
        if (isset($map['no proxy'])) {
            $model->noProxy = $map['no proxy'];
        }
        if (isset($map['userAgent'])) {
            $model->userAgent = $map['userAgent'];
        }
        if (isset($map['maxIdleConns'])) {
            $model->maxIdleConns = $map['maxIdleConns'];
        }

        return $model;
    }
}
