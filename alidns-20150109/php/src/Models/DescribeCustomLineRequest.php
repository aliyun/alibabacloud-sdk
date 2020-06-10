<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeCustomLineRequest extends Model
{
    /**
     * @description lineId
     *
     * @var int
     */
    public $lineId;

    /**
     * @description lang
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'lineId' => 'LineId',
        'lang'   => 'Lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineId) {
            $res['LineId'] = $this->lineId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LineId'])) {
            $model->lineId = $map['LineId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        return $model;
    }
}
