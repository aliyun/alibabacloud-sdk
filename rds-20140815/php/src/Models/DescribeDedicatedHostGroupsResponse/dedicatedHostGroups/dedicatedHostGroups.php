<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponse\dedicatedHostGroups;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponse\dedicatedHostGroups\dedicatedHostGroups\zoneIDList;

class dedicatedHostGroups extends Model {
    protected $_name = [
        'dedicatedHostGroupId' => 'DedicatedHostGroupId',
        'dedicatedHostGroupDesc' => 'DedicatedHostGroupDesc',
        'cpuAllocationRatio' => 'CpuAllocationRatio',
        'memAllocationRatio' => 'MemAllocationRatio',
        'diskAllocationRatio' => 'DiskAllocationRatio',
        'allocationPolicy' => 'AllocationPolicy',
        'hostReplacePolicy' => 'HostReplacePolicy',
        'createTime' => 'CreateTime',
        'VPCId' => 'VPCId',
        'hostNumber' => 'HostNumber',
        'instanceNumber' => 'InstanceNumber',
        'engine' => 'Engine',
        'text' => 'Text',
        'dedicatedHostCountGroupByHostType' => 'DedicatedHostCountGroupByHostType',
        'bastionInstanceId' => 'BastionInstanceId',
        'openPermission' => 'OpenPermission',
        'zoneIDList' => 'ZoneIDList',
    ];
    public function validate() {
        Model::validateRequired('dedicatedHostGroupId', $this->dedicatedHostGroupId, true);
        Model::validateRequired('dedicatedHostGroupDesc', $this->dedicatedHostGroupDesc, true);
        Model::validateRequired('cpuAllocationRatio', $this->cpuAllocationRatio, true);
        Model::validateRequired('memAllocationRatio', $this->memAllocationRatio, true);
        Model::validateRequired('diskAllocationRatio', $this->diskAllocationRatio, true);
        Model::validateRequired('allocationPolicy', $this->allocationPolicy, true);
        Model::validateRequired('hostReplacePolicy', $this->hostReplacePolicy, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('VPCId', $this->VPCId, true);
        Model::validateRequired('hostNumber', $this->hostNumber, true);
        Model::validateRequired('instanceNumber', $this->instanceNumber, true);
        Model::validateRequired('engine', $this->engine, true);
        Model::validateRequired('text', $this->text, true);
        Model::validateRequired('dedicatedHostCountGroupByHostType', $this->dedicatedHostCountGroupByHostType, true);
        Model::validateRequired('bastionInstanceId', $this->bastionInstanceId, true);
        Model::validateRequired('openPermission', $this->openPermission, true);
        Model::validateRequired('zoneIDList', $this->zoneIDList, true);
    }
    public function toMap() {
        $res = [];
        $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        $res['DedicatedHostGroupDesc'] = $this->dedicatedHostGroupDesc;
        $res['CpuAllocationRatio'] = $this->cpuAllocationRatio;
        $res['MemAllocationRatio'] = $this->memAllocationRatio;
        $res['DiskAllocationRatio'] = $this->diskAllocationRatio;
        $res['AllocationPolicy'] = $this->allocationPolicy;
        $res['HostReplacePolicy'] = $this->hostReplacePolicy;
        $res['CreateTime'] = $this->createTime;
        $res['VPCId'] = $this->VPCId;
        $res['HostNumber'] = $this->hostNumber;
        $res['InstanceNumber'] = $this->instanceNumber;
        $res['Engine'] = $this->engine;
        $res['Text'] = $this->text;
        $res['DedicatedHostCountGroupByHostType'] = $this->dedicatedHostCountGroupByHostType;
        $res['BastionInstanceId'] = $this->bastionInstanceId;
        $res['OpenPermission'] = $this->openPermission;
        $res['ZoneIDList'] = null !== $this->zoneIDList ? $this->zoneIDList->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return dedicatedHostGroups
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DedicatedHostGroupId'])){
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if(isset($map['DedicatedHostGroupDesc'])){
            $model->dedicatedHostGroupDesc = $map['DedicatedHostGroupDesc'];
        }
        if(isset($map['CpuAllocationRatio'])){
            $model->cpuAllocationRatio = $map['CpuAllocationRatio'];
        }
        if(isset($map['MemAllocationRatio'])){
            $model->memAllocationRatio = $map['MemAllocationRatio'];
        }
        if(isset($map['DiskAllocationRatio'])){
            $model->diskAllocationRatio = $map['DiskAllocationRatio'];
        }
        if(isset($map['AllocationPolicy'])){
            $model->allocationPolicy = $map['AllocationPolicy'];
        }
        if(isset($map['HostReplacePolicy'])){
            $model->hostReplacePolicy = $map['HostReplacePolicy'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['VPCId'])){
            $model->VPCId = $map['VPCId'];
        }
        if(isset($map['HostNumber'])){
            $model->hostNumber = $map['HostNumber'];
        }
        if(isset($map['InstanceNumber'])){
            $model->instanceNumber = $map['InstanceNumber'];
        }
        if(isset($map['Engine'])){
            $model->engine = $map['Engine'];
        }
        if(isset($map['Text'])){
            $model->text = $map['Text'];
        }
        if(isset($map['DedicatedHostCountGroupByHostType'])){
            $model->dedicatedHostCountGroupByHostType = $map['DedicatedHostCountGroupByHostType'];
        }
        if(isset($map['BastionInstanceId'])){
            $model->bastionInstanceId = $map['BastionInstanceId'];
        }
        if(isset($map['OpenPermission'])){
            $model->openPermission = $map['OpenPermission'];
        }
        if(isset($map['ZoneIDList'])){
            $model->zoneIDList = zoneIDList::fromMap($map['ZoneIDList']);
        }
        return $model;
    }
    /**
     * @description dedicatedHostGroupId
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description dedicatedHostGroupDesc
     * @var string
     */
    public $dedicatedHostGroupDesc;

    /**
     * @description cpuAllocationRatio
     * @var integer
     */
    public $cpuAllocationRatio;

    /**
     * @description memAllocationRatio
     * @var integer
     */
    public $memAllocationRatio;

    /**
     * @description diskAllocationRatio
     * @var integer
     */
    public $diskAllocationRatio;

    /**
     * @description allocationPolicy
     * @var string
     */
    public $allocationPolicy;

    /**
     * @description hostReplacePolicy
     * @var string
     */
    public $hostReplacePolicy;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description vpcId
     * @var string
     */
    public $VPCId;

    /**
     * @description hostNumber
     * @var integer
     */
    public $hostNumber;

    /**
     * @description instanceNumber
     * @var integer
     */
    public $instanceNumber;

    /**
     * @description engine
     * @var string
     */
    public $engine;

    /**
     * @description text
     * @var string
     */
    public $text;

    /**
     * @description dedicatedHostCountGroupByHostType
     * @var array
     */
    public $dedicatedHostCountGroupByHostType;

    /**
     * @description bastionInstanceId
     * @var string
     */
    public $bastionInstanceId;

    /**
     * @description openPermission
     * @var string
     */
    public $openPermission;

    /**
     * @description zoneIDList
     * @var zoneIDList
     */
    public $zoneIDList;

}
