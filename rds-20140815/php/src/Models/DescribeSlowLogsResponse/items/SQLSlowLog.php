<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogsResponse\items;

use AlibabaCloud\Tea\Model;

class SQLSlowLog extends Model {
    protected $_name = [
        'slowLogId' => 'SlowLogId',
        'SQLHASH' => 'SQLHASH',
        'SQLIdStr' => 'SQLIdStr',
        'DBName' => 'DBName',
        'SQLText' => 'SQLText',
        'mySQLTotalExecutionCounts' => 'MySQLTotalExecutionCounts',
        'mySQLTotalExecutionTimes' => 'MySQLTotalExecutionTimes',
        'totalLockTimes' => 'TotalLockTimes',
        'maxLockTime' => 'MaxLockTime',
        'parseTotalRowCounts' => 'ParseTotalRowCounts',
        'parseMaxRowCount' => 'ParseMaxRowCount',
        'returnTotalRowCounts' => 'ReturnTotalRowCounts',
        'returnMaxRowCount' => 'ReturnMaxRowCount',
        'createTime' => 'CreateTime',
        'SQLServerTotalExecutionCounts' => 'SQLServerTotalExecutionCounts',
        'SQLServerTotalExecutionTimes' => 'SQLServerTotalExecutionTimes',
        'totalLogicalReadCounts' => 'TotalLogicalReadCounts',
        'totalPhysicalReadCounts' => 'TotalPhysicalReadCounts',
        'reportTime' => 'ReportTime',
        'maxExecutionTime' => 'MaxExecutionTime',
        'avgExecutionTime' => 'AvgExecutionTime',
    ];
    public function validate() {
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
    public function toMap() {
        $res = [];
        $res['SlowLogId'] = $this->slowLogId;
        $res['SQLHASH'] = $this->SQLHASH;
        $res['SQLIdStr'] = $this->SQLIdStr;
        $res['DBName'] = $this->DBName;
        $res['SQLText'] = $this->SQLText;
        $res['MySQLTotalExecutionCounts'] = $this->mySQLTotalExecutionCounts;
        $res['MySQLTotalExecutionTimes'] = $this->mySQLTotalExecutionTimes;
        $res['TotalLockTimes'] = $this->totalLockTimes;
        $res['MaxLockTime'] = $this->maxLockTime;
        $res['ParseTotalRowCounts'] = $this->parseTotalRowCounts;
        $res['ParseMaxRowCount'] = $this->parseMaxRowCount;
        $res['ReturnTotalRowCounts'] = $this->returnTotalRowCounts;
        $res['ReturnMaxRowCount'] = $this->returnMaxRowCount;
        $res['CreateTime'] = $this->createTime;
        $res['SQLServerTotalExecutionCounts'] = $this->SQLServerTotalExecutionCounts;
        $res['SQLServerTotalExecutionTimes'] = $this->SQLServerTotalExecutionTimes;
        $res['TotalLogicalReadCounts'] = $this->totalLogicalReadCounts;
        $res['TotalPhysicalReadCounts'] = $this->totalPhysicalReadCounts;
        $res['ReportTime'] = $this->reportTime;
        $res['MaxExecutionTime'] = $this->maxExecutionTime;
        $res['AvgExecutionTime'] = $this->avgExecutionTime;
        return $res;
    }
    /**
     * @param array $map
     * @return SQLSlowLog
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['SlowLogId'])){
            $model->slowLogId = $map['SlowLogId'];
        }
        if(isset($map['SQLHASH'])){
            $model->SQLHASH = $map['SQLHASH'];
        }
        if(isset($map['SQLIdStr'])){
            $model->SQLIdStr = $map['SQLIdStr'];
        }
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['SQLText'])){
            $model->SQLText = $map['SQLText'];
        }
        if(isset($map['MySQLTotalExecutionCounts'])){
            $model->mySQLTotalExecutionCounts = $map['MySQLTotalExecutionCounts'];
        }
        if(isset($map['MySQLTotalExecutionTimes'])){
            $model->mySQLTotalExecutionTimes = $map['MySQLTotalExecutionTimes'];
        }
        if(isset($map['TotalLockTimes'])){
            $model->totalLockTimes = $map['TotalLockTimes'];
        }
        if(isset($map['MaxLockTime'])){
            $model->maxLockTime = $map['MaxLockTime'];
        }
        if(isset($map['ParseTotalRowCounts'])){
            $model->parseTotalRowCounts = $map['ParseTotalRowCounts'];
        }
        if(isset($map['ParseMaxRowCount'])){
            $model->parseMaxRowCount = $map['ParseMaxRowCount'];
        }
        if(isset($map['ReturnTotalRowCounts'])){
            $model->returnTotalRowCounts = $map['ReturnTotalRowCounts'];
        }
        if(isset($map['ReturnMaxRowCount'])){
            $model->returnMaxRowCount = $map['ReturnMaxRowCount'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['SQLServerTotalExecutionCounts'])){
            $model->SQLServerTotalExecutionCounts = $map['SQLServerTotalExecutionCounts'];
        }
        if(isset($map['SQLServerTotalExecutionTimes'])){
            $model->SQLServerTotalExecutionTimes = $map['SQLServerTotalExecutionTimes'];
        }
        if(isset($map['TotalLogicalReadCounts'])){
            $model->totalLogicalReadCounts = $map['TotalLogicalReadCounts'];
        }
        if(isset($map['TotalPhysicalReadCounts'])){
            $model->totalPhysicalReadCounts = $map['TotalPhysicalReadCounts'];
        }
        if(isset($map['ReportTime'])){
            $model->reportTime = $map['ReportTime'];
        }
        if(isset($map['MaxExecutionTime'])){
            $model->maxExecutionTime = $map['MaxExecutionTime'];
        }
        if(isset($map['AvgExecutionTime'])){
            $model->avgExecutionTime = $map['AvgExecutionTime'];
        }
        return $model;
    }
    /**
     * @description slowLogId
     * @var integer
     */
    public $slowLogId;

    /**
     * @description sqlhash
     * @var string
     */
    public $SQLHASH;

    /**
     * @description sqlIdStr
     * @var string
     */
    public $SQLIdStr;

    /**
     * @description dbName
     * @var string
     */
    public $DBName;

    /**
     * @description sqlText
     * @var string
     */
    public $SQLText;

    /**
     * @description totalNumberOfExecution
     * @var integer
     */
    public $mySQLTotalExecutionCounts;

    /**
     * @description totalQueryTime
     * @var integer
     */
    public $mySQLTotalExecutionTimes;

    /**
     * @description totalLockTime
     * @var integer
     */
    public $totalLockTimes;

    /**
     * @description maxlockTime
     * @var integer
     */
    public $maxLockTime;

    /**
     * @description parseTotalRowNumbers
     * @var integer
     */
    public $parseTotalRowCounts;

    /**
     * @description parseMaxRowNumbers
     * @var integer
     */
    public $parseMaxRowCount;

    /**
     * @description returnTotalItemNumbers
     * @var integer
     */
    public $returnTotalRowCounts;

    /**
     * @description returnMaxItemNumbers
     * @var integer
     */
    public $returnMaxRowCount;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description totalExecutionCount
     * @var integer
     */
    public $SQLServerTotalExecutionCounts;

    /**
     * @description totalExecutionTime
     * @var integer
     */
    public $SQLServerTotalExecutionTimes;

    /**
     * @description totalLogicalReads
     * @var integer
     */
    public $totalLogicalReadCounts;

    /**
     * @description totalPhysicalReads
     * @var integer
     */
    public $totalPhysicalReadCounts;

    /**
     * @description reportTime
     * @var string
     */
    public $reportTime;

    /**
     * @description maxQueryTime
     * @var integer
     */
    public $maxExecutionTime;

    /**
     * @description avgExecutionTime
     * @var integer
     */
    public $avgExecutionTime;

}
