<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerSpec;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;
use AlibabaCloud\Tea\Model;

class containerInfos extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * @description labelsForPop
     *
     * @var string
     */
    public $labels;

    /**
     * @description stats
     *
     * @var array
     */
    public $containerStats;

    /**
     * @description spec
     *
     * @var containerSpec
     */
    public $containerSpec;

    /**
     * @description aliases
     *
     * @var array
     */
    public $aliases;
    protected $_name = [
        'id'             => 'Id',
        'name'           => 'Name',
        'namespace'      => 'Namespace',
        'labels'         => 'Labels',
        'containerStats' => 'ContainerStats',
        'containerSpec'  => 'ContainerSpec',
        'aliases'        => 'Aliases',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('namespace', $this->namespace, true);
        Model::validateRequired('labels', $this->labels, true);
        Model::validateRequired('containerStats', $this->containerStats, true);
        Model::validateRequired('containerSpec', $this->containerSpec, true);
        Model::validateRequired('aliases', $this->aliases, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->containerStats) {
            $res['ContainerStats'] = [];
            if (null !== $this->containerStats && \is_array($this->containerStats)) {
                $n = 0;
                foreach ($this->containerStats as $item) {
                    $res['ContainerStats'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->containerSpec) {
            $res['ContainerSpec'] = null !== $this->containerSpec ? $this->containerSpec->toMap() : null;
        }
        if (null !== $this->aliases) {
            $res['Aliases'] = [];
            if (null !== $this->aliases) {
                $res['Aliases'] = $this->aliases;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['ContainerStats'])) {
            if (!empty($map['ContainerStats'])) {
                $model->containerStats = [];
                $n                     = 0;
                foreach ($map['ContainerStats'] as $item) {
                    $model->containerStats[$n++] = null !== $item ? containerStats::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ContainerSpec'])) {
            $model->containerSpec = containerSpec::fromMap($map['ContainerSpec']);
        }
        if (isset($map['Aliases'])) {
            if (!empty($map['Aliases'])) {
                $model->aliases = [];
                $model->aliases = $map['Aliases'];
            }
        }

        return $model;
    }
}
