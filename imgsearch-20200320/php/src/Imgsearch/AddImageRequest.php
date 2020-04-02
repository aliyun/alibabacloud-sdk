<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch;

use AlibabaCloud\Tea\Model;

class AddImageRequest extends Model
{
    /**
     * @description dbName
     *
     * @var string
     */
    public $dbName;
    /**
     * @description dataId
     *
     * @var string
     */
    public $dataId;
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageUrl;
    /**
     * @description extraData
     *
     * @var string
     */
    public $extraData;
    /**
     * @description entityId
     *
     * @var string
     */
    public $entityId;
    protected $_name = [
        'dbName'    => 'DbName',
        'dataId'    => 'DataId',
        'imageUrl'  => 'ImageUrl',
        'extraData' => 'ExtraData',
        'entityId'  => 'EntityId',
    ];

    public function validate()
    {
        Model::validateRequired('dbName', $this->dbName, true);
        Model::validateRequired('dataId', $this->dataId, true);
        Model::validateRequired('imageUrl', $this->imageUrl, true);
        Model::validateRequired('entityId', $this->entityId, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['DbName']    = $this->dbName;
        $res['DataId']    = $this->dataId;
        $res['ImageUrl']  = $this->imageUrl;
        $res['ExtraData'] = $this->extraData;
        $res['EntityId']  = $this->entityId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['ExtraData'])) {
            $model->extraData = $map['ExtraData'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        return $model;
    }
}
