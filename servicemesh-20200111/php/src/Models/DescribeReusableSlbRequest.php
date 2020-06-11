<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeReusableSlbRequest extends Model
{
    /**
     * @description k8sClusterId
     *
     * @var string
     */
    public $k8sClusterId;

    /**
     * @description networkType
     *
     * @var string
     */
    public $networkType;
    protected $_name = [
        'k8sClusterId' => 'K8sClusterId',
        'networkType'  => 'NetworkType',
    ];

    public function validate()
    {
        Model::validateRequired('k8sClusterId', $this->k8sClusterId, true);
        Model::validateRequired('networkType', $this->networkType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->k8sClusterId) {
            $res['K8sClusterId'] = $this->k8sClusterId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReusableSlbRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['K8sClusterId'])) {
            $model->k8sClusterId = $map['K8sClusterId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        return $model;
    }
}
