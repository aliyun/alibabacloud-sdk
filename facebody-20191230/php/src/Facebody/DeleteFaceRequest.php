<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class DeleteFaceRequest extends Model
{
    /**
     * @description dbName
     *
     * @var string
     */
    public $dbName;
    /**
     * @description faceId
     *
     * @var string
     */
    public $faceId;
    protected $_name = [
        'dbName' => 'DbName',
        'faceId' => 'FaceId',
    ];

    public function validate()
    {
        Model::validateRequired('dbName', $this->dbName, true);
        Model::validateRequired('faceId', $this->faceId, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['DbName'] = $this->dbName;
        $res['FaceId'] = $this->faceId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }

        return $model;
    }
}
