<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms\DescribeSecretResponse;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @description Tag
     *
     * @var array
     */
    public $tag;
    protected $_name = [
        'tag' => 'Tag',
    ];

    public function validate()
    {
        Model::validateRequired('tag', $this->tag, true);
    }

    public function toMap()
    {
        $res        = [];
        $res['Tag'] = [];
        if (null !== $this->tag && \is_array($this->tag)) {
            $n = 0;
            foreach ($this->tag as $item) {
                $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? DescribeSecretResponse\tags\tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
