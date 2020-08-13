<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\DescribeGuestClusterAccessLogDashboardsResponse\dashboards;
use AlibabaCloud\Tea\Model;

class DescribeGuestClusterAccessLogDashboardsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $k8sClusterId;

    /**
     * @var array
     */
    public $dashboards;
    protected $_name = [
        'requestId'    => 'RequestId',
        'k8sClusterId' => 'K8sClusterId',
        'dashboards'   => 'Dashboards',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('k8sClusterId', $this->k8sClusterId, true);
        Model::validateRequired('dashboards', $this->dashboards, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->dashboards) {
            $res['Dashboards'] = [];
            if (null !== $this->dashboards && \is_array($this->dashboards)) {
                $n = 0;
                foreach ($this->dashboards as $item) {
                    $res['Dashboards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGuestClusterAccessLogDashboardsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['Dashboards'])) {
            if (!empty($map['Dashboards'])) {
                $model->dashboards = [];
                $n                 = 0;
                foreach ($map['Dashboards'] as $item) {
                    $model->dashboards[$n++] = null !== $item ? dashboards::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
