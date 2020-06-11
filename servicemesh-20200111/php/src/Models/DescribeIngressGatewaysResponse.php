<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeIngressGatewaysResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description ingressgateways
     *
     * @var array
     */
    public $ingressGateways;
    protected $_name = [
        'requestId'       => 'RequestId',
        'ingressGateways' => 'IngressGateways',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('ingressGateways', $this->ingressGateways, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ingressGateways) {
            $res['IngressGateways'] = [];
            if (null !== $this->ingressGateways) {
                $res['IngressGateways'] = $this->ingressGateways;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIngressGatewaysResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IngressGateways'])) {
            if (!empty($map['IngressGateways'])) {
                $model->ingressGateways = [];
                $model->ingressGateways = $map['IngressGateways'];
            }
        }

        return $model;
    }
}
