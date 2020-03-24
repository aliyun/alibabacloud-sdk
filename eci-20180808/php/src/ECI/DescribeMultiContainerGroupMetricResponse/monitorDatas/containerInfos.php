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
    protected $_name = [
        'id'             => 'Id',
        'name'           => 'Name',
        'namespace'      => 'Namespace',
        'labels'         => 'Labels',
        'containerStats' => 'ContainerStats',
        'containerSpec'  => 'ContainerSpec',
        'aliases'        => 'Aliases',
    ];
}
