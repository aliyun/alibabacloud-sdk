<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class GetRegisteredServiceNamespacesResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description namespaces
     *
     * @var array
     */
    public $namespaces;
    protected $_name = [
        'requestId'  => 'RequestId',
        'namespaces' => 'Namespaces',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('namespaces', $this->namespaces, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->namespaces) {
            $res['Namespaces'] = [];
            if (null !== $this->namespaces) {
                $res['Namespaces'] = $this->namespaces;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRegisteredServiceNamespacesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Namespaces'])) {
            if (!empty($map['Namespaces'])) {
                $model->namespaces = [];
                $model->namespaces = $map['Namespaces'];
            }
        }

        return $model;
    }
}
