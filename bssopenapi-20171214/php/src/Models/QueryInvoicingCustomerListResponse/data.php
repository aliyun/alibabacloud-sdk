<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInvoicingCustomerListResponse\data\customerInvoiceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description customerInvoiceList
     *
     * @var customerInvoiceList
     */
    public $customerInvoiceList;
    protected $_name = [
        'customerInvoiceList' => 'CustomerInvoiceList',
    ];

    public function validate()
    {
        Model::validateRequired('customerInvoiceList', $this->customerInvoiceList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerInvoiceList) {
            $res['CustomerInvoiceList'] = null !== $this->customerInvoiceList ? $this->customerInvoiceList->toMap() : null;
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
        if (isset($map['CustomerInvoiceList'])) {
            $model->customerInvoiceList = customerInvoiceList::fromMap($map['CustomerInvoiceList']);
        }

        return $model;
    }
}
