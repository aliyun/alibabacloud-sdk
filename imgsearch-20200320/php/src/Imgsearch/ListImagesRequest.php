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
     * @description fromScrollId
     *
     * @var string
     */
    public $fromScrollId;
    protected $_name = [
        'dbName'       => 'DbName',
        'fromScrollId' => 'FromScrollId',
    ];

    public function validate()
    {
        Model::validateRequired('dbName', $this->dbName, true);
    }

    public function toMap()
    {
        $res                 = [];
        $res['DbName']       = $this->dbName;
        $res['FromScrollId'] = $this->fromScrollId;

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
        if (isset($map['FromScrollId'])) {
            $model->fromScrollId = $map['FromScrollId'];
        }

        return $model;
    }
}
