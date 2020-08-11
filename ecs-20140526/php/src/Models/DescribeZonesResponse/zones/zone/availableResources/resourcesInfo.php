<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResources;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResources\resourcesInfo\dataDiskCategories;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResources\resourcesInfo\instanceGenerations;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResources\resourcesInfo\instanceTypeFamilies;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResources\resourcesInfo\instanceTypes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResources\resourcesInfo\networkTypes;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeZonesResponse\zones\zone\availableResources\resourcesInfo\systemDiskCategories;
use AlibabaCloud\Tea\Model;

class resourcesInfo extends Model
{
    /**
     * @var bool
     */
    public $ioOptimized;

    /**
     * @var systemDiskCategories
     */
    public $systemDiskCategories;

    /**
     * @var dataDiskCategories
     */
    public $dataDiskCategories;

    /**
     * @var networkTypes
     */
    public $networkTypes;

    /**
     * @var instanceTypes
     */
    public $instanceTypes;

    /**
     * @var instanceTypeFamilies
     */
    public $instanceTypeFamilies;

    /**
     * @var instanceGenerations
     */
    public $instanceGenerations;
    protected $_name = [
        'ioOptimized'          => 'IoOptimized',
        'systemDiskCategories' => 'SystemDiskCategories',
        'dataDiskCategories'   => 'DataDiskCategories',
        'networkTypes'         => 'NetworkTypes',
        'instanceTypes'        => 'InstanceTypes',
        'instanceTypeFamilies' => 'InstanceTypeFamilies',
        'instanceGenerations'  => 'InstanceGenerations',
    ];

    public function validate()
    {
        Model::validateRequired('ioOptimized', $this->ioOptimized, true);
        Model::validateRequired('systemDiskCategories', $this->systemDiskCategories, true);
        Model::validateRequired('dataDiskCategories', $this->dataDiskCategories, true);
        Model::validateRequired('networkTypes', $this->networkTypes, true);
        Model::validateRequired('instanceTypes', $this->instanceTypes, true);
        Model::validateRequired('instanceTypeFamilies', $this->instanceTypeFamilies, true);
        Model::validateRequired('instanceGenerations', $this->instanceGenerations, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->systemDiskCategories) {
            $res['SystemDiskCategories'] = null !== $this->systemDiskCategories ? $this->systemDiskCategories->toMap() : null;
        }
        if (null !== $this->dataDiskCategories) {
            $res['DataDiskCategories'] = null !== $this->dataDiskCategories ? $this->dataDiskCategories->toMap() : null;
        }
        if (null !== $this->networkTypes) {
            $res['NetworkTypes'] = null !== $this->networkTypes ? $this->networkTypes->toMap() : null;
        }
        if (null !== $this->instanceTypes) {
            $res['InstanceTypes'] = null !== $this->instanceTypes ? $this->instanceTypes->toMap() : null;
        }
        if (null !== $this->instanceTypeFamilies) {
            $res['InstanceTypeFamilies'] = null !== $this->instanceTypeFamilies ? $this->instanceTypeFamilies->toMap() : null;
        }
        if (null !== $this->instanceGenerations) {
            $res['InstanceGenerations'] = null !== $this->instanceGenerations ? $this->instanceGenerations->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcesInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['SystemDiskCategories'])) {
            $model->systemDiskCategories = systemDiskCategories::fromMap($map['SystemDiskCategories']);
        }
        if (isset($map['DataDiskCategories'])) {
            $model->dataDiskCategories = dataDiskCategories::fromMap($map['DataDiskCategories']);
        }
        if (isset($map['NetworkTypes'])) {
            $model->networkTypes = networkTypes::fromMap($map['NetworkTypes']);
        }
        if (isset($map['InstanceTypes'])) {
            $model->instanceTypes = instanceTypes::fromMap($map['InstanceTypes']);
        }
        if (isset($map['InstanceTypeFamilies'])) {
            $model->instanceTypeFamilies = instanceTypeFamilies::fromMap($map['InstanceTypeFamilies']);
        }
        if (isset($map['InstanceGenerations'])) {
            $model->instanceGenerations = instanceGenerations::fromMap($map['InstanceGenerations']);
        }

        return $model;
    }
}
