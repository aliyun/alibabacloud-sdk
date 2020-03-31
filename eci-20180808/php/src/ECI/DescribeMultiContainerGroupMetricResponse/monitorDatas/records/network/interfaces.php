<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\records\network;

use AlibabaCloud\Tea\Model;

class interfaces extends Model
{
    public $txBytes;
    public $rxBytes;
    public $txErrors;
    public $rxErrors;
    public $name;
    protected $_required = [
        'txBytes'  => true,
        'rxBytes'  => true,
        'txErrors' => true,
        'rxErrors' => true,
        'name'     => true,
    ];
    protected $_name = [
        'txBytes'  => 'TxBytes',
        'rxBytes'  => 'RxBytes',
        'txErrors' => 'TxErrors',
        'rxErrors' => 'RxErrors',
        'name'     => 'Name',
    ];
    protected $_description = [
        'txBytes'  => 'txBytes',
        'rxBytes'  => 'rxBytes',
        'txErrors' => 'txErrors',
        'rxErrors' => 'rxErrors',
        'name'     => 'name',
    ];
}
