<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class AddFaceAdvanceRequest extends Model {
    protected $_name = [
        'imageUrlObject' => 'ImageUrlObject',
        'dbName' => 'DbName',
        'entityId' => 'EntityId',
        'extraData' => 'ExtraData',
    ];
    public function validate() {
        Model::validateRequired('imageUrlObject', $this->imageUrlObject, true);
        Model::validateRequired('dbName', $this->dbName, true);
        Model::validateRequired('entityId', $this->entityId, true);
    }
    public function toMap() {
        $res = [];
        $res['ImageUrlObject'] = $this->imageUrlObject;
        $res['DbName'] = $this->dbName;
        $res['EntityId'] = $this->entityId;
        $res['ExtraData'] = $this->extraData;
        return $res;
    }
    /**
     * @param array $map
     * @return AddFaceAdvanceRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['ImageUrlObject'])){
            $model->imageUrlObject = $map['ImageUrlObject'];
        }
        if(isset($map['DbName'])){
            $model->dbName = $map['DbName'];
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
     * @description ImageUrlObject
     * @var Stream
     */
    public $imageUrlObject;

    /**
     * @description dbName
     * @var string
     */
    public $dbName;

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
