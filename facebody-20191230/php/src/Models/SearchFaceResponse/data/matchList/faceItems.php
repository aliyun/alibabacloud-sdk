<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models\SearchFaceResponse\data\matchList;

use AlibabaCloud\Tea\Model;

class faceItems extends Model {
    protected $_name = [
        'faceId' => 'FaceId',
        'score' => 'Score',
        'extraData' => 'ExtraData',
        'entityId' => 'EntityId',
    ];
    public function validate() {
        Model::validateRequired('faceId', $this->faceId, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('extraData', $this->extraData, true);
        Model::validateRequired('entityId', $this->entityId, true);
    }
    public function toMap() {
        $res = [];
        $res['FaceId'] = $this->faceId;
        $res['Score'] = $this->score;
        $res['ExtraData'] = $this->extraData;
        $res['EntityId'] = $this->entityId;
        return $res;
    }
    /**
     * @param array $map
     * @return faceItems
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FaceId'])){
            $model->faceId = $map['FaceId'];
        }
        if(isset($map['Score'])){
            $model->score = $map['Score'];
        }
        if(isset($map['ExtraData'])){
            $model->extraData = $map['ExtraData'];
        }
        if(isset($map['EntityId'])){
            $model->entityId = $map['EntityId'];
        }
        return $model;
    }
    /**
     * @description faceId
     * @var string
     */
    public $faceId;

    /**
     * @description score
     * @var float
     */
    public $score;

    /**
     * @description extraData
     * @var string
     */
    public $extraData;

    /**
     * @description entityId
     * @var string
     */
    public $entityId;

}
