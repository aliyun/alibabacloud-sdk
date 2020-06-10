<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeKeyPairsResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeKeyPairsResponse\keyPairs\keyPair;
use AlibabaCloud\Tea\Model;

class keyPairs extends Model
{
    /**
     * @description KeyPair
     *
     * @var array
     */
    public $keyPair;
    protected $_name = [
        'keyPair' => 'KeyPair',
    ];

    public function validate()
    {
        Model::validateRequired('keyPair', $this->keyPair, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPair) {
            $res['KeyPair'] = [];
            if (null !== $this->keyPair && \is_array($this->keyPair)) {
                $n = 0;
                foreach ($this->keyPair as $item) {
                    $res['KeyPair'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyPairs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPair'])) {
            if (!empty($map['KeyPair'])) {
                $model->keyPair = [];
                $n              = 0;
                foreach ($map['KeyPair'] as $item) {
                    $model->keyPair[$n++] = null !== $item ? keyPair::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
