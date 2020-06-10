<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmInstanceResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description module.instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description module.versionCode
     *
     * @var string
     */
    public $versionCode;

    /**
     * @description module.expireTime
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description module.expireTimestamp
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @description module.cname
     *
     * @var string
     */
    public $cname;

    /**
     * @description module.userDomainName
     *
     * @var string
     */
    public $userDomainName;

    /**
     * @description module.ttl
     *
     * @var int
     */
    public $ttl;

    /**
     * @description module.lbaStrategy
     *
     * @var string
     */
    public $lbaStrategy;

    /**
     * @description module.createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description module.createTimestamp
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description module.alertGroup
     *
     * @var string
     */
    public $alertGroup;

    /**
     * @description module.cnameMode
     *
     * @var string
     */
    public $cnameMode;

    /**
     * @description module.accessStrategyNum
     *
     * @var int
     */
    public $accessStrategyNum;

    /**
     * @description module.addressPoolNum
     *
     * @var int
     */
    public $addressPoolNum;
    protected $_name = [
        'requestId'         => 'RequestId',
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'versionCode'       => 'VersionCode',
        'expireTime'        => 'ExpireTime',
        'expireTimestamp'   => 'ExpireTimestamp',
        'cname'             => 'Cname',
        'userDomainName'    => 'UserDomainName',
        'ttl'               => 'Ttl',
        'lbaStrategy'       => 'LbaStrategy',
        'createTime'        => 'CreateTime',
        'createTimestamp'   => 'CreateTimestamp',
        'alertGroup'        => 'AlertGroup',
        'cnameMode'         => 'CnameMode',
        'accessStrategyNum' => 'AccessStrategyNum',
        'addressPoolNum'    => 'AddressPoolNum',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('versionCode', $this->versionCode, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('expireTimestamp', $this->expireTimestamp, true);
        Model::validateRequired('cname', $this->cname, true);
        Model::validateRequired('userDomainName', $this->userDomainName, true);
        Model::validateRequired('ttl', $this->ttl, true);
        Model::validateRequired('lbaStrategy', $this->lbaStrategy, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('alertGroup', $this->alertGroup, true);
        Model::validateRequired('cnameMode', $this->cnameMode, true);
        Model::validateRequired('accessStrategyNum', $this->accessStrategyNum, true);
        Model::validateRequired('addressPoolNum', $this->addressPoolNum, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->userDomainName) {
            $res['UserDomainName'] = $this->userDomainName;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->lbaStrategy) {
            $res['LbaStrategy'] = $this->lbaStrategy;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->cnameMode) {
            $res['CnameMode'] = $this->cnameMode;
        }
        if (null !== $this->accessStrategyNum) {
            $res['AccessStrategyNum'] = $this->accessStrategyNum;
        }
        if (null !== $this->addressPoolNum) {
            $res['AddressPoolNum'] = $this->addressPoolNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmInstanceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['UserDomainName'])) {
            $model->userDomainName = $map['UserDomainName'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['LbaStrategy'])) {
            $model->lbaStrategy = $map['LbaStrategy'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['CnameMode'])) {
            $model->cnameMode = $map['CnameMode'];
        }
        if (isset($map['AccessStrategyNum'])) {
            $model->accessStrategyNum = $map['AccessStrategyNum'];
        }
        if (isset($map['AddressPoolNum'])) {
            $model->addressPoolNum = $map['AddressPoolNum'];
        }

        return $model;
    }
}
