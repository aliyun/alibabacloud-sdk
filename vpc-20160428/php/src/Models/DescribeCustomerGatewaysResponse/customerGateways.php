<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewaysResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCustomerGatewaysResponse\customerGateways\customerGateway;
use AlibabaCloud\Tea\Model;

class customerGateways extends Model
{
    /**
     * @var array
     */
    public $customerGateway;
    protected $_name = [
        'customerGateway' => 'CustomerGateway',
    ];

    public function validate()
    {
        Model::validateRequired('customerGateway', $this->customerGateway, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerGateway) {
            $res['CustomerGateway'] = [];
            if (null !== $this->customerGateway && \is_array($this->customerGateway)) {
                $n = 0;
                foreach ($this->customerGateway as $item) {
                    $res['CustomerGateway'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customerGateways
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomerGateway'])) {
            if (!empty($map['CustomerGateway'])) {
                $model->customerGateway = [];
                $n                      = 0;
                foreach ($map['CustomerGateway'] as $item) {
                    $model->customerGateway[$n++] = null !== $item ? customerGateway::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
