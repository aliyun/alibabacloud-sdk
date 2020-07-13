<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class AccessHDMInstanceRequest extends Model
{
    /**
     * @description Uid
     *
     * @var string
     */
    public $uid;

    /**
     * @description accessKey
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description signature
     *
     * @var string
     */
    public $signature;

    /**
     * @description timestamp
     *
     * @var string
     */
    public $timestamp;

    /**
     * @description __context
     *
     * @var string
     */
    public $context;

    /**
     * @description __skipAuth
     *
     * @var string
     */
    public $skipAuth;

    /**
     * @description UserId
     *
     * @var string
     */
    public $userId;

    /**
     * @description InstanceArea
     *
     * @var string
     */
    public $instanceArea;

    /**
     * @description InstanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Ip
     *
     * @var string
     */
    public $ip;

    /**
     * @description Port
     *
     * @var string
     */
    public $port;

    /**
     * @description Engine
     *
     * @var string
     */
    public $engine;

    /**
     * @description Username
     *
     * @var string
     */
    public $username;

    /**
     * @description Password
     *
     * @var string
     */
    public $password;

    /**
     * @description InstanceAlias
     *
     * @var string
     */
    public $instanceAlias;

    /**
     * @description NetworkType
     *
     * @var string
     */
    public $networkType;

    /**
     * @description VpcId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description Region
     *
     * @var string
     */
    public $region;

    /**
     * @description CallerBid
     *
     * @var string
     */
    public $callerBid;

    /**
     * @description TenantId
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description OwnerIdSignature
     *
     * @var string
     */
    public $ownerIdSignature;

    /**
     * @description CallerType
     *
     * @var string
     */
    public $callerType;

    /**
     * @description CallerUid
     *
     * @var string
     */
    public $callerUid;

    /**
     * @description Target
     *
     * @var string
     */
    public $target;

    /**
     * @description Product
     *
     * @var string
     */
    public $product;

    /**
     * @description External
     *
     * @var string
     */
    public $external;
    protected $_name = [
        'uid'              => 'Uid',
        'accessKey'        => 'accessKey',
        'signature'        => 'signature',
        'timestamp'        => 'timestamp',
        'context'          => '__context',
        'skipAuth'         => 'skipAuth',
        'userId'           => 'UserId',
        'instanceArea'     => 'InstanceArea',
        'instanceId'       => 'InstanceId',
        'ip'               => 'Ip',
        'port'             => 'Port',
        'engine'           => 'Engine',
        'username'         => 'Username',
        'password'         => 'Password',
        'instanceAlias'    => 'InstanceAlias',
        'networkType'      => 'NetworkType',
        'vpcId'            => 'VpcId',
        'region'           => 'Region',
        'callerBid'        => 'CallerBid',
        'tenantId'         => 'TenantId',
        'ownerIdSignature' => 'OwnerIdSignature',
        'callerType'       => 'CallerType',
        'callerUid'        => 'CallerUid',
        'target'           => 'Target',
        'product'          => 'Product',
        'external'         => 'External',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->accessKey) {
            $res['accessKey'] = $this->accessKey;
        }
        if (null !== $this->signature) {
            $res['signature'] = $this->signature;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->context) {
            $res['__context'] = $this->context;
        }
        if (null !== $this->skipAuth) {
            $res['skipAuth'] = $this->skipAuth;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->instanceArea) {
            $res['InstanceArea'] = $this->instanceArea;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->instanceAlias) {
            $res['InstanceAlias'] = $this->instanceAlias;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->callerBid) {
            $res['CallerBid'] = $this->callerBid;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->ownerIdSignature) {
            $res['OwnerIdSignature'] = $this->ownerIdSignature;
        }
        if (null !== $this->callerType) {
            $res['CallerType'] = $this->callerType;
        }
        if (null !== $this->callerUid) {
            $res['CallerUid'] = $this->callerUid;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->external) {
            $res['External'] = $this->external;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AccessHDMInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['accessKey'])) {
            $model->accessKey = $map['accessKey'];
        }
        if (isset($map['signature'])) {
            $model->signature = $map['signature'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }
        if (isset($map['__context'])) {
            $model->context = $map['__context'];
        }
        if (isset($map['skipAuth'])) {
            $model->skipAuth = $map['skipAuth'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['InstanceArea'])) {
            $model->instanceArea = $map['InstanceArea'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['InstanceAlias'])) {
            $model->instanceAlias = $map['InstanceAlias'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['CallerBid'])) {
            $model->callerBid = $map['CallerBid'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['OwnerIdSignature'])) {
            $model->ownerIdSignature = $map['OwnerIdSignature'];
        }
        if (isset($map['CallerType'])) {
            $model->callerType = $map['CallerType'];
        }
        if (isset($map['CallerUid'])) {
            $model->callerUid = $map['CallerUid'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['External'])) {
            $model->external = $map['External'];
        }

        return $model;
    }
}
