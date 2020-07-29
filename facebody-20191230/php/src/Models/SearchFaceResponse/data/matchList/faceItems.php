<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceResponse\data\matchList;

use AlibabaCloud\Tea\Model;

class faceItems extends Model
{
    /**
     * @var string
     */
    public $faceId;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $extraData;

    /**
     * @var string
     */
    public $entityId;
    protected $_name = [
        'faceId'    => 'FaceId',
        'score'     => 'Score',
        'extraData' => 'ExtraData',
        'entityId'  => 'EntityId',
    ];

    public function validate()
    {
        Model::validateRequired('faceId', $this->faceId, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('extraData', $this->extraData, true);
        Model::validateRequired('entityId', $this->entityId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceId) {
            $res['FaceId'] = $this->faceId;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return faceItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaceId'])) {
            $model->faceId = $map['FaceId'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        return $model;
    }
}
