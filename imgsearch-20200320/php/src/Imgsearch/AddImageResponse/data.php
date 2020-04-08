<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imgsearch\V20200320\Imgsearch\AddImageResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description dataId
     *
     * @var string
     */
    public $dataId;
    protected $_name = [
        'dataId' => 'DataId',
    ];

    public function validate()
    {
        Model::validateRequired('dataId', $this->dataId, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['DataId'] = $this->dataId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        return $model;
    }
}
