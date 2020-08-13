<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\GetRegisteredServiceEndpointsResponse;

use AlibabaCloud\Tea\Model;

class serviceEndpoints extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'address'   => 'Address',
        'clusterId' => 'ClusterId',
    ];

    public function validate()
    {
        Model::validateRequired('address', $this->address, true);
        Model::validateRequired('clusterId', $this->clusterId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceEndpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
