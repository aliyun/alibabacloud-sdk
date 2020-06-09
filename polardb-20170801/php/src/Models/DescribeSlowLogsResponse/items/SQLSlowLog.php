<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeSlowLogsResponse\items;

use AlibabaCloud\Tea\Model;

class SQLSlowLog extends Model {
    protected $_name = [
        'DBNodeId' => 'DBNodeId',
        'parseMaxRowCount' => 'ParseMaxRowCount',
        'totalLockTimes' => 'TotalLockTimes',
        'DBName' => 'DBName',
        'maxExecutionTime' => 'MaxExecutionTime',
        'SQLHASH' => 'SQLHASH',
        'SQLText' => 'SQLText',
        'createTime' => 'CreateTime',
        'totalExecutionTimes' => 'TotalExecutionTimes',
        'returnTotalRowCounts' => 'ReturnTotalRowCounts',
        'totalExecutionCounts' => 'TotalExecutionCounts',
        'maxLockTime' => 'MaxLockTime',
        'returnMaxRowCount' => 'ReturnMaxRowCount',
        'parseTotalRowCounts' => 'ParseTotalRowCounts',
    ];
    public function validate() {
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
    public function toMap() {
        $res = [];
        $res['DBNodeId'] = $this->DBNodeId;
        $res['ParseMaxRowCount'] = $this->parseMaxRowCount;
        $res['TotalLockTimes'] = $this->totalLockTimes;
        $res['DBName'] = $this->DBName;
        $res['MaxExecutionTime'] = $this->maxExecutionTime;
        $res['SQLHASH'] = $this->SQLHASH;
        $res['SQLText'] = $this->SQLText;
        $res['CreateTime'] = $this->createTime;
        $res['TotalExecutionTimes'] = $this->totalExecutionTimes;
        $res['ReturnTotalRowCounts'] = $this->returnTotalRowCounts;
        $res['TotalExecutionCounts'] = $this->totalExecutionCounts;
        $res['MaxLockTime'] = $this->maxLockTime;
        $res['ReturnMaxRowCount'] = $this->returnMaxRowCount;
        $res['ParseTotalRowCounts'] = $this->parseTotalRowCounts;
        return $res;
    }
    /**
     * @param array $map
     * @return SQLSlowLog
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBNodeId'])){
            $model->DBNodeId = $map['DBNodeId'];
        }
        if(isset($map['ParseMaxRowCount'])){
            $model->parseMaxRowCount = $map['ParseMaxRowCount'];
        }
        if(isset($map['TotalLockTimes'])){
            $model->totalLockTimes = $map['TotalLockTimes'];
        }
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['MaxExecutionTime'])){
            $model->maxExecutionTime = $map['MaxExecutionTime'];
        }
        if(isset($map['SQLHASH'])){
            $model->SQLHASH = $map['SQLHASH'];
        }
        if(isset($map['SQLText'])){
            $model->SQLText = $map['SQLText'];
        }
        if(isset($map['CreateTime'])){
            $model->createTime = $map['CreateTime'];
        }
        if(isset($map['TotalExecutionTimes'])){
            $model->totalExecutionTimes = $map['TotalExecutionTimes'];
        }
        if(isset($map['ReturnTotalRowCounts'])){
            $model->returnTotalRowCounts = $map['ReturnTotalRowCounts'];
        }
        if(isset($map['TotalExecutionCounts'])){
            $model->totalExecutionCounts = $map['TotalExecutionCounts'];
        }
        if(isset($map['MaxLockTime'])){
            $model->maxLockTime = $map['MaxLockTime'];
        }
        if(isset($map['ReturnMaxRowCount'])){
            $model->returnMaxRowCount = $map['ReturnMaxRowCount'];
        }
        if(isset($map['ParseTotalRowCounts'])){
            $model->parseTotalRowCounts = $map['ParseTotalRowCounts'];
        }
        return $model;
    }
    /**
     * @description dbNodeId
     * @var string
     */
    public $DBNodeId;

    /**
     * @description parseMaxRowNumbers
     * @var integer
     */
    public $parseMaxRowCount;

    /**
     * @description totalLockTime
     * @var integer
     */
    public $totalLockTimes;

    /**
     * @description dbName
     * @var string
     */
    public $DBName;

    /**
     * @description maxQueryTime
     * @var integer
     */
    public $maxExecutionTime;

    /**
     * @description sqlhash
     * @var string
     */
    public $SQLHASH;

    /**
     * @description sqlText
     * @var string
     */
    public $SQLText;

    /**
     * @description createTime
     * @var string
     */
    public $createTime;

    /**
     * @description totalQueryTime
     * @var integer
     */
    public $totalExecutionTimes;

    /**
     * @description returnTotalItemNumbers
     * @var integer
     */
    public $returnTotalRowCounts;

    /**
     * @description totalNumberOfExecution
     * @var integer
     */
    public $totalExecutionCounts;

    /**
     * @description maxlockTime
     * @var integer
     */
    public $maxLockTime;

    /**
     * @description returnMaxItemNumbers
     * @var integer
     */
    public $returnMaxRowCount;

    /**
     * @description parseTotalRowNumbers
     * @var integer
     */
    public $parseTotalRowCounts;

}
