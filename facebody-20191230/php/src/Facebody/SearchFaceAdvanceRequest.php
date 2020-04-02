<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody;

use AlibabaCloud\Tea\Model;

class SearchFaceAdvanceRequest extends Model
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
     * @description limit
     *
     * @var int
     */
    public $limit;
    protected $_name = [
        'imageUrlObject' => 'ImageUrlObject',
        'dbName'         => 'DbName',
        'limit'          => 'Limit',
    ];

    public function validate()
    {
        Model::validateRequired('imageUrlObject', $this->imageUrlObject, true);
        Model::validateRequired('dbName', $this->dbName, true);
        Model::validateRequired('limit', $this->limit, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['ImageUrlObject'] = $this->imageUrlObject;
        $res['DbName']         = $this->dbName;
        $res['Limit']          = $this->limit;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchFaceAdvanceRequest
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        return $model;
    }
}
