<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHost\capacity;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHost\instances;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHost\networkAttributes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHost\operationLocks;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHost\supportedCustomInstanceTypeFamilies;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHost\supportedInstanceTypeFamilies;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHost\supportedInstanceTypesList;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHost\tags;
use AlibabaCloud\Tea\Model;

class dedicatedHost extends Model
{
    /**
     * @description dedicatedHostId
     *
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @description autoPlacement
     *
     * @var string
     */
    public $autoPlacement;

    /**
     * @description regionNo
     *
     * @var string
     */
    public $regionId;

    /**
     * @description izNo
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description dedicatedHostName
     *
     * @var string
     */
    public $dedicatedHostName;

    /**
     * @description machineId
     *
     * @var string
     */
    public $machineId;

    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @description hostType
     *
     * @var string
     */
    public $dedicatedHostType;

    /**
     * @description sockets
     *
     * @var int
     */
    public $sockets;

    /**
     * @description physicalCores
     *
     * @var int
     */
    public $cores;

    /**
     * @description physicalGpus
     *
     * @var int
     */
    public $physicalGpus;

    /**
     * @description gpuSpec
     *
     * @var string
     */
    public $GPUSpec;

    /**
     * @description actionOnMaintenance
     *
     * @var string
     */
    public $actionOnMaintenance;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description chargeType
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description saleCycle
     *
     * @var string
     */
    public $saleCycle;

    /**
     * @description expiredTime
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description autoReleaseTime
     *
     * @var string
     */
    public $autoReleaseTime;

    /**
     * @description resourceGroupId
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description hostInstances
     *
     * @var instances
     */
    public $instances;

    /**
     * @description operationLockTypes
     *
     * @var operationLocks
     */
    public $operationLocks;

    /**
     * @description tags
     *
     * @var tags
     */
    public $tags;

    /**
     * @description dedicatedHostCapacity
     *
     * @var capacity
     */
    public $capacity;

    /**
     * @description networkAttributes
     *
     * @var networkAttributes
     */
    public $networkAttributes;

    /**
     * @description supportInstanceTypeFamilies
     *
     * @var supportedInstanceTypeFamilies
     */
    public $supportedInstanceTypeFamilies;

    /**
     * @description supportCustomInstanceTypeFamilies
     *
     * @var supportedCustomInstanceTypeFamilies
     */
    public $supportedCustomInstanceTypeFamilies;

    /**
     * @description supportInstanceTypesList
     *
     * @var supportedInstanceTypesList
     */
    public $supportedInstanceTypesList;
    protected $_name = [
        'dedicatedHostId'                     => 'DedicatedHostId',
        'autoPlacement'                       => 'AutoPlacement',
        'regionId'                            => 'RegionId',
        'zoneId'                              => 'ZoneId',
        'dedicatedHostName'                   => 'DedicatedHostName',
        'machineId'                           => 'MachineId',
        'description'                         => 'Description',
        'dedicatedHostType'                   => 'DedicatedHostType',
        'sockets'                             => 'Sockets',
        'cores'                               => 'Cores',
        'physicalGpus'                        => 'PhysicalGpus',
        'GPUSpec'                             => 'GPUSpec',
        'actionOnMaintenance'                 => 'ActionOnMaintenance',
        'status'                              => 'Status',
        'creationTime'                        => 'CreationTime',
        'chargeType'                          => 'ChargeType',
        'saleCycle'                           => 'SaleCycle',
        'expiredTime'                         => 'ExpiredTime',
        'autoReleaseTime'                     => 'AutoReleaseTime',
        'resourceGroupId'                     => 'ResourceGroupId',
        'instances'                           => 'Instances',
        'operationLocks'                      => 'OperationLocks',
        'tags'                                => 'Tags',
        'capacity'                            => 'Capacity',
        'networkAttributes'                   => 'NetworkAttributes',
        'supportedInstanceTypeFamilies'       => 'SupportedInstanceTypeFamilies',
        'supportedCustomInstanceTypeFamilies' => 'SupportedCustomInstanceTypeFamilies',
        'supportedInstanceTypesList'          => 'SupportedInstanceTypesList',
    ];

