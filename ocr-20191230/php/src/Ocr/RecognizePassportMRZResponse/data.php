<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizePassportMRZResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description regions
     *
     * @var array
     */
    public $regions;
    protected $_name = [
        'regions' => 'Regions',
    ];

    public function validate()
    {
        Model::validateRequired('regions', $this->regions, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['Regions'] = [];
        if (null !== $this->regions && \is_array($this->regions)) {
            $n = 0;
            foreach ($this->regions as $item) {
                $res['Regions'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n              = 0;
                foreach ($map['Regions'] as $item) {
                    $model->regions[$n++] = null !== $item ? RecognizePassportMRZResponse\data\regions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
