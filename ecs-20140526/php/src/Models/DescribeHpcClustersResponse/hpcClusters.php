<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHpcClustersResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeHpcClustersResponse\hpcClusters\hpcCluster;
use AlibabaCloud\Tea\Model;

class hpcClusters extends Model
{
    /**
     * @var array
     */
    public $hpcCluster;
    protected $_name = [
        'hpcCluster' => 'HpcCluster',
    ];

    public function validate()
    {
        Model::validateRequired('hpcCluster', $this->hpcCluster, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hpcCluster) {
            $res['HpcCluster'] = [];
            if (null !== $this->hpcCluster && \is_array($this->hpcCluster)) {
                $n = 0;
                foreach ($this->hpcCluster as $item) {
                    $res['HpcCluster'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hpcClusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HpcCluster'])) {
            if (!empty($map['HpcCluster'])) {
                $model->hpcCluster = [];
                $n                 = 0;
                foreach ($map['HpcCluster'] as $item) {
                    $model->hpcCluster[$n++] = null !== $item ? hpcCluster::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
