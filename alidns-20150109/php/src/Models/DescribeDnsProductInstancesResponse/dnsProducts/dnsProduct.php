<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsProductInstancesResponse\dnsProducts;

use AlibabaCloud\Tea\Model;

class dnsProduct extends Model {
    protected $_name = [
        'instanceId' => 'InstanceId',
        'versionCode' => 'VersionCode',
        'versionName' => 'VersionName',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'startTimestamp' => 'StartTimestamp',
        'endTimestamp' => 'EndTimestamp',
        'domain' => 'Domain',
        'bindCount' => 'BindCount',
        'bindUsedCount' => 'BindUsedCount',
        'TTLMinValue' => 'TTLMinValue',
        'subDomainLevel' => 'SubDomainLevel',
        'dnsSLBCount' => 'DnsSLBCount',
        'URLForwardCount' => 'URLForwardCount',
        'DDosDefendFlow' => 'DDosDefendFlow',
        'DDosDefendQuery' => 'DDosDefendQuery',
        'overseaDDosDefendFlow' => 'OverseaDDosDefendFlow',
        'searchEngineLines' => 'SearchEngineLines',
        'ISPLines' => 'ISPLines',
        'ISPRegionLines' => 'ISPRegionLines',
        'overseaLine' => 'OverseaLine',
        'monitorNodeCount' => 'MonitorNodeCount',
        'monitorFrequency' => 'MonitorFrequency',
        'monitorTaskCount' => 'MonitorTaskCount',
        'regionLines' => 'RegionLines',
        'gslb' => 'Gslb',
        'inClean' => 'InClean',
        'inBlackHole' => 'InBlackHole',
        'bindDomainCount' => 'BindDomainCount',
        'bindDomainUsedCount' => 'BindDomainUsedCount',
        'dnsSecurity' => 'DnsSecurity',
    ];
    public function validate() {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('versionCode', $this->versionCode, true);
        Model::validateRequired('versionName', $this->versionName, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('startTimestamp', $this->startTimestamp, true);
        Model::validateRequired('endTimestamp', $this->endTimestamp, true);
        Model::validateRequired('domain', $this->domain, true);
        Model::validateRequired('bindCount', $this->bindCount, true);
        Model::validateRequired('bindUsedCount', $this->bindUsedCount, true);
        Model::validateRequired('TTLMinValue', $this->TTLMinValue, true);
        Model::validateRequired('subDomainLevel', $this->subDomainLevel, true);
        Model::validateRequired('dnsSLBCount', $this->dnsSLBCount, true);
        Model::validateRequired('URLForwardCount', $this->URLForwardCount, true);
        Model::validateRequired('DDosDefendFlow', $this->DDosDefendFlow, true);
        Model::validateRequired('DDosDefendQuery', $this->DDosDefendQuery, true);
        Model::validateRequired('overseaDDosDefendFlow', $this->overseaDDosDefendFlow, true);
        Model::validateRequired('searchEngineLines', $this->searchEngineLines, true);
        Model::validateRequired('ISPLines', $this->ISPLines, true);
        Model::validateRequired('ISPRegionLines', $this->ISPRegionLines, true);
        Model::validateRequired('overseaLine', $this->overseaLine, true);
        Model::validateRequired('monitorNodeCount', $this->monitorNodeCount, true);
        Model::validateRequired('monitorFrequency', $this->monitorFrequency, true);
        Model::validateRequired('monitorTaskCount', $this->monitorTaskCount, true);
        Model::validateRequired('regionLines', $this->regionLines, true);
        Model::validateRequired('gslb', $this->gslb, true);
        Model::validateRequired('inClean', $this->inClean, true);
        Model::validateRequired('inBlackHole', $this->inBlackHole, true);
        Model::validateRequired('bindDomainCount', $this->bindDomainCount, true);
        Model::validateRequired('bindDomainUsedCount', $this->bindDomainUsedCount, true);
        Model::validateRequired('dnsSecurity', $this->dnsSecurity, true);
    }
    public function toMap() {
        $res = [];
        $res['InstanceId'] = $this->instanceId;
        $res['VersionCode'] = $this->versionCode;
        $res['VersionName'] = $this->versionName;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['StartTimestamp'] = $this->startTimestamp;
        $res['EndTimestamp'] = $this->endTimestamp;
        $res['Domain'] = $this->domain;
        $res['BindCount'] = $this->bindCount;
        $res['BindUsedCount'] = $this->bindUsedCount;
        $res['TTLMinValue'] = $this->TTLMinValue;
        $res['SubDomainLevel'] = $this->subDomainLevel;
        $res['DnsSLBCount'] = $this->dnsSLBCount;
        $res['URLForwardCount'] = $this->URLForwardCount;
        $res['DDosDefendFlow'] = $this->DDosDefendFlow;
        $res['DDosDefendQuery'] = $this->DDosDefendQuery;
        $res['OverseaDDosDefendFlow'] = $this->overseaDDosDefendFlow;
        $res['SearchEngineLines'] = $this->searchEngineLines;
        $res['ISPLines'] = $this->ISPLines;
        $res['ISPRegionLines'] = $this->ISPRegionLines;
        $res['OverseaLine'] = $this->overseaLine;
        $res['MonitorNodeCount'] = $this->monitorNodeCount;
        $res['MonitorFrequency'] = $this->monitorFrequency;
        $res['MonitorTaskCount'] = $this->monitorTaskCount;
        $res['RegionLines'] = $this->regionLines;
        $res['Gslb'] = $this->gslb;
        $res['InClean'] = $this->inClean;
        $res['InBlackHole'] = $this->inBlackHole;
        $res['BindDomainCount'] = $this->bindDomainCount;
        $res['BindDomainUsedCount'] = $this->bindDomainUsedCount;
        $res['DnsSecurity'] = $this->dnsSecurity;
        return $res;
    }
    /**
     * @param array $map
     * @return dnsProduct
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['InstanceId'])){
            $model->instanceId = $map['InstanceId'];
        }
        if(isset($map['VersionCode'])){
            $model->versionCode = $map['VersionCode'];
        }
        if(isset($map['VersionName'])){
            $model->versionName = $map['VersionName'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['StartTimestamp'])){
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if(isset($map['EndTimestamp'])){
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if(isset($map['Domain'])){
            $model->domain = $map['Domain'];
        }
        if(isset($map['BindCount'])){
            $model->bindCount = $map['BindCount'];
        }
        if(isset($map['BindUsedCount'])){
            $model->bindUsedCount = $map['BindUsedCount'];
        }
        if(isset($map['TTLMinValue'])){
            $model->TTLMinValue = $map['TTLMinValue'];
        }
        if(isset($map['SubDomainLevel'])){
            $model->subDomainLevel = $map['SubDomainLevel'];
        }
        if(isset($map['DnsSLBCount'])){
            $model->dnsSLBCount = $map['DnsSLBCount'];
        }
        if(isset($map['URLForwardCount'])){
            $model->URLForwardCount = $map['URLForwardCount'];
        }
        if(isset($map['DDosDefendFlow'])){
            $model->DDosDefendFlow = $map['DDosDefendFlow'];
        }
        if(isset($map['DDosDefendQuery'])){
            $model->DDosDefendQuery = $map['DDosDefendQuery'];
        }
        if(isset($map['OverseaDDosDefendFlow'])){
            $model->overseaDDosDefendFlow = $map['OverseaDDosDefendFlow'];
        }
        if(isset($map['SearchEngineLines'])){
            $model->searchEngineLines = $map['SearchEngineLines'];
        }
        if(isset($map['ISPLines'])){
            $model->ISPLines = $map['ISPLines'];
        }
        if(isset($map['ISPRegionLines'])){
            $model->ISPRegionLines = $map['ISPRegionLines'];
        }
        if(isset($map['OverseaLine'])){
            $model->overseaLine = $map['OverseaLine'];
        }
        if(isset($map['MonitorNodeCount'])){
            $model->monitorNodeCount = $map['MonitorNodeCount'];
        }
        if(isset($map['MonitorFrequency'])){
            $model->monitorFrequency = $map['MonitorFrequency'];
        }
        if(isset($map['MonitorTaskCount'])){
            $model->monitorTaskCount = $map['MonitorTaskCount'];
        }
        if(isset($map['RegionLines'])){
            $model->regionLines = $map['RegionLines'];
        }
        if(isset($map['Gslb'])){
            $model->gslb = $map['Gslb'];
        }
        if(isset($map['InClean'])){
            $model->inClean = $map['InClean'];
        }
        if(isset($map['InBlackHole'])){
            $model->inBlackHole = $map['InBlackHole'];
        }
        if(isset($map['BindDomainCount'])){
            $model->bindDomainCount = $map['BindDomainCount'];
        }
        if(isset($map['BindDomainUsedCount'])){
            $model->bindDomainUsedCount = $map['BindDomainUsedCount'];
        }
        if(isset($map['DnsSecurity'])){
            $model->dnsSecurity = $map['DnsSecurity'];
        }
        return $model;
    }
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
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description startTimestamp
     * @var integer
     */
    public $startTimestamp;

    /**
     * @description endTimestamp
     * @var integer
     */
    public $endTimestamp;

    /**
     * @description domain
     * @var string
     */
    public $domain;

    /**
     * @description bindCount
     * @var integer
     */
    public $bindCount;

    /**
     * @description bindUsedCount
     * @var integer
     */
    public $bindUsedCount;

    /**
     * @description ttlMinValue
     * @var integer
     */
    public $TTLMinValue;

    /**
     * @description subDomainLevel
     * @var integer
     */
    public $subDomainLevel;

    /**
     * @description dnsSLBCount
     * @var integer
     */
    public $dnsSLBCount;

    /**
     * @description urlForwardCount
     * @var integer
     */
    public $URLForwardCount;

    /**
     * @description ddosDefendFlow
     * @var integer
     */
    public $DDosDefendFlow;

    /**
     * @description ddosDefendQuery
     * @var integer
     */
    public $DDosDefendQuery;

    /**
     * @description overseaDDosDefendFlow
     * @var integer
     */
    public $overseaDDosDefendFlow;

    /**
     * @description searchEngineLines
     * @var string
     */
    public $searchEngineLines;

    /**
     * @description ispLines
     * @var string
     */
    public $ISPLines;

    /**
     * @description ispRegionLines
     * @var string
     */
    public $ISPRegionLines;

    /**
     * @description overseaLine
     * @var string
     */
    public $overseaLine;

    /**
     * @description monitorNodeCount
     * @var integer
     */
    public $monitorNodeCount;

    /**
     * @description monitorFrequency
     * @var integer
     */
    public $monitorFrequency;

    /**
     * @description monitorTaskCount
     * @var integer
     */
    public $monitorTaskCount;

    /**
     * @description regionLines
     * @var bool
     */
    public $regionLines;

    /**
     * @description gslb
     * @var bool
     */
    public $gslb;

    /**
     * @description inClean
     * @var bool
     */
    public $inClean;

    /**
     * @description inBlackHole
     * @var bool
     */
    public $inBlackHole;

    /**
     * @description bindDomainCount
     * @var integer
     */
    public $bindDomainCount;

    /**
     * @description bindDomainUsedCount
     * @var integer
     */
    public $bindDomainUsedCount;

    /**
     * @description dnsSecurity
     * @var string
     */
    public $dnsSecurity;

}
