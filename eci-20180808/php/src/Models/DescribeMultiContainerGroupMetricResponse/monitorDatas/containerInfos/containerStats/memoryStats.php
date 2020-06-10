<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\memoryStats\containerData;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats\memoryStats\hierarchicalData;
use AlibabaCloud\Tea\Model;

class memoryStats extends Model
{
    /**
     * @description usage
     *
     * @var int
     */
    public $usage;

    /**
     * @description maxUsage
     *
     * @var int
     */
    public $maxUsage;

    /**
     * @description cache
     *
     * @var int
     */
    public $cache;

    /**
     * @description rss
     *
     * @var int
     */
    public $rss;

    /**
     * @description swap
     *
     * @var int
     */
    public $swap;

    /**
     * @description workingSet
     *
     * @var int
     */
    public $workingSet;

    /**
     * @description failCnt
     *
     * @var int
     */
    public $failCnt;

    /**
     * @description containerData
     *
     * @var containerData
     */
    public $containerData;

    /**
     * @description hierarchicalData
     *
     * @var hierarchicalData
     */
    public $hierarchicalData;
    protected $_name = [
        'usage'            => 'Usage',
        'maxUsage'         => 'MaxUsage',
        'cache'            => 'Cache',
        'rss'              => 'Rss',
        'swap'             => 'Swap',
        'workingSet'       => 'WorkingSet',
        'failCnt'          => 'FailCnt',
        'containerData'    => 'ContainerData',
        'hierarchicalData' => 'HierarchicalData',
    ];

    public function validate()
    {
        Model::validateRequired('usage', $this->usage, true);
        Model::validateRequired('maxUsage', $this->maxUsage, true);
        Model::validateRequired('cache', $this->cache, true);
        Model::validateRequired('rss', $this->rss, true);
        Model::validateRequired('swap', $this->swap, true);
        Model::validateRequired('workingSet', $this->workingSet, true);
        Model::validateRequired('failCnt', $this->failCnt, true);
        Model::validateRequired('containerData', $this->containerData, true);
        Model::validateRequired('hierarchicalData', $this->hierarchicalData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->maxUsage) {
            $res['MaxUsage'] = $this->maxUsage;
        }
        if (null !== $this->cache) {
            $res['Cache'] = $this->cache;
        }
        if (null !== $this->rss) {
            $res['Rss'] = $this->rss;
        }
        if (null !== $this->swap) {
            $res['Swap'] = $this->swap;
        }
        if (null !== $this->workingSet) {
            $res['WorkingSet'] = $this->workingSet;
        }
        if (null !== $this->failCnt) {
            $res['FailCnt'] = $this->failCnt;
        }
        if (null !== $this->containerData) {
            $res['ContainerData'] = null !== $this->containerData ? $this->containerData->toMap() : null;
        }
        if (null !== $this->hierarchicalData) {
            $res['HierarchicalData'] = null !== $this->hierarchicalData ? $this->hierarchicalData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return memoryStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['MaxUsage'])) {
            $model->maxUsage = $map['MaxUsage'];
        }
        if (isset($map['Cache'])) {
            $model->cache = $map['Cache'];
        }
        if (isset($map['Rss'])) {
            $model->rss = $map['Rss'];
        }
        if (isset($map['Swap'])) {
            $model->swap = $map['Swap'];
        }
        if (isset($map['WorkingSet'])) {
            $model->workingSet = $map['WorkingSet'];
        }
        if (isset($map['FailCnt'])) {
            $model->failCnt = $map['FailCnt'];
        }
        if (isset($map['ContainerData'])) {
            $model->containerData = containerData::fromMap($map['ContainerData']);
        }
        if (isset($map['HierarchicalData'])) {
            $model->hierarchicalData = hierarchicalData::fromMap($map['HierarchicalData']);
        }

        return $model;
    }
}
