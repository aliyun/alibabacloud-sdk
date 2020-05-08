<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\upgradeComponents\kubernetes;
use AlibabaCloud\Tea\Model;

class upgradeComponents extends Model
{
    /**
     * @description Kubernetes
     *
     * @var upgradeComponents.kubernetes
     */
    public $kubernetes;
    protected $_name = [
        'kubernetes' => 'Kubernetes',
    ];

    public function validate()
    {
        Model::validateRequired('kubernetes', $this->kubernetes, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['Kubernetes'] = null !== $this->kubernetes ? $this->kubernetes->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return upgradeComponents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Kubernetes'])) {
            $model->kubernetes = kubernetes::fromMap($map['Kubernetes']);
        }

        return $model;
    }
}
