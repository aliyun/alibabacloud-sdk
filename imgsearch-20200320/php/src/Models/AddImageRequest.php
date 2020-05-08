<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Models;

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
        'imageUrl'  => 'ImageUrl',
        'extraData' => 'ExtraData',
        'entityId'  => 'EntityId',
    ];

    public function validate()
    {
        Model::validateRequired('dbName', $this->dbName, true);
        Model::validateRequired('imageUrl', $this->imageUrl, true);
        Model::validateRequired('entityId', $this->entityId, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['DbName']    = $this->dbName;
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
