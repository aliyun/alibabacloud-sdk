<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class SetDirQuotaRequest extends Model
{
    /**
     * @description volume
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description path
     *
     * @var string
     */
    public $path;

    /**
     * @description quotaType
     *
     * @var string
     */
    public $quotaType;

    /**
     * @description userType
     *
     * @var string
     */
    public $userType;

    /**
     * @description userId
     *
     * @var string
     */
    public $userId;

    /**
     * @description sizeLimit
     *
     * @var int
     */
    public $sizeLimit;

    /**
     * @description fileCountLimit
     *
     * @var int
     */
    public $fileCountLimit;
    protected $_name = [
        'fileSystemId'   => 'FileSystemId',
        'path'           => 'Path',
        'quotaType'      => 'QuotaType',
        'userType'       => 'UserType',
        'userId'         => 'UserId',
        'sizeLimit'      => 'SizeLimit',
        'fileCountLimit' => 'FileCountLimit',
    ];

    public function validate()
    {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('path', $this->path, true);
        Model::validateRequired('quotaType', $this->quotaType, true);
        Model::validateRequired('userType', $this->userType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->sizeLimit) {
            $res['SizeLimit'] = $this->sizeLimit;
        }
        if (null !== $this->fileCountLimit) {
            $res['FileCountLimit'] = $this->fileCountLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDirQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['SizeLimit'])) {
            $model->sizeLimit = $map['SizeLimit'];
        }
        if (isset($map['FileCountLimit'])) {
            $model->fileCountLimit = $map['FileCountLimit'];
        }

        return $model;
    }
}
