<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models\ParseFaceResponse;

use AlibabaCloud\SDK\Imageseg\V20191230\Models\ParseFaceResponse\data\elements;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description originImageUrl
     *
     * @var string
     */
    public $originImageURL;

    /**
     * @description elements
     *
     * @var array
     */
    public $elements;
    protected $_name = [
        'originImageURL' => 'OriginImageURL',
        'elements'       => 'Elements',
    ];

    public function validate()
    {
        Model::validateRequired('originImageURL', $this->originImageURL, true);
        Model::validateRequired('elements', $this->elements, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['OriginImageURL'] = $this->originImageURL;
        $res['Elements']       = [];
        if (null !== $this->elements && \is_array($this->elements)) {
            $n = 0;
            foreach ($this->elements as $item) {
                $res['Elements'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['OriginImageURL'])) {
            $model->originImageURL = $map['OriginImageURL'];
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
