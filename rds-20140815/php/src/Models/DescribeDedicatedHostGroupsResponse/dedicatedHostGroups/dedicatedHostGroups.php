<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponse\dedicatedHostGroups;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostGroupsResponse\dedicatedHostGroups\dedicatedHostGroups\zoneIDList;
use AlibabaCloud\Tea\Model;

class dedicatedHostGroups extends Model
{
    /**
     * @description dedicatedHostGroupId
     *
     * @var string
     */
    public $dedicatedHostGroupId;

    /**
     * @description dedicatedHostGroupDesc
     *
     * @var string
     */
    public $dedicatedHostGroupDesc;

    /**
     * @description cpuAllocationRatio
     *
     * @var int
     */
    public $cpuAllocationRatio;

    /**
     * @description memAllocationRatio
     *
     * @var int
     */
    public $memAllocationRatio;

    /**
     * @description diskAllocationRatio
     *
     * @var int
     */
    public $diskAllocationRatio;

    /**
     * @description allocationPolicy
     *
     * @var string
     */
    public $allocationPolicy;

    /**
     * @description hostReplacePolicy
     *
     * @var string
     */
    public $hostReplacePolicy;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description vpcId
     *
     * @var string
     */
    public $VPCId;

    /**
     * @description hostNumber
     *
     * @var int
     */
    public $hostNumber;

    /**
     * @description instanceNumber
     *
     * @var int
     */
    public $instanceNumber;

    /**
     * @description engine
     *
     * @var string
     */
    public $engine;

    /**
     * @description text
     *
     * @var string
     */
    public $text;

    /**
     * @description dedicatedHostCountGroupByHostType
     *
     * @var array
     */
    public $dedicatedHostCountGroupByHostType;

    /**
     * @description bastionInstanceId
     *
     * @var string
     */
    public $bastionInstanceId;

    /**
     * @description openPermission
     *
     * @var string
     */
    public $openPermission;

    /**
     * @description zoneIDList
     *
     * @var zoneIDList
     */
    public $zoneIDList;
    protected $_name = [
        'dedicatedHostGroupId'              => 'DedicatedHostGroupId',
        'dedicatedHostGroupDesc'            => 'DedicatedHostGroupDesc',
        'cpuAllocationRatio'                => 'CpuAllocationRatio',
        'memAllocationRatio'                => 'MemAllocationRatio',
        'diskAllocationRatio'               => 'DiskAllocationRatio',
        'allocationPolicy'                  => 'AllocationPolicy',
        'hostReplacePolicy'                 => 'HostReplacePolicy',
        'createTime'                        => 'CreateTime',
        'VPCId'                             => 'VPCId',
        'hostNumber'                        => 'HostNumber',
        'instanceNumber'                    => 'InstanceNumber',
        'engine'                            => 'Engine',
        'text'                              => 'Text',
        'dedicatedHostCountGroupByHostType' => 'DedicatedHostCountGroupByHostType',
        'bastionInstanceId'                 => 'BastionInstanceId',
        'openPermission'                    => 'OpenPermission',
        'zoneIDList'                        => 'ZoneIDList',
    ];

    public function validate()
    {
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

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostGroupId) {
            $res['DedicatedHostGroupId'] = $this->dedicatedHostGroupId;
        }
        if (null !== $this->dedicatedHostGroupDesc) {
            $res['DedicatedHostGroupDesc'] = $this->dedicatedHostGroupDesc;
        }
        if (null !== $this->cpuAllocationRatio) {
            $res['CpuAllocationRatio'] = $this->cpuAllocationRatio;
        }
        if (null !== $this->memAllocationRatio) {
            $res['MemAllocationRatio'] = $this->memAllocationRatio;
        }
        if (null !== $this->diskAllocationRatio) {
            $res['DiskAllocationRatio'] = $this->diskAllocationRatio;
        }
        if (null !== $this->allocationPolicy) {
            $res['AllocationPolicy'] = $this->allocationPolicy;
        }
        if (null !== $this->hostReplacePolicy) {
            $res['HostReplacePolicy'] = $this->hostReplacePolicy;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }
        if (null !== $this->hostNumber) {
            $res['HostNumber'] = $this->hostNumber;
        }
        if (null !== $this->instanceNumber) {
            $res['InstanceNumber'] = $this->instanceNumber;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->dedicatedHostCountGroupByHostType) {
            $res['DedicatedHostCountGroupByHostType'] = $this->dedicatedHostCountGroupByHostType;
        }
        if (null !== $this->bastionInstanceId) {
            $res['BastionInstanceId'] = $this->bastionInstanceId;
        }
        if (null !== $this->openPermission) {
            $res['OpenPermission'] = $this->openPermission;
        }
        if (null !== $this->zoneIDList) {
            $res['ZoneIDList'] = null !== $this->zoneIDList ? $this->zoneIDList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostGroupId'])) {
            $model->dedicatedHostGroupId = $map['DedicatedHostGroupId'];
        }
        if (isset($map['DedicatedHostGroupDesc'])) {
            $model->dedicatedHostGroupDesc = $map['DedicatedHostGroupDesc'];
        }
        if (isset($map['CpuAllocationRatio'])) {
            $model->cpuAllocationRatio = $map['CpuAllocationRatio'];
        }
        if (isset($map['MemAllocationRatio'])) {
            $model->memAllocationRatio = $map['MemAllocationRatio'];
        }
        if (isset($map['DiskAllocationRatio'])) {
            $model->diskAllocationRatio = $map['DiskAllocationRatio'];
        }
        if (isset($map['AllocationPolicy'])) {
            $model->allocationPolicy = $map['AllocationPolicy'];
        }
        if (isset($map['HostReplacePolicy'])) {
            $model->hostReplacePolicy = $map['HostReplacePolicy'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }
        if (isset($map['HostNumber'])) {
            $model->hostNumber = $map['HostNumber'];
        }
        if (isset($map['InstanceNumber'])) {
            $model->instanceNumber = $map['InstanceNumber'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['DedicatedHostCountGroupByHostType'])) {
            $model->dedicatedHostCountGroupByHostType = $map['DedicatedHostCountGroupByHostType'];
        }
        if (isset($map['BastionInstanceId'])) {
            $model->bastionInstanceId = $map['BastionInstanceId'];
        }
        if (isset($map['OpenPermission'])) {
            $model->openPermission = $map['OpenPermission'];
        }
        if (isset($map['ZoneIDList'])) {
            $model->zoneIDList = zoneIDList::fromMap($map['ZoneIDList']);
        }

        return $model;
    }
}
