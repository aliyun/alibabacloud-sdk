<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesResponse\gtmInstances;

use AlibabaCloud\Tea\Model;

class gtmInstance extends Model
{
    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description instanceName
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description cname
     *
     * @var string
     */
    public $cname;

    /**
     * @description userDomainName
     *
     * @var string
     */
    public $userDomainName;

    /**
     * @description versionCode
     *
     * @var string
     */
    public $versionCode;

    /**
     * @description ttl
     *
     * @var int
     */
    public $ttl;

    /**
     * @description lbaStrategy
     *
     * @var string
     */
    public $lbaStrategy;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description createTimestamp
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description expireTime
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description expireTimestamp
     *
     * @var int
     */
    public $expireTimestamp;

    /**
     * @description alertGroup
     *
     * @var string
     */
    public $alertGroup;

    /**
     * @description cnameMode
     *
     * @var string
     */
    public $cnameMode;

    /**
     * @description accessStrategyNum
     *
     * @var int
     */
    public $accessStrategyNum;

    /**
     * @description addressPoolNum
     *
     * @var int
     */
    public $addressPoolNum;
    protected $_name = [
        'instanceId'        => 'InstanceId',
        'instanceName'      => 'InstanceName',
        'cname'             => 'Cname',
        'userDomainName'    => 'UserDomainName',
        'versionCode'       => 'VersionCode',
        'ttl'               => 'Ttl',
        'lbaStrategy'       => 'LbaStrategy',
        'createTime'        => 'CreateTime',
        'createTimestamp'   => 'CreateTimestamp',
        'expireTime'        => 'ExpireTime',
        'expireTimestamp'   => 'ExpireTimestamp',
        'alertGroup'        => 'AlertGroup',
        'cnameMode'         => 'CnameMode',
        'accessStrategyNum' => 'AccessStrategyNum',
        'addressPoolNum'    => 'AddressPoolNum',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('cname', $this->cname, true);
        Model::validateRequired('userDomainName', $this->userDomainName, true);
        Model::validateRequired('versionCode', $this->versionCode, true);
        Model::validateRequired('ttl', $this->ttl, true);
        Model::validateRequired('lbaStrategy', $this->lbaStrategy, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('expireTimestamp', $this->expireTimestamp, true);
        Model::validateRequired('alertGroup', $this->alertGroup, true);
        Model::validateRequired('cnameMode', $this->cnameMode, true);
        Model::validateRequired('accessStrategyNum', $this->accessStrategyNum, true);
        Model::validateRequired('addressPoolNum', $this->addressPoolNum, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->userDomainName) {
            $res['UserDomainName'] = $this->userDomainName;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
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
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->expireTimestamp) {
            $res['ExpireTimestamp'] = $this->expireTimestamp;
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
     * @return gtmInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['UserDomainName'])) {
            $model->userDomainName = $map['UserDomainName'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
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
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['ExpireTimestamp'])) {
            $model->expireTimestamp = $map['ExpireTimestamp'];
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
