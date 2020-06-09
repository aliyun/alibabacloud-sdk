<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyMountTargetRequest extends Model {
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'mountTargetDomain' => 'MountTargetDomain',
        'accessGroupName' => 'AccessGroupName',
        'status' => 'Status',
    ];
    public function validate() {
        Model::validateRequired('fileSystemId', $this->fileSystemId, true);
        Model::validateRequired('mountTargetDomain', $this->mountTargetDomain, true);
    }
    public function toMap() {
        $res = [];
        $res['FileSystemId'] = $this->fileSystemId;
        $res['MountTargetDomain'] = $this->mountTargetDomain;
        $res['AccessGroupName'] = $this->accessGroupName;
        $res['Status'] = $this->status;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifyMountTargetRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FileSystemId'])){
            $model->fileSystemId = $map['FileSystemId'];
        }
        if(isset($map['MountTargetDomain'])){
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if(isset($map['AccessGroupName'])){
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
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

    /**
     * @description accessGroupName
     * @var string
     */
    public $accessGroupName;

    /**
     * @description status
     * @var string
     */
    public $status;

}
