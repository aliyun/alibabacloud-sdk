<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifySslVpnServerResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sslVpnServerId;

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
    public $clientIpPool;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $cipher;

    /**
     * @var string
     */
    public $proto;

    /**
     * @var int
     */
    public $port;

    /**
     * @var bool
     */
    public $compress;

    /**
     * @var int
     */
    public $connections;

    /**
     * @var int
     */
    public $maxConnections;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var bool
     */
    public $enableMultiFactorAuth;

    /**
     * @var string
     */
    public $IDaaSInstanceId;
    protected $_name = [
        'requestId'             => 'RequestId',
        'regionId'              => 'RegionId',
        'sslVpnServerId'        => 'SslVpnServerId',
        'vpnGatewayId'          => 'VpnGatewayId',
        'name'                  => 'Name',
        'localSubnet'           => 'LocalSubnet',
        'clientIpPool'          => 'ClientIpPool',
        'createTime'            => 'CreateTime',
        'cipher'                => 'Cipher',
        'proto'                 => 'Proto',
        'port'                  => 'Port',
        'compress'              => 'Compress',
        'connections'           => 'Connections',
        'maxConnections'        => 'MaxConnections',
        'internetIp'            => 'InternetIp',
        'enableMultiFactorAuth' => 'EnableMultiFactorAuth',
        'IDaaSInstanceId'       => 'IDaaSInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('sslVpnServerId', $this->sslVpnServerId, true);
        Model::validateRequired('vpnGatewayId', $this->vpnGatewayId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('localSubnet', $this->localSubnet, true);
        Model::validateRequired('clientIpPool', $this->clientIpPool, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('cipher', $this->cipher, true);
        Model::validateRequired('proto', $this->proto, true);
        Model::validateRequired('port', $this->port, true);
        Model::validateRequired('compress', $this->compress, true);
        Model::validateRequired('connections', $this->connections, true);
        Model::validateRequired('maxConnections', $this->maxConnections, true);
        Model::validateRequired('internetIp', $this->internetIp, true);
        Model::validateRequired('enableMultiFactorAuth', $this->enableMultiFactorAuth, true);
        Model::validateRequired('IDaaSInstanceId', $this->IDaaSInstanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sslVpnServerId) {
            $res['SslVpnServerId'] = $this->sslVpnServerId;
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
        if (null !== $this->clientIpPool) {
            $res['ClientIpPool'] = $this->clientIpPool;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->cipher) {
            $res['Cipher'] = $this->cipher;
        }
        if (null !== $this->proto) {
            $res['Proto'] = $this->proto;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->compress) {
            $res['Compress'] = $this->compress;
        }
        if (null !== $this->connections) {
            $res['Connections'] = $this->connections;
        }
        if (null !== $this->maxConnections) {
            $res['MaxConnections'] = $this->maxConnections;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->enableMultiFactorAuth) {
            $res['EnableMultiFactorAuth'] = $this->enableMultiFactorAuth;
        }
        if (null !== $this->IDaaSInstanceId) {
            $res['IDaaSInstanceId'] = $this->IDaaSInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySslVpnServerResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SslVpnServerId'])) {
            $model->sslVpnServerId = $map['SslVpnServerId'];
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
        if (isset($map['ClientIpPool'])) {
            $model->clientIpPool = $map['ClientIpPool'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Cipher'])) {
            $model->cipher = $map['Cipher'];
        }
        if (isset($map['Proto'])) {
            $model->proto = $map['Proto'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Compress'])) {
            $model->compress = $map['Compress'];
        }
        if (isset($map['Connections'])) {
            $model->connections = $map['Connections'];
        }
        if (isset($map['MaxConnections'])) {
            $model->maxConnections = $map['MaxConnections'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['EnableMultiFactorAuth'])) {
            $model->enableMultiFactorAuth = $map['EnableMultiFactorAuth'];
        }
        if (isset($map['IDaaSInstanceId'])) {
            $model->IDaaSInstanceId = $map['IDaaSInstanceId'];
        }

        return $model;
    }
}
