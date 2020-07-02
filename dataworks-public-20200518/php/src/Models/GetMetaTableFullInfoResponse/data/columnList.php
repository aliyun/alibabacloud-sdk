<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableFullInfoResponse\data;

use AlibabaCloud\Tea\Model;

class columnList extends Model
{
    /**
     * @description uuid
     *
     * @var string
     */
    public $columnGuid;

    /**
     * @description name
     *
     * @var string
     */
    public $columnName;

    /**
     * @description type
     *
     * @var string
     */
    public $columnType;

    /**
     * @description isPk
     *
     * @var bool
     */
    public $isPrimaryKey;

    /**
     * @description comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description isPartitionColumn
     *
     * @var bool
     */
    public $isPartitionColumn;

    /**
     * @description isForeignKey
     *
     * @var bool
     */
    public $isForeignKey;

    /**
     * @description caption
     *
     * @var string
     */
    public $caption;
    protected $_name = [
        'columnGuid'        => 'ColumnGuid',
        'columnName'        => 'ColumnName',
        'columnType'        => 'ColumnType',
        'isPrimaryKey'      => 'IsPrimaryKey',
        'comment'           => 'Comment',
        'isPartitionColumn' => 'IsPartitionColumn',
        'isForeignKey'      => 'IsForeignKey',
        'caption'           => 'Caption',
    ];

    public function validate()
    {
        Model::validateRequired('columnGuid', $this->columnGuid, true);
        Model::validateRequired('columnName', $this->columnName, true);
        Model::validateRequired('columnType', $this->columnType, true);
        Model::validateRequired('isPrimaryKey', $this->isPrimaryKey, true);
        Model::validateRequired('comment', $this->comment, true);
        Model::validateRequired('isPartitionColumn', $this->isPartitionColumn, true);
        Model::validateRequired('isForeignKey', $this->isForeignKey, true);
        Model::validateRequired('caption', $this->caption, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnGuid) {
            $res['ColumnGuid'] = $this->columnGuid;
        }
        if (null !== $this->columnName) {
            $res['ColumnName'] = $this->columnName;
        }
        if (null !== $this->columnType) {
            $res['ColumnType'] = $this->columnType;
        }
        if (null !== $this->isPrimaryKey) {
            $res['IsPrimaryKey'] = $this->isPrimaryKey;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->isPartitionColumn) {
            $res['IsPartitionColumn'] = $this->isPartitionColumn;
        }
        if (null !== $this->isForeignKey) {
            $res['IsForeignKey'] = $this->isForeignKey;
        }
        if (null !== $this->caption) {
            $res['Caption'] = $this->caption;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnGuid'])) {
            $model->columnGuid = $map['ColumnGuid'];
        }
        if (isset($map['ColumnName'])) {
            $model->columnName = $map['ColumnName'];
        }
        if (isset($map['ColumnType'])) {
            $model->columnType = $map['ColumnType'];
        }
        if (isset($map['IsPrimaryKey'])) {
            $model->isPrimaryKey = $map['IsPrimaryKey'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['IsPartitionColumn'])) {
            $model->isPartitionColumn = $map['IsPartitionColumn'];
        }
        if (isset($map['IsForeignKey'])) {
            $model->isForeignKey = $map['IsForeignKey'];
        }
        if (isset($map['Caption'])) {
            $model->caption = $map['Caption'];
        }

        return $model;
    }
}
