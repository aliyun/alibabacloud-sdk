<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogsResponse\items;

use AlibabaCloud\Tea\Model;

class SQLSlowLog extends Model
{
    /**
     * @description slowLogId
     *
     * @var int
     */
    public $slowLogId;

    /**
     * @description sqlhash
     *
     * @var string
     */
    public $SQLHASH;

    /**
     * @description sqlIdStr
     *
     * @var string
     */
    public $SQLIdStr;

    /**
     * @description dbName
     *
     * @var string
     */
    public $DBName;

    /**
     * @description sqlText
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description totalNumberOfExecution
     *
     * @var int
     */
    public $mySQLTotalExecutionCounts;

    /**
     * @description totalQueryTime
     *
     * @var int
     */
    public $mySQLTotalExecutionTimes;

    /**
     * @description totalLockTime
     *
     * @var int
     */
    public $totalLockTimes;

    /**
     * @description maxlockTime
     *
     * @var int
     */
    public $maxLockTime;

    /**
     * @description parseTotalRowNumbers
     *
     * @var int
     */
    public $parseTotalRowCounts;

    /**
     * @description parseMaxRowNumbers
     *
     * @var int
     */
    public $parseMaxRowCount;

    /**
     * @description returnTotalItemNumbers
     *
     * @var int
     */
    public $returnTotalRowCounts;

    /**
     * @description returnMaxItemNumbers
     *
     * @var int
     */
    public $returnMaxRowCount;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description totalExecutionCount
     *
     * @var int
     */
    public $SQLServerTotalExecutionCounts;

    /**
     * @description totalExecutionTime
     *
     * @var int
     */
    public $SQLServerTotalExecutionTimes;

    /**
     * @description totalLogicalReads
     *
     * @var int
     */
    public $totalLogicalReadCounts;

    /**
     * @description totalPhysicalReads
     *
     * @var int
     */
    public $totalPhysicalReadCounts;

    /**
     * @description reportTime
     *
     * @var string
     */
    public $reportTime;

    /**
     * @description maxQueryTime
     *
     * @var int
     */
    public $maxExecutionTime;

    /**
     * @description avgExecutionTime
     *
     * @var int
     */
    public $avgExecutionTime;
    protected $_name = [
        'slowLogId'                     => 'SlowLogId',
        'SQLHASH'                       => 'SQLHASH',
        'SQLIdStr'                      => 'SQLIdStr',
        'DBName'                        => 'DBName',
        'SQLText'                       => 'SQLText',
        'mySQLTotalExecutionCounts'     => 'MySQLTotalExecutionCounts',
        'mySQLTotalExecutionTimes'      => 'MySQLTotalExecutionTimes',
        'totalLockTimes'                => 'TotalLockTimes',
        'maxLockTime'                   => 'MaxLockTime',
        'parseTotalRowCounts'           => 'ParseTotalRowCounts',
        'parseMaxRowCount'              => 'ParseMaxRowCount',
        'returnTotalRowCounts'          => 'ReturnTotalRowCounts',
        'returnMaxRowCount'             => 'ReturnMaxRowCount',
        'createTime'                    => 'CreateTime',
        'SQLServerTotalExecutionCounts' => 'SQLServerTotalExecutionCounts',
        'SQLServerTotalExecutionTimes'  => 'SQLServerTotalExecutionTimes',
        'totalLogicalReadCounts'        => 'TotalLogicalReadCounts',
        'totalPhysicalReadCounts'       => 'TotalPhysicalReadCounts',
        'reportTime'                    => 'ReportTime',
        'maxExecutionTime'              => 'MaxExecutionTime',
        'avgExecutionTime'              => 'AvgExecutionTime',
    ];

