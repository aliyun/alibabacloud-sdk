<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI\DescribeContainerGroupPriceResponse;

use AlibabaCloud\Tea\Model;

class priceInfo extends Model
{
    public $rules;
    public $price;
    protected $_required = [
        'rules' => true,
        'price' => true,
    ];
    protected $_name = [
        'rules' => 'Rules',
        'price' => 'Price',
    ];
    protected $_description = [
        'rules' => 'rules',
        'price' => 'price',
    ];
}
