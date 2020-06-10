<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\DescribeMultiContainerGroupMetricResponse\monitorDatas\containerInfos\containerStats;

use AlibabaCloud\Tea\Model;

class fsStats extends Model
{
    /**
     * @description device
     *
     * @var string
     */
    public $device;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description limit
     *
     * @var int
     */
    public $limit;

    /**
     * @description usage
     *
     * @var int
     */
    public $usage;

    /**
     * @description baseUsage
     *
     * @var int
     */
    public $baseUsage;

    /**
     * @description available
     *
     * @var int
     */
    public $available;

    /**
     * @description hasInodes
     *
     * @var bool
     */
    public $hasInodes;

    /**
     * @description inodes
     *
     * @var int
     */
    public $inodes;

    /**
     * @description inodesFree
     *
     * @var int
     */
    public $inodesFree;

    /**
     * @description readsCompleted
     *
     * @var int
     */
    public $readsCompleted;

    /**
     * @description readsMerged
     *
     * @var int
     */
    public $readsMerged;

    /**
     * @description sectorsRead
     *
     * @var int
     */
    public $sectorsRead;

    /**
     * @description readTime
     *
     * @var int
     */
    public $readTime;

    /**
     * @description writesCompleted
     *
     * @var int
     */
    public $writesCompleted;

    /**
     * @description writesMerged
     *
     * @var int
     */
    public $writesMerged;

    /**
     * @description sectorsWritten
     *
     * @var int
     */
    public $sectorsWritten;

    /**
     * @description writeTime
     *
     * @var int
     */
    public $writeTime;

    /**
     * @description ioInProgress
     *
     * @var int
     */
    public $ioInProgress;

    /**
     * @description ioTime
     *
     * @var int
     */
    public $ioTime;

    /**
     * @description weightedIoTime
     *
     * @var int
     */
    public $weightedIoTime;
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

    public function validate()
    {
        Model::validateRequired('device', $this->device, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('limit', $this->limit, true);
        Model::validateRequired('usage', $this->usage, true);
        Model::validateRequired('baseUsage', $this->baseUsage, true);
        Model::validateRequired('available', $this->available, true);
        Model::validateRequired('hasInodes', $this->hasInodes, true);
        Model::validateRequired('inodes', $this->inodes, true);
        Model::validateRequired('inodesFree', $this->inodesFree, true);
        Model::validateRequired('readsCompleted', $this->readsCompleted, true);
        Model::validateRequired('readsMerged', $this->readsMerged, true);
        Model::validateRequired('sectorsRead', $this->sectorsRead, true);
        Model::validateRequired('readTime', $this->readTime, true);
        Model::validateRequired('writesCompleted', $this->writesCompleted, true);
        Model::validateRequired('writesMerged', $this->writesMerged, true);
        Model::validateRequired('sectorsWritten', $this->sectorsWritten, true);
        Model::validateRequired('writeTime', $this->writeTime, true);
        Model::validateRequired('ioInProgress', $this->ioInProgress, true);
        Model::validateRequired('ioTime', $this->ioTime, true);
        Model::validateRequired('weightedIoTime', $this->weightedIoTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->device) {
            $res['Device'] = $this->device;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->baseUsage) {
            $res['BaseUsage'] = $this->baseUsage;
        }
        if (null !== $this->available) {
            $res['Available'] = $this->available;
        }
        if (null !== $this->hasInodes) {
            $res['HasInodes'] = $this->hasInodes;
        }
        if (null !== $this->inodes) {
            $res['Inodes'] = $this->inodes;
        }
        if (null !== $this->inodesFree) {
            $res['InodesFree'] = $this->inodesFree;
        }
        if (null !== $this->readsCompleted) {
            $res['ReadsCompleted'] = $this->readsCompleted;
        }
        if (null !== $this->readsMerged) {
            $res['ReadsMerged'] = $this->readsMerged;
        }
        if (null !== $this->sectorsRead) {
            $res['SectorsRead'] = $this->sectorsRead;
        }
        if (null !== $this->readTime) {
            $res['ReadTime'] = $this->readTime;
        }
        if (null !== $this->writesCompleted) {
            $res['WritesCompleted'] = $this->writesCompleted;
        }
        if (null !== $this->writesMerged) {
            $res['WritesMerged'] = $this->writesMerged;
        }
        if (null !== $this->sectorsWritten) {
            $res['SectorsWritten'] = $this->sectorsWritten;
        }
        if (null !== $this->writeTime) {
            $res['WriteTime'] = $this->writeTime;
        }
        if (null !== $this->ioInProgress) {
            $res['IoInProgress'] = $this->ioInProgress;
        }
        if (null !== $this->ioTime) {
            $res['IoTime'] = $this->ioTime;
        }
        if (null !== $this->weightedIoTime) {
            $res['WeightedIoTime'] = $this->weightedIoTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fsStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Device'])) {
            $model->device = $map['Device'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['BaseUsage'])) {
            $model->baseUsage = $map['BaseUsage'];
        }
        if (isset($map['Available'])) {
            $model->available = $map['Available'];
        }
        if (isset($map['HasInodes'])) {
            $model->hasInodes = $map['HasInodes'];
        }
        if (isset($map['Inodes'])) {
            $model->inodes = $map['Inodes'];
        }
        if (isset($map['InodesFree'])) {
            $model->inodesFree = $map['InodesFree'];
        }
        if (isset($map['ReadsCompleted'])) {
            $model->readsCompleted = $map['ReadsCompleted'];
        }
        if (isset($map['ReadsMerged'])) {
            $model->readsMerged = $map['ReadsMerged'];
        }
        if (isset($map['SectorsRead'])) {
            $model->sectorsRead = $map['SectorsRead'];
        }
        if (isset($map['ReadTime'])) {
            $model->readTime = $map['ReadTime'];
        }
        if (isset($map['WritesCompleted'])) {
            $model->writesCompleted = $map['WritesCompleted'];
        }
        if (isset($map['WritesMerged'])) {
            $model->writesMerged = $map['WritesMerged'];
        }
        if (isset($map['SectorsWritten'])) {
            $model->sectorsWritten = $map['SectorsWritten'];
        }
        if (isset($map['WriteTime'])) {
            $model->writeTime = $map['WriteTime'];
        }
        if (isset($map['IoInProgress'])) {
            $model->ioInProgress = $map['IoInProgress'];
        }
        if (isset($map['IoTime'])) {
            $model->ioTime = $map['IoTime'];
        }
        if (isset($map['WeightedIoTime'])) {
            $model->weightedIoTime = $map['WeightedIoTime'];
        }

        return $model;
    }
}
