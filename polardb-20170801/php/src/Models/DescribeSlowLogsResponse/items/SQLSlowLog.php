<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogsResponse\items;

use AlibabaCloud\Tea\Model;

class SQLSlowLog extends Model
{
    /**
     * @description dbNodeId
     *
     * @var string
     */
    public $DBNodeId;

    /**
     * @description parseMaxRowNumbers
     *
     * @var int
     */
    public $parseMaxRowCount;

    /**
     * @description totalLockTime
     *
     * @var int
     */
    public $totalLockTimes;

    /**
     * @description dbName
     *
     * @var string
     */
    public $DBName;

    /**
     * @description maxQueryTime
     *
     * @var int
     */
    public $maxExecutionTime;

    /**
     * @description sqlhash
     *
     * @var string
     */
    public $SQLHASH;

    /**
     * @description sqlText
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description totalQueryTime
     *
     * @var int
     */
    public $totalExecutionTimes;

    /**
     * @description returnTotalItemNumbers
     *
     * @var int
     */
    public $returnTotalRowCounts;

    /**
     * @description totalNumberOfExecution
     *
     * @var int
     */
    public $totalExecutionCounts;

    /**
     * @description maxlockTime
     *
     * @var int
     */
    public $maxLockTime;

    /**
     * @description returnMaxItemNumbers
     *
     * @var int
     */
    public $returnMaxRowCount;

    /**
     * @description parseTotalRowNumbers
     *
     * @var int
     */
    public $parseTotalRowCounts;
    protected $_name = [
        'DBNodeId'             => 'DBNodeId',
        'parseMaxRowCount'     => 'ParseMaxRowCount',
        'totalLockTimes'       => 'TotalLockTimes',
        'DBName'               => 'DBName',
        'maxExecutionTime'     => 'MaxExecutionTime',
        'SQLHASH'              => 'SQLHASH',
        'SQLText'              => 'SQLText',
        'createTime'           => 'CreateTime',
        'totalExecutionTimes'  => 'TotalExecutionTimes',
        'returnTotalRowCounts' => 'ReturnTotalRowCounts',
        'totalExecutionCounts' => 'TotalExecutionCounts',
        'maxLockTime'          => 'MaxLockTime',
        'returnMaxRowCount'    => 'ReturnMaxRowCount',
        'parseTotalRowCounts'  => 'ParseTotalRowCounts',
    ];

    public function validate()
    {
        Model::validateRequired('DBNodeId', $this->DBNodeId, true);
        Model::validateRequired('parseMaxRowCount', $this->parseMaxRowCount, true);
        Model::validateRequired('totalLockTimes', $this->totalLockTimes, true);
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('maxExecutionTime', $this->maxExecutionTime, true);
        Model::validateRequired('SQLHASH', $this->SQLHASH, true);
        Model::validateRequired('SQLText', $this->SQLText, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('totalExecutionTimes', $this->totalExecutionTimes, true);
        Model::validateRequired('returnTotalRowCounts', $this->returnTotalRowCounts, true);
        Model::validateRequired('totalExecutionCounts', $this->totalExecutionCounts, true);
        Model::validateRequired('maxLockTime', $this->maxLockTime, true);
        Model::validateRequired('returnMaxRowCount', $this->returnMaxRowCount, true);
        Model::validateRequired('parseTotalRowCounts', $this->parseTotalRowCounts, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }
        if (null !== $this->parseMaxRowCount) {
            $res['ParseMaxRowCount'] = $this->parseMaxRowCount;
        }
        if (null !== $this->totalLockTimes) {
            $res['TotalLockTimes'] = $this->totalLockTimes;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->maxExecutionTime) {
            $res['MaxExecutionTime'] = $this->maxExecutionTime;
        }
        if (null !== $this->SQLHASH) {
            $res['SQLHASH'] = $this->SQLHASH;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->totalExecutionTimes) {
            $res['TotalExecutionTimes'] = $this->totalExecutionTimes;
        }
        if (null !== $this->returnTotalRowCounts) {
            $res['ReturnTotalRowCounts'] = $this->returnTotalRowCounts;
        }
        if (null !== $this->totalExecutionCounts) {
            $res['TotalExecutionCounts'] = $this->totalExecutionCounts;
        }
        if (null !== $this->maxLockTime) {
            $res['MaxLockTime'] = $this->maxLockTime;
        }
        if (null !== $this->returnMaxRowCount) {
            $res['ReturnMaxRowCount'] = $this->returnMaxRowCount;
        }
        if (null !== $this->parseTotalRowCounts) {
            $res['ParseTotalRowCounts'] = $this->parseTotalRowCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLSlowLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }
        if (isset($map['ParseMaxRowCount'])) {
            $model->parseMaxRowCount = $map['ParseMaxRowCount'];
        }
        if (isset($map['TotalLockTimes'])) {
            $model->totalLockTimes = $map['TotalLockTimes'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['MaxExecutionTime'])) {
            $model->maxExecutionTime = $map['MaxExecutionTime'];
        }
        if (isset($map['SQLHASH'])) {
            $model->SQLHASH = $map['SQLHASH'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['TotalExecutionTimes'])) {
            $model->totalExecutionTimes = $map['TotalExecutionTimes'];
        }
        if (isset($map['ReturnTotalRowCounts'])) {
            $model->returnTotalRowCounts = $map['ReturnTotalRowCounts'];
        }
        if (isset($map['TotalExecutionCounts'])) {
            $model->totalExecutionCounts = $map['TotalExecutionCounts'];
        }
        if (isset($map['MaxLockTime'])) {
            $model->maxLockTime = $map['MaxLockTime'];
        }
        if (isset($map['ReturnMaxRowCount'])) {
            $model->returnMaxRowCount = $map['ReturnMaxRowCount'];
        }
        if (isset($map['ParseTotalRowCounts'])) {
            $model->parseTotalRowCounts = $map['ParseTotalRowCounts'];
        }

        return $model;
    }
}
