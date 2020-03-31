<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse;

use AlibabaCloud\Tea\Model;

class monitorDatas extends Model
{
    public $containerGroupId;
    public $records;
    public $containerInfos;
    protected $_required = [
        'containerGroupId' => true,
        'records'          => true,
        'containerInfos'   => true,
    ];
    protected $_name = [
        'containerGroupId' => 'ContainerGroupId',
        'records'          => 'Records',
        'containerInfos'   => 'ContainerInfos',
    ];
    protected $_description = [
        'containerGroupId' => 'containerGroupId',
        'records'          => 'podStats',
        'containerInfos'   => 'containerInfos',
    ];
}
