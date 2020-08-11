<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableDedicatedHostTypes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableDiskCategories;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableInstanceTypes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResourceCreation;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResources;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableVolumeCategories;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\dedicatedHostGenerations;
use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var availableResources
     */
    public $availableResources;

    /**
     * @var availableResourceCreation
     */
    public $availableResourceCreation;

    /**
     * @var availableDiskCategories
     */
    public $availableDiskCategories;

    /**
     * @var availableInstanceTypes
     */
    public $availableInstanceTypes;

    /**
     * @var availableVolumeCategories
     */
    public $availableVolumeCategories;

    /**
     * @var availableDedicatedHostTypes
     */
    public $availableDedicatedHostTypes;

    /**
     * @var dedicatedHostGenerations
     */
    public $dedicatedHostGenerations;
    protected $_name = [
        'zoneId'                      => 'ZoneId',
        'localName'                   => 'LocalName',
        'availableResources'          => 'AvailableResources',
        'availableResourceCreation'   => 'AvailableResourceCreation',
        'availableDiskCategories'     => 'AvailableDiskCategories',
        'availableInstanceTypes'      => 'AvailableInstanceTypes',
        'availableVolumeCategories'   => 'AvailableVolumeCategories',
        'availableDedicatedHostTypes' => 'AvailableDedicatedHostTypes',
        'dedicatedHostGenerations'    => 'DedicatedHostGenerations',
    ];

    public function validate()
    {
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('localName', $this->localName, true);
        Model::validateRequired('availableResources', $this->availableResources, true);
        Model::validateRequired('availableResourceCreation', $this->availableResourceCreation, true);
        Model::validateRequired('availableDiskCategories', $this->availableDiskCategories, true);
        Model::validateRequired('availableInstanceTypes', $this->availableInstanceTypes, true);
        Model::validateRequired('availableVolumeCategories', $this->availableVolumeCategories, true);
        Model::validateRequired('availableDedicatedHostTypes', $this->availableDedicatedHostTypes, true);
        Model::validateRequired('dedicatedHostGenerations', $this->dedicatedHostGenerations, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->availableResources) {
            $res['AvailableResources'] = null !== $this->availableResources ? $this->availableResources->toMap() : null;
        }
        if (null !== $this->availableResourceCreation) {
            $res['AvailableResourceCreation'] = null !== $this->availableResourceCreation ? $this->availableResourceCreation->toMap() : null;
        }
        if (null !== $this->availableDiskCategories) {
            $res['AvailableDiskCategories'] = null !== $this->availableDiskCategories ? $this->availableDiskCategories->toMap() : null;
        }
        if (null !== $this->availableInstanceTypes) {
            $res['AvailableInstanceTypes'] = null !== $this->availableInstanceTypes ? $this->availableInstanceTypes->toMap() : null;
        }
        if (null !== $this->availableVolumeCategories) {
            $res['AvailableVolumeCategories'] = null !== $this->availableVolumeCategories ? $this->availableVolumeCategories->toMap() : null;
        }
        if (null !== $this->availableDedicatedHostTypes) {
            $res['AvailableDedicatedHostTypes'] = null !== $this->availableDedicatedHostTypes ? $this->availableDedicatedHostTypes->toMap() : null;
        }
        if (null !== $this->dedicatedHostGenerations) {
            $res['DedicatedHostGenerations'] = null !== $this->dedicatedHostGenerations ? $this->dedicatedHostGenerations->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['AvailableResources'])) {
            $model->availableResources = availableResources::fromMap($map['AvailableResources']);
        }
        if (isset($map['AvailableResourceCreation'])) {
            $model->availableResourceCreation = availableResourceCreation::fromMap($map['AvailableResourceCreation']);
        }
        if (isset($map['AvailableDiskCategories'])) {
            $model->availableDiskCategories = availableDiskCategories::fromMap($map['AvailableDiskCategories']);
        }
        if (isset($map['AvailableInstanceTypes'])) {
            $model->availableInstanceTypes = availableInstanceTypes::fromMap($map['AvailableInstanceTypes']);
        }
        if (isset($map['AvailableVolumeCategories'])) {
            $model->availableVolumeCategories = availableVolumeCategories::fromMap($map['AvailableVolumeCategories']);
        }
        if (isset($map['AvailableDedicatedHostTypes'])) {
            $model->availableDedicatedHostTypes = availableDedicatedHostTypes::fromMap($map['AvailableDedicatedHostTypes']);
        }
        if (isset($map['DedicatedHostGenerations'])) {
            $model->dedicatedHostGenerations = dedicatedHostGenerations::fromMap($map['DedicatedHostGenerations']);
        }

        return $model;
    }
}
