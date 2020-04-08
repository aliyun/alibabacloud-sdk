<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\ListFaceEntitiesResponse\data;

use AlibabaCloud\Tea\Model;

class entities extends Model
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
    /**
     * @description faceCount
     *
     * @var int
     */
    public $faceCount;
    /**
     * @description labels
     *
     * @var string
     */
    public $labels;
    /**
     * @description createdAt
     *
     * @var int
     */
    public $createdAt;
    /**
     * @description updatedAt
     *
     * @var int
     */
    public $updatedAt;
    protected $_name = [
        'dbName'    => 'DbName',
        'entityId'  => 'EntityId',
        'faceCount' => 'FaceCount',
        'labels'    => 'Labels',
        'createdAt' => 'CreatedAt',
        'updatedAt' => 'UpdatedAt',
    ];

    public function validate()
    {
        Model::validateRequired('dbName', $this->dbName, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('faceCount', $this->faceCount, true);
        Model::validateRequired('labels', $this->labels, true);
        Model::validateRequired('createdAt', $this->createdAt, true);
        Model::validateRequired('updatedAt', $this->updatedAt, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['DbName']    = $this->dbName;
        $res['EntityId']  = $this->entityId;
        $res['FaceCount'] = $this->faceCount;
        $res['Labels']    = $this->labels;
        $res['CreatedAt'] = $this->createdAt;
        $res['UpdatedAt'] = $this->updatedAt;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entities
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
        if (isset($map['FaceCount'])) {
            $model->faceCount = $map['FaceCount'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }

        return $model;
    }
}
