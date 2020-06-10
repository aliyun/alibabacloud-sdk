<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\ListScenesResponse;

use AlibabaCloud\Tea\Model;

class scenes extends Model
{
    /**
     * @description sceneId
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description sceneName
     *
     * @var string
     */
    public $sceneName;

    /**
     * @description duration
     *
     * @var int
     */
    public $duration;

    /**
     * @description modifiedTime
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description type
     *
     * @var string
     */
    public $sceneType;

    /**
     * @description cronable
     *
     * @var bool
     */
    public $cronable;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'sceneId'      => 'SceneId',
        'sceneName'    => 'SceneName',
        'duration'     => 'Duration',
        'modifiedTime' => 'ModifiedTime',
        'sceneType'    => 'SceneType',
        'cronable'     => 'Cronable',
        'status'       => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('sceneId', $this->sceneId, true);
        Model::validateRequired('sceneName', $this->sceneName, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('sceneType', $this->sceneType, true);
        Model::validateRequired('cronable', $this->cronable, true);
        Model::validateRequired('status', $this->status, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->cronable) {
            $res['Cronable'] = $this->cronable;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scenes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }
        if (isset($map['Cronable'])) {
            $model->cronable = $map['Cronable'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
