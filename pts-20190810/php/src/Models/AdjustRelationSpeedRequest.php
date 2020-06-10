<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class AdjustRelationSpeedRequest extends Model
{
    /**
     * @description sceneId
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description speed
     *
     * @var int
     */
    public $speed;

    /**
     * @description relationIndex
     *
     * @var int
     */
    public $relationIndex;
    protected $_name = [
        'sceneId'       => 'SceneId',
        'speed'         => 'Speed',
        'relationIndex' => 'RelationIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }
        if (null !== $this->relationIndex) {
            $res['RelationIndex'] = $this->relationIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdjustRelationSpeedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }
        if (isset($map['RelationIndex'])) {
            $model->relationIndex = $map['RelationIndex'];
        }

        return $model;
    }
}