    public function validate()
    {
        Model::validateRequired('dedicatedHostId', $this->dedicatedHostId, true);
        Model::validateRequired('autoPlacement', $this->autoPlacement, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('dedicatedHostName', $this->dedicatedHostName, true);
        Model::validateRequired('machineId', $this->machineId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('dedicatedHostType', $this->dedicatedHostType, true);
        Model::validateRequired('sockets', $this->sockets, true);
        Model::validateRequired('cores', $this->cores, true);
        Model::validateRequired('physicalGpus', $this->physicalGpus, true);
        Model::validateRequired('GPUSpec', $this->GPUSpec, true);
        Model::validateRequired('actionOnMaintenance', $this->actionOnMaintenance, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('chargeType', $this->chargeType, true);
        Model::validateRequired('saleCycle', $this->saleCycle, true);
        Model::validateRequired('expiredTime', $this->expiredTime, true);
        Model::validateRequired('autoReleaseTime', $this->autoReleaseTime, true);
        Model::validateRequired('resourceGroupId', $this->resourceGroupId, true);
        Model::validateRequired('instances', $this->instances, true);
        Model::validateRequired('operationLocks', $this->operationLocks, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('capacity', $this->capacity, true);
        Model::validateRequired('networkAttributes', $this->networkAttributes, true);
        Model::validateRequired('supportedInstanceTypeFamilies', $this->supportedInstanceTypeFamilies, true);
        Model::validateRequired('supportedCustomInstanceTypeFamilies', $this->supportedCustomInstanceTypeFamilies, true);
        Model::validateRequired('supportedInstanceTypesList', $this->supportedInstanceTypesList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }
        if (null !== $this->autoPlacement) {
            $res['AutoPlacement'] = $this->autoPlacement;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->dedicatedHostName) {
            $res['DedicatedHostName'] = $this->dedicatedHostName;
        }
        if (null !== $this->machineId) {
            $res['MachineId'] = $this->machineId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }
        if (null !== $this->sockets) {
            $res['Sockets'] = $this->sockets;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->physicalGpus) {
            $res['PhysicalGpus'] = $this->physicalGpus;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->actionOnMaintenance) {
            $res['ActionOnMaintenance'] = $this->actionOnMaintenance;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->saleCycle) {
            $res['SaleCycle'] = $this->saleCycle;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->autoReleaseTime) {
            $res['AutoReleaseTime'] = $this->autoReleaseTime;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->instances) {
            $res['Instances'] = null !== $this->instances ? $this->instances->toMap() : null;
        }
        if (null !== $this->operationLocks) {
            $res['OperationLocks'] = null !== $this->operationLocks ? $this->operationLocks->toMap() : null;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->capacity) {
            $res['Capacity'] = null !== $this->capacity ? $this->capacity->toMap() : null;
        }
        if (null !== $this->networkAttributes) {
            $res['NetworkAttributes'] = null !== $this->networkAttributes ? $this->networkAttributes->toMap() : null;
        }
        if (null !== $this->supportedInstanceTypeFamilies) {
            $res['SupportedInstanceTypeFamilies'] = null !== $this->supportedInstanceTypeFamilies ? $this->supportedInstanceTypeFamilies->toMap() : null;
        }
        if (null !== $this->supportedCustomInstanceTypeFamilies) {
            $res['SupportedCustomInstanceTypeFamilies'] = null !== $this->supportedCustomInstanceTypeFamilies ? $this->supportedCustomInstanceTypeFamilies->toMap() : null;
        }
        if (null !== $this->supportedInstanceTypesList) {
            $res['SupportedInstanceTypesList'] = null !== $this->supportedInstanceTypesList ? $this->supportedInstanceTypesList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHost
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }
        if (isset($map['AutoPlacement'])) {
            $model->autoPlacement = $map['AutoPlacement'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DedicatedHostName'])) {
            $model->dedicatedHostName = $map['DedicatedHostName'];
        }
        if (isset($map['MachineId'])) {
            $model->machineId = $map['MachineId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }
        if (isset($map['Sockets'])) {
            $model->sockets = $map['Sockets'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['PhysicalGpus'])) {
            $model->physicalGpus = $map['PhysicalGpus'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['ActionOnMaintenance'])) {
            $model->actionOnMaintenance = $map['ActionOnMaintenance'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['SaleCycle'])) {
            $model->saleCycle = $map['SaleCycle'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['AutoReleaseTime'])) {
            $model->autoReleaseTime = $map['AutoReleaseTime'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Instances'])) {
            $model->instances = instances::fromMap($map['Instances']);
        }
        if (isset($map['OperationLocks'])) {
            $model->operationLocks = operationLocks::fromMap($map['OperationLocks']);
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['Capacity'])) {
            $model->capacity = capacity::fromMap($map['Capacity']);
        }
        if (isset($map['NetworkAttributes'])) {
            $model->networkAttributes = networkAttributes::fromMap($map['NetworkAttributes']);
        }
        if (isset($map['SupportedInstanceTypeFamilies'])) {
            $model->supportedInstanceTypeFamilies = supportedInstanceTypeFamilies::fromMap($map['SupportedInstanceTypeFamilies']);
        }
        if (isset($map['SupportedCustomInstanceTypeFamilies'])) {
            $model->supportedCustomInstanceTypeFamilies = supportedCustomInstanceTypeFamilies::fromMap($map['SupportedCustomInstanceTypeFamilies']);
        }
        if (isset($map['SupportedInstanceTypesList'])) {
            $model->supportedInstanceTypesList = supportedInstanceTypesList::fromMap($map['SupportedInstanceTypesList']);
        }

        return $model;
    }
}
