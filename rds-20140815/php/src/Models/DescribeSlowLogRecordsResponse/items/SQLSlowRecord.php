<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogRecordsResponse\items;

use AlibabaCloud\Tea\Model;

class SQLSlowRecord extends Model {
    protected $_name = [
        'hostAddress' => 'HostAddress',
        'DBName' => 'DBName',
        'SQLText' => 'SQLText',
        'queryTimes' => 'QueryTimes',
        'lockTimes' => 'LockTimes',
        'parseRowCounts' => 'ParseRowCounts',
        'returnRowCounts' => 'ReturnRowCounts',
        'executionStartTime' => 'ExecutionStartTime',
        'queryTimeMS' => 'QueryTimeMS',
    ];
    public function validate() {
        Model::validateRequired('hostAddress', $this->hostAddress, true);
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('SQLText', $this->SQLText, true);
        Model::validateRequired('queryTimes', $this->queryTimes, true);
        Model::validateRequired('lockTimes', $this->lockTimes, true);
        Model::validateRequired('parseRowCounts', $this->parseRowCounts, true);
        Model::validateRequired('returnRowCounts', $this->returnRowCounts, true);
        Model::validateRequired('executionStartTime', $this->executionStartTime, true);
        Model::validateRequired('queryTimeMS', $this->queryTimeMS, true);
    }
    public function toMap() {
        $res = [];
        $res['HostAddress'] = $this->hostAddress;
        $res['DBName'] = $this->DBName;
        $res['SQLText'] = $this->SQLText;
        $res['QueryTimes'] = $this->queryTimes;
        $res['LockTimes'] = $this->lockTimes;
        $res['ParseRowCounts'] = $this->parseRowCounts;
        $res['ReturnRowCounts'] = $this->returnRowCounts;
        $res['ExecutionStartTime'] = $this->executionStartTime;
        $res['QueryTimeMS'] = $this->queryTimeMS;
        return $res;
    }
    /**
     * @param array $map
     * @return SQLSlowRecord
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['HostAddress'])){
            $model->hostAddress = $map['HostAddress'];
        }
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['SQLText'])){
            $model->SQLText = $map['SQLText'];
        }
        if(isset($map['QueryTimes'])){
            $model->queryTimes = $map['QueryTimes'];
        }
        if(isset($map['LockTimes'])){
            $model->lockTimes = $map['LockTimes'];
        }
        if(isset($map['ParseRowCounts'])){
            $model->parseRowCounts = $map['ParseRowCounts'];
        }
        if(isset($map['ReturnRowCounts'])){
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if(isset($map['ExecutionStartTime'])){
            $model->executionStartTime = $map['ExecutionStartTime'];
        }
        if(isset($map['QueryTimeMS'])){
            $model->queryTimeMS = $map['QueryTimeMS'];
        }
        return $model;
    }
    /**
     * @description hostAddress
     * @var string
     */
    public $hostAddress;

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
     * @description queryTime
     * @var integer
     */
    public $queryTimes;

    /**
     * @description lockTime
     * @var integer
     */
    public $lockTimes;

    /**
     * @description parseRowNumbers
     * @var integer
     */
    public $parseRowCounts;

    /**
     * @description returnItemNumbers
     * @var integer
     */
    public $returnRowCounts;

    /**
     * @description queryStartTime
     * @var string
     */
    public $executionStartTime;

    /**
     * @description queryTimeMS
     * @var integer
     */
    public $queryTimeMS;

}
