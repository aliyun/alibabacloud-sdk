<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos;

use AlibabaCloud\Tea\Model;

class containerSpec extends Model
{
    public $creationTime;
    public $hasCpu;
    public $hasMemory;
    public $hasNetwork;
    public $hasFilesystem;
    public $hasDiskIo;
    public $hasCustomMetrics;
    public $image;
    public $labels;
    public $envs;
    public $containerCpu;
    public $containerMemory;
    protected $_required = [
        'creationTime'     => true,
        'hasCpu'           => true,
        'hasMemory'        => true,
        'hasNetwork'       => true,
        'hasFilesystem'    => true,
        'hasDiskIo'        => true,
        'hasCustomMetrics' => true,
        'image'            => true,
        'labels'           => true,
        'envs'             => true,
        'containerCpu'     => true,
        'containerMemory'  => true,
    ];
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
    protected $_description = [
        'creationTime'     => 'creationTime',
        'hasCpu'           => 'hasCpu',
        'hasMemory'        => 'hasMemory',
        'hasNetwork'       => 'hasNetwork',
        'hasFilesystem'    => 'hasFilesystem',
        'hasDiskIo'        => 'hasDiskIo',
        'hasCustomMetrics' => 'hasCustomMetrics',
        'image'            => 'image',
        'labels'           => 'labelsForPop',
        'envs'             => 'envsForPop',
        'containerCpu'     => 'cpu',
        'containerMemory'  => 'memory',
    ];
}
