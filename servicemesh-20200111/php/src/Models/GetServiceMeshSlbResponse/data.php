<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetServiceMeshSlbResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $serverHealthStatus;
    protected $_name = [
        'loadBalancerId'     => 'LoadBalancerId',
        'status'             => 'Status',
        'serverHealthStatus' => 'ServerHealthStatus',
    ];

    public function validate()
    {
        Model::validateRequired('loadBalancerId', $this->loadBalancerId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('serverHealthStatus', $this->serverHealthStatus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->serverHealthStatus) {
            $res['ServerHealthStatus'] = $this->serverHealthStatus;
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
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ServerHealthStatus'])) {
            $model->serverHealthStatus = $map['ServerHealthStatus'];
        }

        return $model;
    }
}
