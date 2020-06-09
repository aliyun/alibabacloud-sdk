<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmInstancesResponse\gtmInstances;

use AlibabaCloud\Tea\Model;

class gtmInstance extends Model {
    protected $_name = [
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'cname' => 'Cname',
        'userDomainName' => 'UserDomainName',
        'versionCode' => 'VersionCode',
        'ttl' => 'Ttl',
        'lbaStrategy' => 'LbaStrategy',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'expireTime' => 'ExpireTime',
        'expireTimestamp' => 'ExpireTimestamp',
        'alertGroup' => 'AlertGroup',
        'cnameMode' => 'CnameMode',
        'accessStrategyNum' => 'AccessStrategyNum',
        'addressPoolNum' => 'AddressPoolNum',
    ];
    public function validate() {
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
    public function toMap() {
        $res = [];
        $res['InstanceId'] = $this->instanceId;
        $res['InstanceName'] = $this->instanceName;
        $res['Cname'] = $this->cname;
        $res['UserDomainName'] = $this->userDomainName;
        $res['VersionCode'] = $this->versionCode;
        $res['Ttl'] = $this->ttl;
        $res['LbaStrategy'] = $this->lbaStrategy;
        $res['CreateTime'] = $this->createTime;
        $res['CreateTimestamp'] = $this->createTimestamp;
        $res['ExpireTime'] = $this->expireTime;
        $res['ExpireTimestamp'] = $this->expireTimestamp;
        $res['AlertGroup'] = $this->alertGroup;
        $res['CnameMode'] = $this->cnameMode;
        $res['AccessStrategyNum'] = $this->accessStrategyNum;
        $res['AddressPoolNum'] = $this->addressPoolNum;
        return $res;
    }
    /**
     * @param array $map
     * @return gtmInstance
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['InstanceName'])){
            $model->instanceName = $map['InstanceName'];
        }
        if(isset($map['Cname'])){
            $model->cname = $map['Cname'];
        }
        if(isset($map['UserDomainName'])){
            $model->userDomainName = $map['UserDomainName'];
        }
        if(isset($map['VersionCode'])){
            $model->versionCode = $map['VersionCode'];
        }
        if(isset($map['Ttl'])){
            $model->ttl = $map['Ttl'];
        }
        if(isset($map['LbaStrategy'])){
            $model->lbaStrategy = $map['LbaStrategy'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['CreateTimestamp'])){
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if(isset($map['ExpireTime'])){
            $model->expireTime = $map['ExpireTime'];
        }
        if(isset($map['ExpireTimestamp'])){
            $model->expireTimestamp = $map['ExpireTimestamp'];
        }
        if(isset($map['AlertGroup'])){
            $model->alertGroup = $map['AlertGroup'];
        }
        if(isset($map['CnameMode'])){
            $model->cnameMode = $map['CnameMode'];
        }
        if(isset($map['AccessStrategyNum'])){
            $model->accessStrategyNum = $map['AccessStrategyNum'];
        }
        if(isset($map['AddressPoolNum'])){
            $model->addressPoolNum = $map['AddressPoolNum'];
        }
        return $model;
    }
    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description instanceName
     * @var string
     */
    public $instanceName;

    /**
     * @description cname
     * @var string
     */
    public $cname;

    /**
     * @description userDomainName
     * @var string
     */
    public $userDomainName;

    /**
     * @description versionCode
     * @var string
     */
    public $versionCode;

    /**
     * @description ttl
     * @var integer
     */
    public $ttl;

    /**
     * @description lbaStrategy
     * @var string
     */
    public $lbaStrategy;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description createTimestamp
     * @var integer
     */
    public $createTimestamp;

    /**
     * @description expireTime
     * @var string
     */
    public $expireTime;

    /**
     * @description expireTimestamp
     * @var integer
     */
    public $expireTimestamp;

    /**
     * @description alertGroup
     * @var string
     */
    public $alertGroup;

    /**
     * @description cnameMode
     * @var string
     */
    public $cnameMode;

    /**
     * @description accessStrategyNum
     * @var integer
     */
    public $accessStrategyNum;

    /**
     * @description addressPoolNum
     * @var integer
     */
    public $addressPoolNum;

}
