<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CancelDirQuotaRequest extends Model {
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'path' => 'Path',
        'userType' => 'UserType',
        'userId' => 'UserId',
    ];
    public function validate() {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('path', $this->path, true);
        Model::validateRequired('userType', $this->userType, true);
    }
    public function toMap() {
        $res = [];
        $res['FileSystemId'] = $this->fileSystemId;
        $res['Path'] = $this->path;
        $res['UserType'] = $this->userType;
        $res['UserId'] = $this->userId;
        return $res;
    }
    /**
     * @param array $map
     * @return CancelDirQuotaRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['Path'])){
            $model->path = $map['Path'];
        }
        if(isset($map['UserType'])){
            $model->userType = $map['UserType'];
        }
        if(isset($map['UserId'])){
            $model->userId = $map['UserId'];
        }
        return $model;
    }
    /**
     * @description volume
     * @var string
     */
    public $fileSystemId;

    /**
     * @description path
     * @var string
     */
    public $path;

    /**
     * @description userType
     * @var string
     */
    public $userType;

    /**
     * @description userId
     * @var string
     */
    public $userId;

}
