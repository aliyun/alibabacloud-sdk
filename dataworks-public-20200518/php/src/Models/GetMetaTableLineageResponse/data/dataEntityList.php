<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableLineageResponse\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @description tableName
     *
     * @var string
     */
    public $tableName;

    /**
     * @description tableGuid
     *
     * @var string
     */
    public $tableGuid;
    protected $_name = [
        'tableName' => 'TableName',
        'tableGuid' => 'TableGuid',
    ];

    public function validate()
    {
        Model::validateRequired('tableName', $this->tableName, true);
        Model::validateRequired('tableGuid', $this->tableGuid, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
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
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }

        return $model;
    }
}
