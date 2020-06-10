<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class AdjustJMeterSpeedRequest extends Model
{
    /**
     * @description sceneId
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description loadMode
     *
     * @var string
     */
    public $loadMode;

    /**
     * @description speed
     *
     * @var int
     */
    public $speed;
    protected $_name = [
        'sceneId'  => 'SceneId',
        'loadMode' => 'LoadMode',
        'speed'    => 'Speed',
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
        if (null !== $this->loadMode) {
            $res['LoadMode'] = $this->loadMode;
        }
        if (null !== $this->speed) {
            $res['Speed'] = $this->speed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AdjustJMeterSpeedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['LoadMode'])) {
            $model->loadMode = $map['LoadMode'];
        }
        if (isset($map['Speed'])) {
            $model->speed = $map['Speed'];
        }

        return $model;
    }
}
