<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponse\recordLines;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponse\dnsServers;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponse\availableTtls;

class DescribeDomainInfoResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'domainId' => 'DomainId',
        'domainName' => 'DomainName',
        'punyCode' => 'PunyCode',
        'aliDomain' => 'AliDomain',
        'remark' => 'Remark',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'instanceId' => 'InstanceId',
        'versionCode' => 'VersionCode',
        'versionName' => 'VersionName',
        'minTtl' => 'MinTtl',
        'recordLineTreeJson' => 'RecordLineTreeJson',
        'lineType' => 'LineType',
        'regionLines' => 'RegionLines',
        'inBlackHole' => 'InBlackHole',
        'inClean' => 'InClean',
        'slaveDns' => 'SlaveDns',
        'recordLines' => 'RecordLines',
        'dnsServers' => 'DnsServers',
        'availableTtls' => 'AvailableTtls',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainId', $this->domainId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('punyCode', $this->punyCode, true);
        Model::validateRequired('aliDomain', $this->aliDomain, true);
        Model::validateRequired('remark', $this->remark, true);
        Model::validateRequired('groupId', $this->groupId, true);
        Model::validateRequired('groupName', $this->groupName, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('versionCode', $this->versionCode, true);
        Model::validateRequired('versionName', $this->versionName, true);
        Model::validateRequired('minTtl', $this->minTtl, true);
        Model::validateRequired('recordLineTreeJson', $this->recordLineTreeJson, true);
        Model::validateRequired('lineType', $this->lineType, true);
        Model::validateRequired('regionLines', $this->regionLines, true);
        Model::validateRequired('inBlackHole', $this->inBlackHole, true);
        Model::validateRequired('inClean', $this->inClean, true);
        Model::validateRequired('slaveDns', $this->slaveDns, true);
        Model::validateRequired('recordLines', $this->recordLines, true);
        Model::validateRequired('dnsServers', $this->dnsServers, true);
        Model::validateRequired('availableTtls', $this->availableTtls, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['DomainId'] = $this->domainId;
        $res['DomainName'] = $this->domainName;
        $res['PunyCode'] = $this->punyCode;
        $res['AliDomain'] = $this->aliDomain;
        $res['Remark'] = $this->remark;
        $res['GroupId'] = $this->groupId;
        $res['GroupName'] = $this->groupName;
        $res['InstanceId'] = $this->instanceId;
        $res['VersionCode'] = $this->versionCode;
        $res['VersionName'] = $this->versionName;
        $res['MinTtl'] = $this->minTtl;
        $res['RecordLineTreeJson'] = $this->recordLineTreeJson;
        $res['LineType'] = $this->lineType;
        $res['RegionLines'] = $this->regionLines;
        $res['InBlackHole'] = $this->inBlackHole;
        $res['InClean'] = $this->inClean;
        $res['SlaveDns'] = $this->slaveDns;
        $res['RecordLines'] = null !== $this->recordLines ? $this->recordLines->toMap() : null;
        $res['DnsServers'] = null !== $this->dnsServers ? $this->dnsServers->toMap() : null;
        $res['AvailableTtls'] = null !== $this->availableTtls ? $this->availableTtls->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeDomainInfoResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
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
        if(isset($map['MinTtl'])){
            $model->minTtl = $map['MinTtl'];
        }
        if(isset($map['RecordLineTreeJson'])){
            $model->recordLineTreeJson = $map['RecordLineTreeJson'];
        }
        if(isset($map['LineType'])){
            $model->lineType = $map['LineType'];
        }
        if(isset($map['RegionLines'])){
            $model->regionLines = $map['RegionLines'];
        }
        if(isset($map['InBlackHole'])){
            $model->inBlackHole = $map['InBlackHole'];
        }
        if(isset($map['InClean'])){
            $model->inClean = $map['InClean'];
        }
        if(isset($map['SlaveDns'])){
            $model->slaveDns = $map['SlaveDns'];
        }
        if(isset($map['RecordLines'])){
            $model->recordLines = recordLines::fromMap($map['RecordLines']);
        }
        if(isset($map['DnsServers'])){
            $model->dnsServers = dnsServers::fromMap($map['DnsServers']);
        }
        if(isset($map['AvailableTtls'])){
            $model->availableTtls = availableTtls::fromMap($map['AvailableTtls']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.domainId
     * @var string
     */
    public $domainId;

    /**
     * @description module.domainName
     * @var string
     */
    public $domainName;

    /**
     * @description module.punyCode
     * @var string
     */
    public $punyCode;

    /**
     * @description module.aliDomain
     * @var bool
     */
    public $aliDomain;

    /**
     * @description module.remark
     * @var string
     */
    public $remark;

    /**
     * @description module.groupId
     * @var string
     */
    public $groupId;

    /**
     * @description module.groupName
     * @var string
     */
    public $groupName;

    /**
     * @description module.instanceId
     * @var string
     */
    public $instanceId;

    /**
     * @description module.versionCode
     * @var string
     */
    public $versionCode;

    /**
     * @description module.versionName
     * @var string
     */
    public $versionName;

    /**
     * @description module.minTtl
     * @var integer
     */
    public $minTtl;

    /**
     * @description module.recordLineTree
     * @var string
     */
    public $recordLineTreeJson;

    /**
     * @description module.lineType
     * @var string
     */
    public $lineType;

    /**
     * @description module.regionLines
     * @var bool
     */
    public $regionLines;

    /**
     * @description module.inBlackHole
     * @var bool
     */
    public $inBlackHole;

    /**
     * @description module.inClean
     * @var bool
     */
    public $inClean;

    /**
     * @description module.slaveDns
     * @var bool
     */
    public $slaveDns;

    /**
     * @description module.recordLines
     * @var recordLines
     */
    public $recordLines;

    /**
     * @description module.dnsList
     * @var dnsServers
     */
    public $dnsServers;

    /**
     * @description module.availableTtl
     * @var availableTtls
     */
    public $availableTtls;

}
