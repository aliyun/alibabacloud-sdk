<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch;

use AlibabaCloud\Tea\Model;

class AddImageAdvanceRequest extends Model
{
    /**
     * @description ImageUrlObject
     *
     * @var Stream
     */
    public $imageUrlObject;

    /**
     * @description dbName
     *
     * @var string
     */
    public $dbName;

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
        'imageUrlObject' => 'ImageUrlObject',
        'dbName'         => 'DbName',
        'extraData'      => 'ExtraData',
        'entityId'       => 'EntityId',
    ];

    public function validate()
    {
        Model::validateRequired('imageUrlObject', $this->imageUrlObject, true);
        Model::validateRequired('dbName', $this->dbName, true);
        Model::validateRequired('entityId', $this->entityId, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['ImageUrlObject'] = $this->imageUrlObject;
        $res['DbName']         = $this->dbName;
        $res['ExtraData']      = $this->extraData;
        $res['EntityId']       = $this->entityId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddImageAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrlObject'])) {
            $model->imageUrlObject = $map['ImageUrlObject'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
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
