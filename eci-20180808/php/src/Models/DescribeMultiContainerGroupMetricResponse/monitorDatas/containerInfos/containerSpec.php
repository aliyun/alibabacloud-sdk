<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerSpec\containerCpu;
use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerSpec\containerMemory;
use AlibabaCloud\Tea\Model;

class containerSpec extends Model
{
    /**
     * @description creationTime
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description hasCpu
     *
     * @var bool
     */
    public $hasCpu;

    /**
     * @description hasMemory
     *
     * @var bool
     */
    public $hasMemory;

    /**
     * @description hasNetwork
     *
     * @var bool
     */
    public $hasNetwork;

    /**
     * @description hasFilesystem
     *
     * @var bool
     */
    public $hasFilesystem;

    /**
     * @description hasDiskIo
     *
     * @var bool
     */
    public $hasDiskIo;

    /**
     * @description hasCustomMetrics
     *
     * @var bool
     */
    public $hasCustomMetrics;

    /**
     * @description image
     *
     * @var string
     */
    public $image;

    /**
     * @description labelsForPop
     *
     * @var string
     */
    public $labels;

    /**
     * @description envsForPop
     *
     * @var string
     */
    public $envs;

    /**
     * @description cpu
     *
     * @var containerCpu
     */
    public $containerCpu;

    /**
     * @description memory
     *
     * @var containerMemory
     */
    public $containerMemory;
    protected $_name = [
        'creationTime'     => 'CreationTime',
        'hasCpu'           => 'HasCpu',
        'hasMemory'        => 'HasMemory',
        'hasNetwork'       => 'HasNetwork',
        'hasFilesystem'    => 'HasFilesystem',
        'hasDiskIo'        => 'HasDiskIo',
        'hasCustomMetrics' => 'HasCustomMetrics',
        'image'            => 'Image',
        'labels'           => 'Labels',
        'envs'             => 'Envs',
        'containerCpu'     => 'ContainerCpu',
        'containerMemory'  => 'ContainerMemory',
    ];

    public function validate()
    {
        Model::validateRequired('creationTime', $this->creationTime, true);
        Model::validateRequired('hasCpu', $this->hasCpu, true);
        Model::validateRequired('hasMemory', $this->hasMemory, true);
        Model::validateRequired('hasNetwork', $this->hasNetwork, true);
        Model::validateRequired('hasFilesystem', $this->hasFilesystem, true);
        Model::validateRequired('hasDiskIo', $this->hasDiskIo, true);
        Model::validateRequired('hasCustomMetrics', $this->hasCustomMetrics, true);
        Model::validateRequired('image', $this->image, true);
        Model::validateRequired('labels', $this->labels, true);
        Model::validateRequired('envs', $this->envs, true);
        Model::validateRequired('containerCpu', $this->containerCpu, true);
        Model::validateRequired('containerMemory', $this->containerMemory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->hasCpu) {
            $res['HasCpu'] = $this->hasCpu;
        }
        if (null !== $this->hasMemory) {
            $res['HasMemory'] = $this->hasMemory;
        }
        if (null !== $this->hasNetwork) {
            $res['HasNetwork'] = $this->hasNetwork;
        }
        if (null !== $this->hasFilesystem) {
            $res['HasFilesystem'] = $this->hasFilesystem;
        }
        if (null !== $this->hasDiskIo) {
            $res['HasDiskIo'] = $this->hasDiskIo;
        }
        if (null !== $this->hasCustomMetrics) {
            $res['HasCustomMetrics'] = $this->hasCustomMetrics;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->envs) {
            $res['Envs'] = $this->envs;
        }
        if (null !== $this->containerCpu) {
            $res['ContainerCpu'] = null !== $this->containerCpu ? $this->containerCpu->toMap() : null;
        }
        if (null !== $this->containerMemory) {
            $res['ContainerMemory'] = null !== $this->containerMemory ? $this->containerMemory->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['HasCpu'])) {
            $model->hasCpu = $map['HasCpu'];
        }
        if (isset($map['HasMemory'])) {
            $model->hasMemory = $map['HasMemory'];
        }
        if (isset($map['HasNetwork'])) {
            $model->hasNetwork = $map['HasNetwork'];
        }
        if (isset($map['HasFilesystem'])) {
            $model->hasFilesystem = $map['HasFilesystem'];
        }
        if (isset($map['HasDiskIo'])) {
            $model->hasDiskIo = $map['HasDiskIo'];
        }
        if (isset($map['HasCustomMetrics'])) {
            $model->hasCustomMetrics = $map['HasCustomMetrics'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Envs'])) {
            $model->envs = $map['Envs'];
        }
        if (isset($map['ContainerCpu'])) {
            $model->containerCpu = containerCpu::fromMap($map['ContainerCpu']);
        }
        if (isset($map['ContainerMemory'])) {
            $model->containerMemory = containerMemory::fromMap($map['ContainerMemory']);
        }

        return $model;
    }
}
