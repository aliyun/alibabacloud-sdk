<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponse\domains;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponse\domains\domain\tags;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponse\domains\domain\dnsServers;

class domain extends Model {
    protected $_name = [
        'domainId' => 'DomainId',
        'domainName' => 'DomainName',
        'punyCode' => 'PunyCode',
        'aliDomain' => 'AliDomain',
        'recordCount' => 'RecordCount',
        'registrantEmail' => 'RegistrantEmail',
        'remark' => 'Remark',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'instanceId' => 'InstanceId',
        'versionCode' => 'VersionCode',
        'versionName' => 'VersionName',
        'instanceEndTime' => 'InstanceEndTime',
        'instanceExpired' => 'InstanceExpired',
        'starmark' => 'Starmark',
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'tags' => 'Tags',
        'dnsServers' => 'DnsServers',
    ];
    public function validate() {
        Model::validateRequired('domainId', $this->domainId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('punyCode', $this->punyCode, true);
        Model::validateRequired('aliDomain', $this->aliDomain, true);
        Model::validateRequired('recordCount', $this->recordCount, true);
        Model::validateRequired('registrantEmail', $this->registrantEmail, true);
        Model::validateRequired('remark', $this->remark, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('versionCode', $this->versionCode, true);
        Model::validateRequired('versionName', $this->versionName, true);
        Model::validateRequired('instanceEndTime', $this->instanceEndTime, true);
        Model::validateRequired('instanceExpired', $this->instanceExpired, true);
        Model::validateRequired('starmark', $this->starmark, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('createTimestamp', $this->createTimestamp, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('dnsServers', $this->dnsServers, true);
    }
    public function toMap() {
        $res = [];
        $res['DomainId'] = $this->domainId;
        $res['DomainName'] = $this->domainName;
        $res['PunyCode'] = $this->punyCode;
        $res['AliDomain'] = $this->aliDomain;
        $res['RecordCount'] = $this->recordCount;
        $res['RegistrantEmail'] = $this->registrantEmail;
        $res['Remark'] = $this->remark;
        $res['GroupId'] = $this->groupId;
        $res['GroupName'] = $this->groupName;
        $res['InstanceId'] = $this->instanceId;
        $res['VersionCode'] = $this->versionCode;
        $res['VersionName'] = $this->versionName;
        $res['InstanceEndTime'] = $this->instanceEndTime;
        $res['InstanceExpired'] = $this->instanceExpired;
        $res['Starmark'] = $this->starmark;
        $res['CreateTime'] = $this->createTime;
        $res['CreateTimestamp'] = $this->createTimestamp;
        $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        $res['DnsServers'] = null !== $this->dnsServers ? $this->dnsServers->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return domain
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DomainId'])){
            $model->domainId = $map['DomainId'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['PunyCode'])){
            $model->punyCode = $map['PunyCode'];
        }
        if(isset($map['AliDomain'])){
            $model->aliDomain = $map['AliDomain'];
        }
        if(isset($map['RecordCount'])){
            $model->recordCount = $map['RecordCount'];
        }
        if(isset($map['RegistrantEmail'])){
            $model->registrantEmail = $map['RegistrantEmail'];
        }
        if(isset($map['Remark'])){
            $model->remark = $map['Remark'];
        }
        if(isset($map['GroupId'])){
            $model->groupId = $map['GroupId'];
        }
        if(isset($map['GroupName'])){
            $model->groupName = $map['GroupName'];
        }
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['VersionCode'])){
            $model->versionCode = $map['VersionCode'];
        }
        if(isset($map['VersionName'])){
            $model->versionName = $map['VersionName'];
        }
        if(isset($map['InstanceEndTime'])){
            $model->instanceEndTime = $map['InstanceEndTime'];
        }
        if(isset($map['InstanceExpired'])){
            $model->instanceExpired = $map['InstanceExpired'];
        }
        if(isset($map['Starmark'])){
            $model->starmark = $map['Starmark'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['CreateTimestamp'])){
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if(isset($map['Tags'])){
            $model->tags = tags::fromMap($map['Tags']);
        }
        if(isset($map['DnsServers'])){
            $model->dnsServers = dnsServers::fromMap($map['DnsServers']);
        }
        return $model;
    }
    /**
     * @description domainId
     * @var string
     */
    public $domainId;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description punyCode
     * @var string
     */
    public $punyCode;

    /**
     * @description aliDomain
     * @var bool
     */
    public $aliDomain;

    /**
     * @description recordCount
     * @var integer
     */
    public $recordCount;

    /**
     * @description registrantEmail
     * @var string
     */
    public $registrantEmail;

    /**
     * @description remark
     * @var string
     */
    public $remark;

    /**
     * @description groupId
     * @var string
     */
    public $groupId;

    /**
     * @description groupName
     * @var string
     */
    public $groupName;

    /**
     * @description instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description versionCode
     * @var string
     */
    public $versionCode;

    /**
     * @description versionName
     * @var string
     */
    public $versionName;

    /**
     * @description instanceEndTime
     * @var string
     */
    public $instanceEndTime;

    /**
     * @description instanceExpired
     * @var bool
     */
    public $instanceExpired;

    /**
     * @description starmark
     * @var bool
     */
    public $starmark;

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
     * @description tags
     * @var tags
     */
    public $tags;

    /**
     * @description dnsList
     * @var dnsServers
     */
    public $dnsServers;

}
