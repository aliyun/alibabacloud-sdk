<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas;

use AlibabaCloud\Tea\Model;

class containerInfos extends Model
{
    public $id;
    public $name;
    public $namespace;
    public $labels;
    public $containerStats;
    public $containerSpec;
    public $aliases;
    protected $_required = [
        'id'             => true,
        'name'           => true,
        'namespace'      => true,
        'labels'         => true,
        'containerStats' => true,
        'containerSpec'  => true,
        'aliases'        => true,
    ];
    protected $_name = [
        'id'             => 'Id',
        'name'           => 'Name',
        'namespace'      => 'Namespace',
        'labels'         => 'Labels',
        'containerStats' => 'ContainerStats',
        'containerSpec'  => 'ContainerSpec',
        'aliases'        => 'Aliases',
    ];
    protected $_description = [
        'id'             => 'id',
        'name'           => 'name',
        'namespace'      => 'namespace',
        'labels'         => 'labelsForPop',
        'containerStats' => 'stats',
        'containerSpec'  => 'spec',
        'aliases'        => 'aliases',
    ];
}
