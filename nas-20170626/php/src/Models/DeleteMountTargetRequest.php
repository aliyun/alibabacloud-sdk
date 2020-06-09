<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DeleteMountTargetRequest extends Model {
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'mountTargetDomain' => 'MountTargetDomain',
    ];
    public function validate() {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('mountTargetDomain', $this->mountTargetDomain, true);
    }
    public function toMap() {
        $res = [];
        $res['FileSystemId'] = $this->fileSystemId;
        $res['MountTargetDomain'] = $this->mountTargetDomain;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteMountTargetRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['MountTargetDomain'])){
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        return $model;
    }
    /**
     * @description volume
     * @var string
     */
    public $fileSystemId;

    /**
     * @description domainName
     * @var string
     */
    public $mountTargetDomain;

}
