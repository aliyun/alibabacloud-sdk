<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit;

use AlibabaCloud\Tea\Model;

class Config extends Model
{
    public $accessKeyId;
    public $accessKeySecret;
    public $type;
    public $securityToken;
    public $endpoint;
    public $protocol;
    public $regionId;
    public $readTimeout;
    public $connectTimeout;
    public $httpProxy;
    public $httpsProxy;
    public $socks5Proxy;
    public $socks5NetWork;
    public $noProxy;
    public $userAgent;
    public $maxIdleConns;
    protected $_description = [
        'accessKeyId'     => 'accessKeyId',
        'accessKeySecret' => 'accessKeySecret',
        'type'            => 'credential type',
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
    protected $_required = [
        'endpoint' => true,
        'regionId' => true,
    ];
}
