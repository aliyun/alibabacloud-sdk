<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupsResponse\containerGroups\containers;

use AlibabaCloud\Tea\Model;

class currentState extends Model
{
    public $state;

    public $detailStatus;

    public $exitCode;

    public $startTime;

    public $finishTime;

    public $reason;

    public $message;

    public $signal;
    protected $_name = [
        'state'        => 'State',
        'detailStatus' => 'DetailStatus',
        'exitCode'     => 'ExitCode',
        'startTime'    => 'StartTime',
        'finishTime'   => 'FinishTime',
        'reason'       => 'Reason',
        'message'      => 'Message',
        'signal'       => 'Signal',
    ];
}
