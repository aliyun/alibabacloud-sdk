<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleResponse\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLungNoduleResponse\data\series\elements;
use AlibabaCloud\Tea\Model;

class series extends Model
{
    /**
     * @description SeriesInstanceUid
     *
     * @var string
     */
    public $seriesInstanceUid;

    /**
     * @description Elements
     *
     * @var array
     */
    public $elements;
    protected $_name = [
        'seriesInstanceUid' => 'SeriesInstanceUid',
        'elements'          => 'Elements',
    ];

    public function validate()
    {
        Model::validateRequired('seriesInstanceUid', $this->seriesInstanceUid, true);
        Model::validateRequired('elements', $this->elements, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->seriesInstanceUid) {
            $res['SeriesInstanceUid'] = $this->seriesInstanceUid;
        }
        if (null !== $this->elements) {
            $res['Elements'] = [];
            if (null !== $this->elements && \is_array($this->elements)) {
                $n = 0;
                foreach ($this->elements as $item) {
                    $res['Elements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return series
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SeriesInstanceUid'])) {
            $model->seriesInstanceUid = $map['SeriesInstanceUid'];
        }
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n               = 0;
                foreach ($map['Elements'] as $item) {
                    $model->elements[$n++] = null !== $item ? elements::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
