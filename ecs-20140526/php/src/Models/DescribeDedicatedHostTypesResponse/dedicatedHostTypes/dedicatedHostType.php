<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponse\dedicatedHostTypes;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponse\dedicatedHostTypes\dedicatedHostType\supportedInstanceTypeFamilies;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostTypesResponse\dedicatedHostTypes\dedicatedHostType\supportedInstanceTypesList;
use AlibabaCloud\Tea\Model;

class dedicatedHostType extends Model
{
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
     * @description cores
     *
     * @var int
     */
    public $totalVcpus;

    /**
     * @description vgpus
     *
     * @var int
     */
    public $totalVgpus;

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
     * @description memGB
     *
     * @var float
     */
    public $memorySize;

    /**
     * @description diskSize
     *
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @description diskNum
     *
     * @var int
     */
    public $localStorageAmount;

    /**
     * @description dataDiskCategory
     *
     * @var string
     */
    public $localStorageCategory;

    /**
     * @description gpuSpec
     *
     * @var string
     */
    public $GPUSpec;

    /**
     * @description supportInstanceTypeFamilies
     *
     * @var supportedInstanceTypeFamilies
     */
    public $supportedInstanceTypeFamilies;

    /**
     * @description supportInstanceTypesList
     *
     * @var supportedInstanceTypesList
     */
    public $supportedInstanceTypesList;
    protected $_name = [
        'dedicatedHostType'             => 'DedicatedHostType',
        'sockets'                       => 'Sockets',
        'totalVcpus'                    => 'TotalVcpus',
        'totalVgpus'                    => 'TotalVgpus',
        'cores'                         => 'Cores',
        'physicalGpus'                  => 'PhysicalGpus',
        'memorySize'                    => 'MemorySize',
        'localStorageCapacity'          => 'LocalStorageCapacity',
        'localStorageAmount'            => 'LocalStorageAmount',
        'localStorageCategory'          => 'LocalStorageCategory',
        'GPUSpec'                       => 'GPUSpec',
        'supportedInstanceTypeFamilies' => 'SupportedInstanceTypeFamilies',
        'supportedInstanceTypesList'    => 'SupportedInstanceTypesList',
    ];

    public function validate()
    {
        Model::validateRequired('dedicatedHostType', $this->dedicatedHostType, true);
        Model::validateRequired('sockets', $this->sockets, true);
        Model::validateRequired('totalVcpus', $this->totalVcpus, true);
        Model::validateRequired('totalVgpus', $this->totalVgpus, true);
        Model::validateRequired('cores', $this->cores, true);
        Model::validateRequired('physicalGpus', $this->physicalGpus, true);
        Model::validateRequired('memorySize', $this->memorySize, true);
        Model::validateRequired('localStorageCapacity', $this->localStorageCapacity, true);
        Model::validateRequired('localStorageAmount', $this->localStorageAmount, true);
        Model::validateRequired('localStorageCategory', $this->localStorageCategory, true);
        Model::validateRequired('GPUSpec', $this->GPUSpec, true);
        Model::validateRequired('supportedInstanceTypeFamilies', $this->supportedInstanceTypeFamilies, true);
        Model::validateRequired('supportedInstanceTypesList', $this->supportedInstanceTypesList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostType) {
            $res['DedicatedHostType'] = $this->dedicatedHostType;
        }
        if (null !== $this->sockets) {
            $res['Sockets'] = $this->sockets;
        }
        if (null !== $this->totalVcpus) {
            $res['TotalVcpus'] = $this->totalVcpus;
        }
        if (null !== $this->totalVgpus) {
            $res['TotalVgpus'] = $this->totalVgpus;
        }
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->physicalGpus) {
            $res['PhysicalGpus'] = $this->physicalGpus;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->localStorageCapacity) {
            $res['LocalStorageCapacity'] = $this->localStorageCapacity;
        }
        if (null !== $this->localStorageAmount) {
            $res['LocalStorageAmount'] = $this->localStorageAmount;
        }
        if (null !== $this->localStorageCategory) {
            $res['LocalStorageCategory'] = $this->localStorageCategory;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->supportedInstanceTypeFamilies) {
            $res['SupportedInstanceTypeFamilies'] = null !== $this->supportedInstanceTypeFamilies ? $this->supportedInstanceTypeFamilies->toMap() : null;
        }
        if (null !== $this->supportedInstanceTypesList) {
            $res['SupportedInstanceTypesList'] = null !== $this->supportedInstanceTypesList ? $this->supportedInstanceTypesList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostType'])) {
            $model->dedicatedHostType = $map['DedicatedHostType'];
        }
        if (isset($map['Sockets'])) {
            $model->sockets = $map['Sockets'];
        }
        if (isset($map['TotalVcpus'])) {
            $model->totalVcpus = $map['TotalVcpus'];
        }
        if (isset($map['TotalVgpus'])) {
            $model->totalVgpus = $map['TotalVgpus'];
        }
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['PhysicalGpus'])) {
            $model->physicalGpus = $map['PhysicalGpus'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['LocalStorageCapacity'])) {
            $model->localStorageCapacity = $map['LocalStorageCapacity'];
        }
        if (isset($map['LocalStorageAmount'])) {
            $model->localStorageAmount = $map['LocalStorageAmount'];
        }
        if (isset($map['LocalStorageCategory'])) {
            $model->localStorageCategory = $map['LocalStorageCategory'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['SupportedInstanceTypeFamilies'])) {
            $model->supportedInstanceTypeFamilies = supportedInstanceTypeFamilies::fromMap($map['SupportedInstanceTypeFamilies']);
        }
        if (isset($map['SupportedInstanceTypesList'])) {
            $model->supportedInstanceTypesList = supportedInstanceTypesList::fromMap($map['SupportedInstanceTypesList']);
        }

        return $model;
    }
}
