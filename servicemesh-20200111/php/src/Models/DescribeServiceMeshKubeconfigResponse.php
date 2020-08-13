<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceMeshKubeconfigResponse extends Model
{
    /**
     * @var string
     */
    public $kubeconfig;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kubeconfig' => 'Kubeconfig',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('kubeconfig', $this->kubeconfig, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kubeconfig) {
            $res['Kubeconfig'] = $this->kubeconfig;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshKubeconfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Kubeconfig'])) {
            $model->kubeconfig = $map['Kubeconfig'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
