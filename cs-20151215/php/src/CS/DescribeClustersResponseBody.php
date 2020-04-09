<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS;

use AlibabaCloud\Tea\Model;

class DescribeClustersResponseBody extends Model
{
    /**
     * @description clusters
     *
     * @var array
     */
    public $clusters;
    protected $_name = [
        'clusters' => 'clusters',
    ];

    public function validate()
    {
        Model::validateRequired('clusters', $this->clusters, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['clusters'] = [];
        if (null !== $this->clusters && \is_array($this->clusters)) {
            $n = 0;
            foreach ($this->clusters as $item) {
                $res['clusters'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusters'])) {
            if (!empty($map['clusters'])) {
                $model->clusters = [];
                $n               = 0;
                foreach ($map['clusters'] as $item) {
                    $model->clusters[$n++] = null !== $item ? DescribeClustersResponseBody\clusters::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
