<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetFileVersionRequest extends Model
{
    /**
     * @description FileId
     *
     * @var int
     */
    public $fileId;

    /**
     * @description projectId
     *
     * @var int
     */
    public $projectId;

    /**
     * @description ProjectIdentifier
     *
     * @var string
     */
    public $projectIdentifier;

    /**
     * @description FileVersion
     *
     * @var int
     */
    public $fileVersion;
    protected $_name = [
        'fileId'            => 'FileId',
        'projectId'         => 'ProjectId',
        'projectIdentifier' => 'ProjectIdentifier',
        'fileVersion'       => 'FileVersion',
    ];

    public function validate()
    {
        Model::validateRequired('fileId', $this->fileId, true);
        Model::validateRequired('fileVersion', $this->fileVersion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectIdentifier) {
            $res['ProjectIdentifier'] = $this->projectIdentifier;
        }
        if (null !== $this->fileVersion) {
            $res['FileVersion'] = $this->fileVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFileVersionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectIdentifier'])) {
            $model->projectIdentifier = $map['ProjectIdentifier'];
        }
        if (isset($map['FileVersion'])) {
            $model->fileVersion = $map['FileVersion'];
        }

        return $model;
    }
}
