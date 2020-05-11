<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeAddonsQuery extends Model
{
    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description cluster_type
     *
     * @var string
     */
    public $clusterType;
    protected $_name = [
        'region'      => 'region',
        'clusterType' => 'cluster_type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res                 = [];
        $res['region']       = $this->region;
        $res['cluster_type'] = $this->clusterType;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAddonsQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }

        return $model;
    }
}
