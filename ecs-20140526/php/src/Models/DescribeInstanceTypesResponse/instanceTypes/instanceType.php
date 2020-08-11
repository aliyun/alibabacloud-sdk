<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponse\instanceTypes;

use AlibabaCloud\Tea\Model;

class instanceType extends Model
{
    /**
     * @var string
     */
    public $instanceTypeId;

    /**
     * @var int
     */
    public $cpuCoreCount;

    /**
     * @var float
     */
    public $memorySize;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var int
     */
    public $localStorageCapacity;

    /**
     * @var int
     */
    public $localStorageAmount;

    /**
     * @var string
     */
    public $localStorageCategory;

    /**
     * @var int
     */
    public $GPUAmount;

    /**
     * @var string
     */
    public $GPUSpec;

    /**
     * @var int
     */
    public $initialCredit;

    /**
     * @var int
     */
    public $baselineCredit;

    /**
     * @var int
     */
    public $eniQuantity;

    /**
     * @var int
     */
    public $eniPrivateIpAddressQuantity;

    /**
     * @var int
     */
    public $eniIpv6AddressQuantity;

    /**
     * @var int
     */
    public $instanceBandwidthRx;

    /**
     * @var int
     */
    public $instanceBandwidthTx;

    /**
     * @var int
     */
    public $instancePpsRx;

    /**
     * @var int
     */
    public $instancePpsTx;

    /**
     * @var string
     */
    public $instanceFamilyLevel;

    /**
     * @var int
     */
    public $totalEniQueueQuantity;

    /**
     * @var bool
     */
    public $eniTrunkSupported;

    /**
     * @var int
     */
    public $eniTotalQuantity;
    protected $_name = [
        'instanceTypeId'              => 'InstanceTypeId',
        'cpuCoreCount'                => 'CpuCoreCount',
        'memorySize'                  => 'MemorySize',
        'instanceTypeFamily'          => 'InstanceTypeFamily',
        'localStorageCapacity'        => 'LocalStorageCapacity',
        'localStorageAmount'          => 'LocalStorageAmount',
        'localStorageCategory'        => 'LocalStorageCategory',
        'GPUAmount'                   => 'GPUAmount',
        'GPUSpec'                     => 'GPUSpec',
        'initialCredit'               => 'InitialCredit',
        'baselineCredit'              => 'BaselineCredit',
        'eniQuantity'                 => 'EniQuantity',
        'eniPrivateIpAddressQuantity' => 'EniPrivateIpAddressQuantity',
        'eniIpv6AddressQuantity'      => 'EniIpv6AddressQuantity',
        'instanceBandwidthRx'         => 'InstanceBandwidthRx',
        'instanceBandwidthTx'         => 'InstanceBandwidthTx',
        'instancePpsRx'               => 'InstancePpsRx',
        'instancePpsTx'               => 'InstancePpsTx',
        'instanceFamilyLevel'         => 'InstanceFamilyLevel',
        'totalEniQueueQuantity'       => 'TotalEniQueueQuantity',
        'eniTrunkSupported'           => 'EniTrunkSupported',
        'eniTotalQuantity'            => 'EniTotalQuantity',
    ];

