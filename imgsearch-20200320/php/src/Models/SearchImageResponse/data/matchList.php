<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Models\SearchImageResponse\data;

use AlibabaCloud\Tea\Model;

class matchList extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $extraData;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var float
     */
    public $score;
    protected $_name = [
        'dataId'    => 'DataId',
        'extraData' => 'ExtraData',
        'entityId'  => 'EntityId',
        'imageUrl'  => 'ImageUrl',
        'score'     => 'Score',
    ];

    public function validate()
    {
        Model::validateRequired('dataId', $this->dataId, true);
        Model::validateRequired('extraData', $this->extraData, true);
        Model::validateRequired('entityId', $this->entityId, true);
        Model::validateRequired('imageUrl', $this->imageUrl, true);
        Model::validateRequired('score', $this->score, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->extraData) {
            $res['ExtraData'] = $this->extraData;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return matchList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
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
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
