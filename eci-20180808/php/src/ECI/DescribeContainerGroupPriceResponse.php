<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ECI\V20180808\ECI;

use AlibabaCloud\Tea\Model;

class DescribeContainerGroupPriceResponse extends Model
{
    public $requestId;
    public $priceInfo;
    protected $_required = [
        'requestId' => true,
        'priceInfo' => true,
    ];
    protected $_name = [
        'requestId' => 'RequestId',
        'priceInfo' => 'PriceInfo',
    ];
    protected $_description = [
        'requestId' => 'requestId',
        'priceInfo' => 'data',
    ];
}
