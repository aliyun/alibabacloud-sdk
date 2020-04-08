<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class DeleteFaceEntityRequest extends Model
{
    /**
     * @description dbName
     *
     * @var string
     */
    public $dbName;
    /**
     * @description entityId
     *
     * @var string
     */
    public $entityId;
    protected $_name = [
        'dbName'   => 'DbName',
        'entityId' => 'EntityId',
    ];

    public function validate()
    {
        Model::validateRequired('dbName', $this->dbName, true);
        Model::validateRequired('entityId', $this->entityId, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['DbName']   = $this->dbName;
        $res['EntityId'] = $this->entityId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFaceEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        return $model;
    }
}
