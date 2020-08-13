<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterPrometheusResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $prometheus;
    protected $_name = [
        'requestId'  => 'RequestId',
        'prometheus' => 'Prometheus',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('prometheus', $this->prometheus, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->prometheus) {
            $res['Prometheus'] = $this->prometheus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterPrometheusResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Prometheus'])) {
            $model->prometheus = $map['Prometheus'];
        }

        return $model;
    }
}
