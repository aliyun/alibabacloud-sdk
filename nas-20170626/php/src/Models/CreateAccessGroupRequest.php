<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessGroupRequest extends Model {
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'accessGroupType' => 'AccessGroupType',
        'description' => 'Description',
        'fileSystemType' => 'FileSystemType',
    ];
    public function validate() {
        Model::validateRequired('accessGroupName', $this->accessGroupName, true);
        Model::validateRequired('accessGroupType', $this->accessGroupType, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessGroupName'] = $this->accessGroupName;
        $res['AccessGroupType'] = $this->accessGroupType;
        $res['Description'] = $this->description;
        $res['FileSystemType'] = $this->fileSystemType;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateAccessGroupRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessGroupName'])){
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if(isset($map['AccessGroupType'])){
            $model->accessGroupType = $map['AccessGroupType'];
        }
        if(isset($map['Description'])){
            $model->description = $map['Description'];
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
     * @description accessGroupType
     * @var string
     */
    public $accessGroupType;

    /**
     * @description description
     * @var string
     */
    public $description;

    /**
     * @description fileSystemType
     * @var string
     */
    public $fileSystemType;

}
