<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models\ListJobOrdersWithSizeResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description count
     *
     * @var int
     */
    public $count;

    /**
     * @description data
     *
     * @var array
     */
    public $data;
    protected $_name = [
        'count' => 'Count',
        'data'  => 'Data',
    ];

    public function validate()
    {
        Model::validateRequired('count', $this->count, true);
        Model::validateRequired('data', $this->data, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data) {
                $res['Data'] = $this->data;
            }
        }

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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $model->data = $map['Data'];
            }
        }

        return $model;
    }
}
