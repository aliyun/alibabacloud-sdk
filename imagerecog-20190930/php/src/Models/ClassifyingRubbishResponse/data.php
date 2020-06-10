<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\ClassifyingRubbishResponse;

use AlibabaCloud\SDK\Imagerecog\V20190930\Models\ClassifyingRubbishResponse\data\elements;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description sensitive
     *
     * @var bool
     */
    public $sensitive;

    /**
     * @description elements
     *
     * @var array
     */
    public $elements;
    protected $_name = [
        'sensitive' => 'Sensitive',
        'elements'  => 'Elements',
    ];

    public function validate()
    {
        Model::validateRequired('sensitive', $this->sensitive, true);
        Model::validateRequired('elements', $this->elements, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sensitive) {
            $res['Sensitive'] = $this->sensitive;
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
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Sensitive'])) {
            $model->sensitive = $map['Sensitive'];
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
