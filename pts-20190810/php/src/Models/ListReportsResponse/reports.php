<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models\ListReportsResponse;

use AlibabaCloud\Tea\Model;

class reports extends Model
{
    /**
     * @description reportId
     *
     * @var string
     */
    public $reportId;

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
     * @description sceneType
     *
     * @var string
     */
    public $sceneType;

    /**
     * @description maxConcurrency
     *
     * @var int
     */
    public $maxConcurrency;

    /**
     * @description vum
     *
     * @var int
     */
    public $vum;

    /**
     * @description duration
     *
     * @var string
     */
    public $duration;

    /**
     * @description beginTime
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description sceneDeleted
     *
     * @var bool
     */
    public $sceneDeleted;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'reportId'       => 'ReportId',
        'sceneId'        => 'SceneId',
        'sceneName'      => 'SceneName',
        'sceneType'      => 'SceneType',
        'maxConcurrency' => 'MaxConcurrency',
        'vum'            => 'Vum',
        'duration'       => 'Duration',
        'beginTime'      => 'BeginTime',
        'sceneDeleted'   => 'SceneDeleted',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('reportId', $this->reportId, true);
        Model::validateRequired('sceneId', $this->sceneId, true);
        Model::validateRequired('sceneName', $this->sceneName, true);
        Model::validateRequired('sceneType', $this->sceneType, true);
        Model::validateRequired('maxConcurrency', $this->maxConcurrency, true);
        Model::validateRequired('vum', $this->vum, true);
        Model::validateRequired('duration', $this->duration, true);
        Model::validateRequired('beginTime', $this->beginTime, true);
        Model::validateRequired('sceneDeleted', $this->sceneDeleted, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->sceneName) {
            $res['SceneName'] = $this->sceneName;
        }
        if (null !== $this->sceneType) {
            $res['SceneType'] = $this->sceneType;
        }
        if (null !== $this->maxConcurrency) {
            $res['MaxConcurrency'] = $this->maxConcurrency;
        }
        if (null !== $this->vum) {
            $res['Vum'] = $this->vum;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->sceneDeleted) {
            $res['SceneDeleted'] = $this->sceneDeleted;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reports
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['SceneName'])) {
            $model->sceneName = $map['SceneName'];
        }
        if (isset($map['SceneType'])) {
            $model->sceneType = $map['SceneType'];
        }
        if (isset($map['MaxConcurrency'])) {
            $model->maxConcurrency = $map['MaxConcurrency'];
        }
        if (isset($map['Vum'])) {
            $model->vum = $map['Vum'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['SceneDeleted'])) {
            $model->sceneDeleted = $map['SceneDeleted'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
