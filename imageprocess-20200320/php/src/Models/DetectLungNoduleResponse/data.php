<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleResponse;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleResponse\data\series;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Series
     *
     * @var array
     */
    public $series;
    protected $_name = [
        'series' => 'Series',
    ];

    public function validate()
    {
        Model::validateRequired('series', $this->series, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->series) {
            $res['Series'] = [];
            if (null !== $this->series && \is_array($this->series)) {
                $n = 0;
                foreach ($this->series as $item) {
                    $res['Series'][$n++] = null !== $item ? $item->toMap() : $item;
                }
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
        if (isset($map['Series'])) {
            if (!empty($map['Series'])) {
                $model->series = [];
                $n             = 0;
                foreach ($map['Series'] as $item) {
                    $model->series[$n++] = null !== $item ? series::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
