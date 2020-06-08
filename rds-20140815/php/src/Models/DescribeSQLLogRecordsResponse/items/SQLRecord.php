<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogRecordsResponse\items;

use AlibabaCloud\Tea\Model;

class SQLRecord extends Model {
    protected $_name = [
        'DBName' => 'DBName',
        'accountName' => 'AccountName',
        'hostAddress' => 'HostAddress',
        'SQLText' => 'SQLText',
        'totalExecutionTimes' => 'TotalExecutionTimes',
        'returnRowCounts' => 'ReturnRowCounts',
        'executeTime' => 'ExecuteTime',
        'threadID' => 'ThreadID',
    ];
    public function validate() {
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('hostAddress', $this->hostAddress, true);
        Model::validateRequired('SQLText', $this->SQLText, true);
        Model::validateRequired('totalExecutionTimes', $this->totalExecutionTimes, true);
        Model::validateRequired('returnRowCounts', $this->returnRowCounts, true);
        Model::validateRequired('executeTime', $this->executeTime, true);
        Model::validateRequired('threadID', $this->threadID, true);
    }
    public function toMap() {
        $res = [];
        $res['DBName'] = $this->DBName;
        $res['AccountName'] = $this->accountName;
        $res['HostAddress'] = $this->hostAddress;
        $res['SQLText'] = $this->SQLText;
        $res['TotalExecutionTimes'] = $this->totalExecutionTimes;
        $res['ReturnRowCounts'] = $this->returnRowCounts;
        $res['ExecuteTime'] = $this->executeTime;
        $res['ThreadID'] = $this->threadID;
        return $res;
    }
    /**
     * @param array $map
     * @return SQLRecord
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DBName'])){
            $model->DBName = $map['DBName'];
        }
        if(isset($map['AccountName'])){
            $model->accountName = $map['AccountName'];
        }
        if(isset($map['HostAddress'])){
            $model->hostAddress = $map['HostAddress'];
        }
        if(isset($map['SQLText'])){
            $model->SQLText = $map['SQLText'];
        }
        if(isset($map['TotalExecutionTimes'])){
            $model->totalExecutionTimes = $map['TotalExecutionTimes'];
        }
        if(isset($map['ReturnRowCounts'])){
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if(isset($map['ExecuteTime'])){
            $model->executeTime = $map['ExecuteTime'];
        }
        if(isset($map['ThreadID'])){
            $model->threadID = $map['ThreadID'];
        }
        return $model;
    }
    /**
     * @description dbName
     * @var string
     */
    public $DBName;

    /**
     * @description accountName
     * @var string
     */
    public $accountName;

    /**
     * @description hostAddress
     * @var string
     */
    public $hostAddress;

    /**
     * @description sqlText
     * @var string
     */
    public $SQLText;

    /**
     * @description latencyTime
     * @var integer
     */
    public $totalExecutionTimes;

    /**
     * @description returnNumbers
     * @var integer
     */
    public $returnRowCounts;

    /**
     * @description executeTime
     * @var string
     */
    public $executeTime;

    /**
     * @description threadId
     * @var string
     */
    public $threadID;

}
