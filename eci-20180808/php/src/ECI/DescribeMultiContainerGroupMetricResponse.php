<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeMultiContainerGroupMetricResponse extends Model
{
    public $requestId;
    public $monitorDatas;
    protected $_required = [
        'requestId'    => true,
        'monitorDatas' => true,
    ];
    protected $_name = [
        'requestId'    => 'RequestId',
        'monitorDatas' => 'MonitorDatas',
    ];
    protected $_description = [
        'requestId'    => 'requestId',
        'monitorDatas' => 'data',
    ];
}
