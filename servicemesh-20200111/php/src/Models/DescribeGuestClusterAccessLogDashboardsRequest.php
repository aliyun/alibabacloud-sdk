<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeGuestClusterAccessLogDashboardsRequest extends Model
{
    /**
     * @var string
     */
    public $k8sClusterId;
    protected $_name = [
        'k8sClusterId' => 'K8sClusterId',
    ];

    public function validate()
    {
        Model::validateRequired('k8sClusterId', $this->k8sClusterId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGuestClusterAccessLogDashboardsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }

        return $model;
    }
}
