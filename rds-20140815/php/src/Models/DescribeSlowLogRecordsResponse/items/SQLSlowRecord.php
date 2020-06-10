<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSlowLogRecordsResponse\items;

use AlibabaCloud\Tea\Model;

class SQLSlowRecord extends Model
{
    /**
     * @description hostAddress
     *
     * @var string
     */
    public $hostAddress;

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
     * @description queryTime
     *
     * @var int
     */
    public $queryTimes;

    /**
     * @description lockTime
     *
     * @var int
     */
    public $lockTimes;

    /**
     * @description parseRowNumbers
     *
     * @var int
     */
    public $parseRowCounts;

    /**
     * @description returnItemNumbers
     *
     * @var int
     */
    public $returnRowCounts;

    /**
     * @description queryStartTime
     *
     * @var string
     */
    public $executionStartTime;

    /**
     * @description queryTimeMS
     *
     * @var int
     */
    public $queryTimeMS;
    protected $_name = [
        'hostAddress'        => 'HostAddress',
        'DBName'             => 'DBName',
        'SQLText'            => 'SQLText',
        'queryTimes'         => 'QueryTimes',
        'lockTimes'          => 'LockTimes',
        'parseRowCounts'     => 'ParseRowCounts',
        'returnRowCounts'    => 'ReturnRowCounts',
        'executionStartTime' => 'ExecutionStartTime',
        'queryTimeMS'        => 'QueryTimeMS',
    ];

    public function validate()
    {
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

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAddress) {
            $res['HostAddress'] = $this->hostAddress;
        }
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->SQLText) {
            $res['SQLText'] = $this->SQLText;
        }
        if (null !== $this->queryTimes) {
            $res['QueryTimes'] = $this->queryTimes;
        }
        if (null !== $this->lockTimes) {
            $res['LockTimes'] = $this->lockTimes;
        }
        if (null !== $this->parseRowCounts) {
            $res['ParseRowCounts'] = $this->parseRowCounts;
        }
        if (null !== $this->returnRowCounts) {
            $res['ReturnRowCounts'] = $this->returnRowCounts;
        }
        if (null !== $this->executionStartTime) {
            $res['ExecutionStartTime'] = $this->executionStartTime;
        }
        if (null !== $this->queryTimeMS) {
            $res['QueryTimeMS'] = $this->queryTimeMS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SQLSlowRecord
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostAddress'])) {
            $model->hostAddress = $map['HostAddress'];
        }
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['SQLText'])) {
            $model->SQLText = $map['SQLText'];
        }
        if (isset($map['QueryTimes'])) {
            $model->queryTimes = $map['QueryTimes'];
        }
        if (isset($map['LockTimes'])) {
            $model->lockTimes = $map['LockTimes'];
        }
        if (isset($map['ParseRowCounts'])) {
            $model->parseRowCounts = $map['ParseRowCounts'];
        }
        if (isset($map['ReturnRowCounts'])) {
            $model->returnRowCounts = $map['ReturnRowCounts'];
        }
        if (isset($map['ExecutionStartTime'])) {
            $model->executionStartTime = $map['ExecutionStartTime'];
        }
        if (isset($map['QueryTimeMS'])) {
            $model->queryTimeMS = $map['QueryTimeMS'];
        }

        return $model;
    }
}