    public function validate()
    {
        Model::validateRequired('slowLogId', $this->slowLogId, true);
        Model::validateRequired('SQLHASH', $this->SQLHASH, true);
        Model::validateRequired('SQLIdStr', $this->SQLIdStr, true);
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('SQLText', $this->SQLText, true);
        Model::validateRequired('mySQLTotalExecutionCounts', $this->mySQLTotalExecutionCounts, true);
        Model::validateRequired('mySQLTotalExecutionTimes', $this->mySQLTotalExecutionTimes, true);
        Model::validateRequired('totalLockTimes', $this->totalLockTimes, true);
        Model::validateRequired('maxLockTime', $this->maxLockTime, true);
        Model::validateRequired('parseTotalRowCounts', $this->parseTotalRowCounts, true);
        Model::validateRequired('parseMaxRowCount', $this->parseMaxRowCount, true);
        Model::validateRequired('returnTotalRowCounts', $this->returnTotalRowCounts, true);
        Model::validateRequired('returnMaxRowCount', $this->returnMaxRowCount, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('SQLServerTotalExecutionCounts', $this->SQLServerTotalExecutionCounts, true);
        Model::validateRequired('SQLServerTotalExecutionTimes', $this->SQLServerTotalExecutionTimes, true);
        Model::validateRequired('totalLogicalReadCounts', $this->totalLogicalReadCounts, true);
        Model::validateRequired('totalPhysicalReadCounts', $this->totalPhysicalReadCounts, true);
        Model::validateRequired('reportTime', $this->reportTime, true);
        Model::validateRequired('maxExecutionTime', $this->maxExecutionTime, true);
        Model::validateRequired('avgExecutionTime', $this->avgExecutionTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slowLogId) {
            $res['SlowLogId'] = $this->slowLogId;
        }
        if (null !== $this->SQLHASH) {
            $res['SQLHASH'] = $this->SQLHASH;
        }
        if (null !== $this->SQLIdStr) {
            $res['SQLIdStr'] = $this->SQLIdStr;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->mySQLTotalExecutionCounts) {
            $res['MySQLTotalExecutionCounts'] = $this->mySQLTotalExecutionCounts;
        }
        if (null !== $this->mySQLTotalExecutionTimes) {
            $res['MySQLTotalExecutionTimes'] = $this->mySQLTotalExecutionTimes;
        }
        if (null !== $this->totalLockTimes) {
            $res['TotalLockTimes'] = $this->totalLockTimes;
        }
        if (null !== $this->maxLockTime) {
            $res['MaxLockTime'] = $this->maxLockTime;
        }
        if (null !== $this->parseTotalRowCounts) {
            $res['ParseTotalRowCounts'] = $this->parseTotalRowCounts;
        }
        if (null !== $this->parseMaxRowCount) {
            $res['ParseMaxRowCount'] = $this->parseMaxRowCount;
        }
        if (null !== $this->returnTotalRowCounts) {
            $res['ReturnTotalRowCounts'] = $this->returnTotalRowCounts;
        }
        if (null !== $this->returnMaxRowCount) {
            $res['ReturnMaxRowCount'] = $this->returnMaxRowCount;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->SQLServerTotalExecutionCounts) {
            $res['SQLServerTotalExecutionCounts'] = $this->SQLServerTotalExecutionCounts;
        }
        if (null !== $this->SQLServerTotalExecutionTimes) {
            $res['SQLServerTotalExecutionTimes'] = $this->SQLServerTotalExecutionTimes;
        }
        if (null !== $this->totalLogicalReadCounts) {
            $res['TotalLogicalReadCounts'] = $this->totalLogicalReadCounts;
        }
        if (null !== $this->totalPhysicalReadCounts) {
            $res['TotalPhysicalReadCounts'] = $this->totalPhysicalReadCounts;
        }
        if (null !== $this->reportTime) {
            $res['ReportTime'] = $this->reportTime;
        }
        if (null !== $this->maxExecutionTime) {
            $res['MaxExecutionTime'] = $this->maxExecutionTime;
        }
        if (null !== $this->avgExecutionTime) {
            $res['AvgExecutionTime'] = $this->avgExecutionTime;
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
        if (isset($map['SlowLogId'])) {
            $model->slowLogId = $map['SlowLogId'];
        }
        if (isset($map['SQLHASH'])) {
            $model->SQLHASH = $map['SQLHASH'];
        }
        if (isset($map['SQLIdStr'])) {
            $model->SQLIdStr = $map['SQLIdStr'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['MySQLTotalExecutionCounts'])) {
            $model->mySQLTotalExecutionCounts = $map['MySQLTotalExecutionCounts'];
        }
        if (isset($map['MySQLTotalExecutionTimes'])) {
            $model->mySQLTotalExecutionTimes = $map['MySQLTotalExecutionTimes'];
        }
        if (isset($map['TotalLockTimes'])) {
            $model->totalLockTimes = $map['TotalLockTimes'];
        }
        if (isset($map['MaxLockTime'])) {
            $model->maxLockTime = $map['MaxLockTime'];
        }
        if (isset($map['ParseTotalRowCounts'])) {
            $model->parseTotalRowCounts = $map['ParseTotalRowCounts'];
        }
        if (isset($map['ParseMaxRowCount'])) {
            $model->parseMaxRowCount = $map['ParseMaxRowCount'];
        }
        if (isset($map['ReturnTotalRowCounts'])) {
            $model->returnTotalRowCounts = $map['ReturnTotalRowCounts'];
        }
        if (isset($map['ReturnMaxRowCount'])) {
            $model->returnMaxRowCount = $map['ReturnMaxRowCount'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SQLServerTotalExecutionCounts'])) {
            $model->SQLServerTotalExecutionCounts = $map['SQLServerTotalExecutionCounts'];
        }
        if (isset($map['SQLServerTotalExecutionTimes'])) {
            $model->SQLServerTotalExecutionTimes = $map['SQLServerTotalExecutionTimes'];
        }
        if (isset($map['TotalLogicalReadCounts'])) {
            $model->totalLogicalReadCounts = $map['TotalLogicalReadCounts'];
        }
        if (isset($map['TotalPhysicalReadCounts'])) {
            $model->totalPhysicalReadCounts = $map['TotalPhysicalReadCounts'];
        }
        if (isset($map['ReportTime'])) {
            $model->reportTime = $map['ReportTime'];
        }
        if (isset($map['MaxExecutionTime'])) {
            $model->maxExecutionTime = $map['MaxExecutionTime'];
        }
        if (isset($map['AvgExecutionTime'])) {
            $model->avgExecutionTime = $map['AvgExecutionTime'];
        }

        return $model;
    }
}
