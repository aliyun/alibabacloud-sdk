<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSQLLogRecordsResponse\items;

use AlibabaCloud\Tea\Model;

class SQLRecord extends Model
{
    /**
     * @description dbName
     *
     * @var string
     */
    public $DBName;

    /**
     * @description accountName
     *
     * @var string
     */
    public $accountName;

    /**
     * @description hostAddress
     *
     * @var string
     */
    public $hostAddress;

    /**
     * @description sqlText
     *
     * @var string
     */
    public $SQLText;

    /**
     * @description latencyTime
     *
     * @var int
     */
    public $totalExecutionTimes;

    /**
     * @description returnNumbers
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @description executeTime
     *
     * @var string
     */
    public $executeTime;

    /**
     * @description threadId
     *
     * @var string
     */
    public $threadID;
    protected $_name = [
        'DBName'              => 'DBName',
        'accountName'         => 'AccountName',
        'hostAddress'         => 'HostAddress',
        'SQLText'             => 'SQLText',
        'totalExecutionTimes' => 'TotalExecutionTimes',
        'returnRowCounts'     => 'ReturnRowCounts',
        'executeTime'         => 'ExecuteTime',
        'threadID'            => 'ThreadID',
    ];

    public function validate()
    {
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('hostAddress', $this->hostAddress, true);
        Model::validateRequired('SQLText', $this->SQLText, true);
        Model::validateRequired('totalExecutionTimes', $this->totalExecutionTimes, true);
        Model::validateRequired('returnRowCounts', $this->returnRowCounts, true);
        Model::validateRequired('executeTime', $this->executeTime, true);
        Model::validateRequired('threadID', $this->threadID, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->totalExecutionTimes) {
            $res['TotalExecutionTimes'] = $this->totalExecutionTimes;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->threadID) {
            $res['ThreadID'] = $this->threadID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['TotalExecutionTimes'])) {
            $model->totalExecutionTimes = $map['TotalExecutionTimes'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['ThreadID'])) {
            $model->threadID = $map['ThreadID'];
        }

        return $model;
    }
}
