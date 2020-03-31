<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class fsStats extends Model
{
    public $device;
    public $type;
    public $limit;
    public $usage;
    public $baseUsage;
    public $available;
    public $hasInodes;
    public $inodes;
    public $inodesFree;
    public $readsCompleted;
    public $readsMerged;
    public $sectorsRead;
    public $readTime;
    public $writesCompleted;
    public $writesMerged;
    public $sectorsWritten;
    public $writeTime;
    public $ioInProgress;
    public $ioTime;
    public $weightedIoTime;
    protected $_required = [
        'device'          => true,
        'type'            => true,
        'limit'           => true,
        'usage'           => true,
        'baseUsage'       => true,
        'available'       => true,
        'hasInodes'       => true,
        'inodes'          => true,
        'inodesFree'      => true,
        'readsCompleted'  => true,
        'readsMerged'     => true,
        'sectorsRead'     => true,
        'readTime'        => true,
        'writesCompleted' => true,
        'writesMerged'    => true,
        'sectorsWritten'  => true,
        'writeTime'       => true,
        'ioInProgress'    => true,
        'ioTime'          => true,
        'weightedIoTime'  => true,
    ];
    protected $_name = [
        'device'          => 'Device',
        'type'            => 'Type',
        'limit'           => 'Limit',
        'usage'           => 'Usage',
        'baseUsage'       => 'BaseUsage',
        'available'       => 'Available',
        'hasInodes'       => 'HasInodes',
        'inodes'          => 'Inodes',
        'inodesFree'      => 'InodesFree',
        'readsCompleted'  => 'ReadsCompleted',
        'readsMerged'     => 'ReadsMerged',
        'sectorsRead'     => 'SectorsRead',
        'readTime'        => 'ReadTime',
        'writesCompleted' => 'WritesCompleted',
        'writesMerged'    => 'WritesMerged',
        'sectorsWritten'  => 'SectorsWritten',
        'writeTime'       => 'WriteTime',
        'ioInProgress'    => 'IoInProgress',
        'ioTime'          => 'IoTime',
        'weightedIoTime'  => 'WeightedIoTime',
    ];
    protected $_description = [
        'device'          => 'device',
        'type'            => 'type',
        'limit'           => 'limit',
        'usage'           => 'usage',
        'baseUsage'       => 'baseUsage',
        'available'       => 'available',
        'hasInodes'       => 'hasInodes',
        'inodes'          => 'inodes',
        'inodesFree'      => 'inodesFree',
        'readsCompleted'  => 'readsCompleted',
        'readsMerged'     => 'readsMerged',
        'sectorsRead'     => 'sectorsRead',
        'readTime'        => 'readTime',
        'writesCompleted' => 'writesCompleted',
        'writesMerged'    => 'writesMerged',
        'sectorsWritten'  => 'sectorsWritten',
        'writeTime'       => 'writeTime',
        'ioInProgress'    => 'ioInProgress',
        'ioTime'          => 'ioTime',
        'weightedIoTime'  => 'weightedIoTime',
    ];
}
