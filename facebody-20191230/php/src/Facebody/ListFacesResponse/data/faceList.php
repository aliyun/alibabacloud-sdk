<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\ListFacesResponse\data;

use AlibabaCloud\Tea\Model;

class faceList extends Model
{
    /**
     * @description faceId
     *
     * @var string
     */
    public $faceId;
    /**
     * @description extraData
     *
     * @var string
     */
    public $extraData;
    /**
     * @description entityId
     *
     * @var string
     */
    public $entityId;
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageUrl;
    protected $_name = [
        'faceId'    => 'FaceId',
        'extraData' => 'ExtraData',
        'entityId'  => 'EntityId',
        'imageUrl'  => 'ImageUrl',
    ];

    public function validate()
    {
        Model::validateRequired('faceId', $this->faceId, true);
        Model::validateRequired('extraData', $this->extraData, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('imageUrl', $this->imageUrl, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['FaceId']    = $this->faceId;
        $res['ExtraData'] = $this->extraData;
        $res['EntityId']  = $this->entityId;
        $res['ImageUrl']  = $this->imageUrl;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        return $model;
    }
}
