<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch;

use AlibabaCloud\Tea\Model;

class ListImagesRequest extends Model
{
    /**
     * @description dbName
     *
     * @var string
     */
    public $dbName;

    /**
     * @description token
     *
     * @var string
     */
    public $token;

    /**
     * @description offset
     *
     * @var int
     */
    public $offset;

    /**
     * @description limit
     *
     * @var int
     */
    public $limit;

    /**
     * @description order
     *
     * @var string
     */
    public $order;

    /**
     * @description entityIdPrefix
     *
     * @var string
     */
    public $entityIdPrefix;
    protected $_name = [
        'dbName'         => 'DbName',
        'token'          => 'Token',
        'offset'         => 'Offset',
        'limit'          => 'Limit',
        'order'          => 'Order',
        'entityIdPrefix' => 'EntityIdPrefix',
    ];

    public function validate()
    {
        Model::validateRequired('dbName', $this->dbName, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['DbName']         = $this->dbName;
        $res['Token']          = $this->token;
        $res['Offset']         = $this->offset;
        $res['Limit']          = $this->limit;
        $res['Order']          = $this->order;
        $res['EntityIdPrefix'] = $this->entityIdPrefix;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['EntityIdPrefix'])) {
            $model->entityIdPrefix = $map['EntityIdPrefix'];
        }

        return $model;
    }
}
