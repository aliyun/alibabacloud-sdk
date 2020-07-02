<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDataServicePublishedApiResponse\data\scriptDetails;

use AlibabaCloud\Tea\Model;

class scriptConnection extends Model
{
    /**
     * @description connectionId
     *
     * @var int
     */
    public $connectionId;

    /**
     * @description tableName
     *
     * @var string
     */
    public $tableName;
    protected $_name = [
        'connectionId' => 'ConnectionId',
        'tableName'    => 'TableName',
    ];

    public function validate()
    {
        Model::validateRequired('connectionId', $this->connectionId, true);
        Model::validateRequired('tableName', $this->tableName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scriptConnection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        return $model;
    }
}
