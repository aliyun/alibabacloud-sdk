<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190810\Models;

use AlibabaCloud\Tea\Model;

class ReplaceOssFileRequest extends Model
{
    /**
     * @description sceneId
     *
     * @var string
     */
    public $sceneId;

    /**
     * @description originalOssFileUrl
     *
     * @var string
     */
    public $originalOssFileUrl;

    /**
     * @description newOssFileUrl
     *
     * @var string
     */
    public $newOssFileUrl;

    /**
     * @description jobId
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'sceneId'            => 'SceneId',
        'originalOssFileUrl' => 'OriginalOssFileUrl',
        'newOssFileUrl'      => 'NewOssFileUrl',
        'jobId'              => 'JobId',
    ];

    public function validate()
    {
        Model::validateRequired('sceneId', $this->sceneId, true);
        Model::validateRequired('originalOssFileUrl', $this->originalOssFileUrl, true);
        Model::validateRequired('newOssFileUrl', $this->newOssFileUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->originalOssFileUrl) {
            $res['OriginalOssFileUrl'] = $this->originalOssFileUrl;
        }
        if (null !== $this->newOssFileUrl) {
            $res['NewOssFileUrl'] = $this->newOssFileUrl;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplaceOssFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['OriginalOssFileUrl'])) {
            $model->originalOssFileUrl = $map['OriginalOssFileUrl'];
        }
        if (isset($map['NewOssFileUrl'])) {
            $model->newOssFileUrl = $map['NewOssFileUrl'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
