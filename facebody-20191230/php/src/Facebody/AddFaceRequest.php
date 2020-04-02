<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class AddFaceRequest extends Model
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
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageUrl;
    /**
     * @description entityId
     *
     * @var string
     */
    public $entityId;
    /**
     * @description extraData
     *
     * @var string
     */
    public $extraData;
    protected $_name = [
        'dbName'    => 'DbName',
        'faceId'    => 'FaceId',
        'imageUrl'  => 'ImageUrl',
        'entityId'  => 'EntityId',
        'extraData' => 'ExtraData',
    ];

    public function validate()
    {
        Model::validateRequired('dbName', $this->dbName, true);
        Model::validateRequired('faceId', $this->faceId, true);
        Model::validateRequired('imageUrl', $this->imageUrl, true);
        Model::validateRequired('entityId', $this->entityId, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['DbName']    = $this->dbName;
        $res['FaceId']    = $this->faceId;
        $res['ImageUrl']  = $this->imageUrl;
        $res['EntityId']  = $this->entityId;
        $res['ExtraData'] = $this->extraData;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFaceRequest
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
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }

        return $model;
    }
}
