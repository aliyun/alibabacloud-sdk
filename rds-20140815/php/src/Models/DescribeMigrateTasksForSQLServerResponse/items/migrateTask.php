<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeMigrateTasksForSQLServerResponse\items;

use AlibabaCloud\Tea\Model;

class migrateTask extends Model
{
    /**
     * @description dbName
     *
     * @var string
     */
    public $DBName;

    /**
     * @description migrateIaskId
     *
     * @var string
     */
    public $migrateIaskId;

    /**
     * @description createTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description taskType
     *
     * @var string
     */
    public $taskType;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description isDBReplaced
     *
     * @var string
     */
    public $isDBReplaced;

    /**
     * @description desc
     *
     * @var string
     */
    public $desc;
    protected $_name = [
        'DBName'        => 'DBName',
        'migrateIaskId' => 'MigrateIaskId',
        'createTime'    => 'CreateTime',
        'endTime'       => 'EndTime',
        'taskType'      => 'TaskType',
        'status'        => 'Status',
        'isDBReplaced'  => 'IsDBReplaced',
        'desc'          => 'Desc',
    ];

    public function validate()
    {
        Model::validateRequired('DBName', $this->DBName, true);
        Model::validateRequired('migrateIaskId', $this->migrateIaskId, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('taskType', $this->taskType, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('isDBReplaced', $this->isDBReplaced, true);
        Model::validateRequired('desc', $this->desc, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBName) {
            $res['DBName'] = $this->DBName;
        }
        if (null !== $this->migrateIaskId) {
            $res['MigrateIaskId'] = $this->migrateIaskId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->isDBReplaced) {
            $res['IsDBReplaced'] = $this->isDBReplaced;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return migrateTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBName'])) {
            $model->DBName = $map['DBName'];
        }
        if (isset($map['MigrateIaskId'])) {
            $model->migrateIaskId = $map['MigrateIaskId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IsDBReplaced'])) {
            $model->isDBReplaced = $map['IsDBReplaced'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
