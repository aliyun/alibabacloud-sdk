<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeSslVpnClientCertResponse extends Model
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
    public $sslVpnClientCertId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sslVpnServerId;

    /**
     * @var string
     */
    public $caCert;

    /**
     * @var string
     */
    public $clientCert;

    /**
     * @var string
     */
    public $clientKey;

    /**
     * @var string
     */
    public $clientConfig;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'requestId'          => 'RequestId',
        'regionId'           => 'RegionId',
        'sslVpnClientCertId' => 'SslVpnClientCertId',
        'name'               => 'Name',
        'sslVpnServerId'     => 'SslVpnServerId',
        'caCert'             => 'CaCert',
        'clientCert'         => 'ClientCert',
        'clientKey'          => 'ClientKey',
        'clientConfig'       => 'ClientConfig',
        'createTime'         => 'CreateTime',
        'endTime'            => 'EndTime',
        'status'             => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('sslVpnClientCertId', $this->sslVpnClientCertId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('sslVpnServerId', $this->sslVpnServerId, true);
        Model::validateRequired('caCert', $this->caCert, true);
        Model::validateRequired('clientCert', $this->clientCert, true);
        Model::validateRequired('clientKey', $this->clientKey, true);
        Model::validateRequired('clientConfig', $this->clientConfig, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('status', $this->status, true);
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
        if (null !== $this->sslVpnClientCertId) {
            $res['SslVpnClientCertId'] = $this->sslVpnClientCertId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sslVpnServerId) {
            $res['SslVpnServerId'] = $this->sslVpnServerId;
        }
        if (null !== $this->caCert) {
            $res['CaCert'] = $this->caCert;
        }
        if (null !== $this->clientCert) {
            $res['ClientCert'] = $this->clientCert;
        }
        if (null !== $this->clientKey) {
            $res['ClientKey'] = $this->clientKey;
        }
        if (null !== $this->clientConfig) {
            $res['ClientConfig'] = $this->clientConfig;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSslVpnClientCertResponse
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
        if (isset($map['SslVpnClientCertId'])) {
            $model->sslVpnClientCertId = $map['SslVpnClientCertId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SslVpnServerId'])) {
            $model->sslVpnServerId = $map['SslVpnServerId'];
        }
        if (isset($map['CaCert'])) {
            $model->caCert = $map['CaCert'];
        }
        if (isset($map['ClientCert'])) {
            $model->clientCert = $map['ClientCert'];
        }
        if (isset($map['ClientKey'])) {
            $model->clientKey = $map['ClientKey'];
        }
        if (isset($map['ClientConfig'])) {
            $model->clientConfig = $map['ClientConfig'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
