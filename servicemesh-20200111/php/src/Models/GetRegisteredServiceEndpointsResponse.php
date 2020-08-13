<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponse\serviceEndpoints;
use AlibabaCloud\Tea\Model;

class GetRegisteredServiceEndpointsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var array
     */
    public $serviceEndpoints;
    protected $_name = [
        'requestId'        => 'RequestId',
        'serviceEndpoints' => 'ServiceEndpoints',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('serviceEndpoints', $this->serviceEndpoints, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceEndpoints) {
            $res['ServiceEndpoints'] = [];
            if (null !== $this->serviceEndpoints && \is_array($this->serviceEndpoints)) {
                $n = 0;
                foreach ($this->serviceEndpoints as $item) {
                    $res['ServiceEndpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRegisteredServiceEndpointsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceEndpoints'])) {
            if (!empty($map['ServiceEndpoints'])) {
                $model->serviceEndpoints = [];
                $n                       = 0;
                foreach ($map['ServiceEndpoints'] as $item) {
                    $model->serviceEndpoints[$n++] = null !== $item ? serviceEndpoints::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
