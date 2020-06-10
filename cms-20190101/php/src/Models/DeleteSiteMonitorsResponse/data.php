<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DeleteSiteMonitorsResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description count
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'count' => 'count',
    ];

    public function validate()
    {
        Model::validateRequired('count', $this->count, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
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
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }

        return $model;
    }
}