    public function validate()
    {
        Model::validateRequired('instanceTypeId', $this->instanceTypeId, true);
        Model::validateRequired('cpuCoreCount', $this->cpuCoreCount, true);
        Model::validateRequired('memorySize', $this->memorySize, true);
        Model::validateRequired('instanceTypeFamily', $this->instanceTypeFamily, true);
        Model::validateRequired('localStorageCapacity', $this->localStorageCapacity, true);
        Model::validateRequired('localStorageAmount', $this->localStorageAmount, true);
        Model::validateRequired('localStorageCategory', $this->localStorageCategory, true);
        Model::validateRequired('GPUAmount', $this->GPUAmount, true);
        Model::validateRequired('GPUSpec', $this->GPUSpec, true);
        Model::validateRequired('initialCredit', $this->initialCredit, true);
        Model::validateRequired('baselineCredit', $this->baselineCredit, true);
        Model::validateRequired('eniQuantity', $this->eniQuantity, true);
        Model::validateRequired('eniPrivateIpAddressQuantity', $this->eniPrivateIpAddressQuantity, true);
        Model::validateRequired('eniIpv6AddressQuantity', $this->eniIpv6AddressQuantity, true);
        Model::validateRequired('instanceBandwidthRx', $this->instanceBandwidthRx, true);
        Model::validateRequired('instanceBandwidthTx', $this->instanceBandwidthTx, true);
        Model::validateRequired('instancePpsRx', $this->instancePpsRx, true);
        Model::validateRequired('instancePpsTx', $this->instancePpsTx, true);
        Model::validateRequired('instanceFamilyLevel', $this->instanceFamilyLevel, true);
        Model::validateRequired('totalEniQueueQuantity', $this->totalEniQueueQuantity, true);
        Model::validateRequired('eniTrunkSupported', $this->eniTrunkSupported, true);
        Model::validateRequired('eniTotalQuantity', $this->eniTotalQuantity, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeId) {
            $res['InstanceTypeId'] = $this->instanceTypeId;
        }
        if (null !== $this->cpuCoreCount) {
            $res['CpuCoreCount'] = $this->cpuCoreCount;
        }
        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
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
        if (null !== $this->GPUAmount) {
            $res['GPUAmount'] = $this->GPUAmount;
        }
        if (null !== $this->GPUSpec) {
            $res['GPUSpec'] = $this->GPUSpec;
        }
        if (null !== $this->initialCredit) {
            $res['InitialCredit'] = $this->initialCredit;
        }
        if (null !== $this->baselineCredit) {
            $res['BaselineCredit'] = $this->baselineCredit;
        }
        if (null !== $this->eniQuantity) {
            $res['EniQuantity'] = $this->eniQuantity;
        }
        if (null !== $this->eniPrivateIpAddressQuantity) {
            $res['EniPrivateIpAddressQuantity'] = $this->eniPrivateIpAddressQuantity;
        }
        if (null !== $this->eniIpv6AddressQuantity) {
            $res['EniIpv6AddressQuantity'] = $this->eniIpv6AddressQuantity;
        }
        if (null !== $this->instanceBandwidthRx) {
            $res['InstanceBandwidthRx'] = $this->instanceBandwidthRx;
        }
        if (null !== $this->instanceBandwidthTx) {
            $res['InstanceBandwidthTx'] = $this->instanceBandwidthTx;
        }
        if (null !== $this->instancePpsRx) {
            $res['InstancePpsRx'] = $this->instancePpsRx;
        }
        if (null !== $this->instancePpsTx) {
            $res['InstancePpsTx'] = $this->instancePpsTx;
        }
        if (null !== $this->instanceFamilyLevel) {
            $res['InstanceFamilyLevel'] = $this->instanceFamilyLevel;
        }
        if (null !== $this->totalEniQueueQuantity) {
            $res['TotalEniQueueQuantity'] = $this->totalEniQueueQuantity;
        }
        if (null !== $this->eniTrunkSupported) {
            $res['EniTrunkSupported'] = $this->eniTrunkSupported;
        }
        if (null !== $this->eniTotalQuantity) {
            $res['EniTotalQuantity'] = $this->eniTotalQuantity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeId'])) {
            $model->instanceTypeId = $map['InstanceTypeId'];
        }
        if (isset($map['CpuCoreCount'])) {
            $model->cpuCoreCount = $map['CpuCoreCount'];
        }
        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
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
        if (isset($map['GPUAmount'])) {
            $model->GPUAmount = $map['GPUAmount'];
        }
        if (isset($map['GPUSpec'])) {
            $model->GPUSpec = $map['GPUSpec'];
        }
        if (isset($map['InitialCredit'])) {
            $model->initialCredit = $map['InitialCredit'];
        }
        if (isset($map['BaselineCredit'])) {
            $model->baselineCredit = $map['BaselineCredit'];
        }
        if (isset($map['EniQuantity'])) {
            $model->eniQuantity = $map['EniQuantity'];
        }
        if (isset($map['EniPrivateIpAddressQuantity'])) {
            $model->eniPrivateIpAddressQuantity = $map['EniPrivateIpAddressQuantity'];
        }
        if (isset($map['EniIpv6AddressQuantity'])) {
            $model->eniIpv6AddressQuantity = $map['EniIpv6AddressQuantity'];
        }
        if (isset($map['InstanceBandwidthRx'])) {
            $model->instanceBandwidthRx = $map['InstanceBandwidthRx'];
        }
        if (isset($map['InstanceBandwidthTx'])) {
            $model->instanceBandwidthTx = $map['InstanceBandwidthTx'];
        }
        if (isset($map['InstancePpsRx'])) {
            $model->instancePpsRx = $map['InstancePpsRx'];
        }
        if (isset($map['InstancePpsTx'])) {
            $model->instancePpsTx = $map['InstancePpsTx'];
        }
        if (isset($map['InstanceFamilyLevel'])) {
            $model->instanceFamilyLevel = $map['InstanceFamilyLevel'];
        }
        if (isset($map['TotalEniQueueQuantity'])) {
            $model->totalEniQueueQuantity = $map['TotalEniQueueQuantity'];
        }
        if (isset($map['EniTrunkSupported'])) {
            $model->eniTrunkSupported = $map['EniTrunkSupported'];
        }
        if (isset($map['EniTotalQuantity'])) {
            $model->eniTotalQuantity = $map['EniTotalQuantity'];
        }

        return $model;
    }
}
