<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class SearchFaceRequest extends Model
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
     * @description limit
     *
     * @var int
     */
    public $limit;
    protected $_name = [
        'dbName'   => 'DbName',
        'imageUrl' => 'ImageUrl',
        'limit'    => 'Limit',
    ];

    public function validate()
    {
        Model::validateRequired('dbName', $this->dbName, true);
        Model::validateRequired('imageUrl', $this->imageUrl, true);
        Model::validateRequired('limit', $this->limit, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['DbName']   = $this->dbName;
        $res['ImageUrl'] = $this->imageUrl;
        $res['Limit']    = $this->limit;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchFaceRequest
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
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        return $model;
    }
}
