<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DeleteAccessGroupRequest extends Model {
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'fileSystemType' => 'FileSystemType',
    ];
    public function validate() {
        Model::validateRequired('accessGroupName', $this->accessGroupName, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessGroupName'] = $this->accessGroupName;
        $res['FileSystemType'] = $this->fileSystemType;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteAccessGroupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessGroupName'])){
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if(isset($map['FileSystemType'])){
            $model->fileSystemType = $map['FileSystemType'];
        }
        return $model;
    }
    /**
     * @description accessGroupName
     * @var string
     */
    public $accessGroupName;

    /**
     * @description fileSystemType
     * @var string
     */
    public $fileSystemType;

}
