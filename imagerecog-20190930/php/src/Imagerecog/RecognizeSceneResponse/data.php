<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\RecognizeSceneResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description tags
     *
     * @var array
     */
    public $tags;
    protected $_name = [
        'tags' => 'Tags',
    ];

    public function validate()
    {
        Model::validateRequired('tags', $this->tags, true);
    }

    public function toMap()
    {
        $res         = [];
        $res['Tags'] = [];
        if (null !== $this->tags && \is_array($this->tags)) {
            $n = 0;
            foreach ($this->tags as $item) {
                $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? RecognizeSceneResponse\data\tags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
