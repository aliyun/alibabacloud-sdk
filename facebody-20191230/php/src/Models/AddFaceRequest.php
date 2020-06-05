<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class AddFaceRequest extends Model {
    protected $_name = [
        'dbName' => 'DbName',
        'imageUrl' => 'ImageUrl',
        'entityId' => 'EntityId',
        'extraData' => 'ExtraData',
    ];
    public function validate() {
        Model::validateRequired('dbName', $this->dbName, true);
        Model::validateRequired('imageUrl', $this->imageUrl, true);
        Model::validateRequired('entityId', $this->entityId, true);
    }
    public function toMap() {
        $res = [];
        $res['DbName'] = $this->dbName;
        $res['ImageUrl'] = $this->imageUrl;
        $res['EntityId'] = $this->entityId;
        $res['ExtraData'] = $this->extraData;
        return $res;
    }
    /**
     * @param array $map
     * @return AddFaceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DbName'])){
            $model->dbName = $map['DbName'];
        }
        if(isset($map['ImageUrl'])){
            $model->imageUrl = $map['ImageUrl'];
        }
        if(isset($map['EntityId'])){
            $model->entityId = $map['EntityId'];
        }
        if(isset($map['ExtraData'])){
            $model->extraData = $map['ExtraData'];
        }
        return $model;
    }
    /**
     * @description dbName
     * @var string
     */
    public $dbName;

    /**
     * @description imageUrl
     * @var string
     */
    public $imageUrl;

    /**
     * @description entityId
     * @var string
     */
    public $entityId;

    /**
     * @description extraData
     * @var string
     */
    public $extraData;

}
