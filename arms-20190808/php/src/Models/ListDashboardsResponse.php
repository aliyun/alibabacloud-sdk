<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListDashboardsResponse\dashboardVos;
use AlibabaCloud\Tea\Model;

class ListDashboardsResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data
     *
     * @var array
     */
    public $dashboardVos;
    protected $_name = [
        'requestId'    => 'RequestId',
        'dashboardVos' => 'DashboardVos',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('dashboardVos', $this->dashboardVos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dashboardVos) {
            $res['DashboardVos'] = [];
            if (null !== $this->dashboardVos && \is_array($this->dashboardVos)) {
                $n = 0;
                foreach ($this->dashboardVos as $item) {
                    $res['DashboardVos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDashboardsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DashboardVos'])) {
            if (!empty($map['DashboardVos'])) {
                $model->dashboardVos = [];
                $n                   = 0;
                foreach ($map['DashboardVos'] as $item) {
                    $model->dashboardVos[$n++] = null !== $item ? dashboardVos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
