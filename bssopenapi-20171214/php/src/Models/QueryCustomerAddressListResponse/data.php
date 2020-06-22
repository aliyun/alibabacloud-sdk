<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCustomerAddressListResponse\data\customerInvoiceAddressList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description customerInvoiceAddressList
     *
     * @var customerInvoiceAddressList
     */
    public $customerInvoiceAddressList;
    protected $_name = [
        'customerInvoiceAddressList' => 'CustomerInvoiceAddressList',
    ];

    public function validate()
    {
        Model::validateRequired('customerInvoiceAddressList', $this->customerInvoiceAddressList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerInvoiceAddressList) {
            $res['CustomerInvoiceAddressList'] = null !== $this->customerInvoiceAddressList ? $this->customerInvoiceAddressList->toMap() : null;
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
        if (isset($map['CustomerInvoiceAddressList'])) {
            $model->customerInvoiceAddressList = customerInvoiceAddressList::fromMap($map['CustomerInvoiceAddressList']);
        }

        return $model;
    }
}
