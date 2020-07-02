<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTablePartitionResponse\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @description partitionGuid
     *
     * @var string
     */
    public $partitionGuid;

    /**
     * @description name
     *
     * @var string
     */
    public $partitionName;

    /**
     * @description createTimestamp
     *
     * @var int
     */
    public $createTime;

    /**
     * @description dataSize
     *
     * @var int
     */
    public $dataSize;

    /**
     * @description recordCount
     *
     * @var int
     */
    public $recordCount;

    /**
     * @description modifiedTimestamp
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description tableGuid
     *
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'partitionGuid' => 'PartitionGuid',
        'partitionName' => 'PartitionName',
        'createTime'    => 'CreateTime',
        'dataSize'      => 'DataSize',
        'recordCount'   => 'RecordCount',
        'modifiedTime'  => 'ModifiedTime',
        'tableGuid'     => 'TableGuid',
    ];

    public function validate()
    {
        Model::validateRequired('partitionGuid', $this->partitionGuid, true);
        Model::validateRequired('partitionName', $this->partitionName, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('dataSize', $this->dataSize, true);
        Model::validateRequired('recordCount', $this->recordCount, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('tableGuid', $this->tableGuid, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->partitionGuid) {
            $res['PartitionGuid'] = $this->partitionGuid;
        }
        if (null !== $this->partitionName) {
            $res['PartitionName'] = $this->partitionName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->recordCount) {
            $res['RecordCount'] = $this->recordCount;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PartitionGuid'])) {
            $model->partitionGuid = $map['PartitionGuid'];
        }
        if (isset($map['PartitionName'])) {
            $model->partitionName = $map['PartitionName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['RecordCount'])) {
            $model->recordCount = $map['RecordCount'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}
