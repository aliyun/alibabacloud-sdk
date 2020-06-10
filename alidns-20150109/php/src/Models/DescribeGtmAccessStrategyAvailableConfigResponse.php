<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponse\addrPools;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmAccessStrategyAvailableConfigResponse\lines;
use AlibabaCloud\Tea\Model;

class DescribeGtmAccessStrategyAvailableConfigResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.addrPools
     *
     * @var addrPools
     */
    public $addrPools;

    /**
     * @description module.lines
     *
     * @var lines
     */
    public $lines;
    protected $_name = [
        'requestId' => 'RequestId',
        'addrPools' => 'AddrPools',
        'lines'     => 'Lines',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('addrPools', $this->addrPools, true);
        Model::validateRequired('lines', $this->lines, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->addrPools) {
            $res['AddrPools'] = null !== $this->addrPools ? $this->addrPools->toMap() : null;
        }
        if (null !== $this->lines) {
            $res['Lines'] = null !== $this->lines ? $this->lines->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmAccessStrategyAvailableConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AddrPools'])) {
            $model->addrPools = addrPools::fromMap($map['AddrPools']);
        }
        if (isset($map['Lines'])) {
            $model->lines = lines::fromMap($map['Lines']);
        }

        return $model;
    }
}
