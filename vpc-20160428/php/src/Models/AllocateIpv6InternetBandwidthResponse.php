<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class AllocateIpv6InternetBandwidthResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ipv6AddressId;

    /**
     * @var string
     */
    public $internetBandwidthId;
    protected $_name = [
        'requestId'           => 'RequestId',
        'ipv6AddressId'       => 'Ipv6AddressId',
        'internetBandwidthId' => 'InternetBandwidthId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('ipv6AddressId', $this->ipv6AddressId, true);
        Model::validateRequired('internetBandwidthId', $this->internetBandwidthId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ipv6AddressId) {
            $res['Ipv6AddressId'] = $this->ipv6AddressId;
        }
        if (null !== $this->internetBandwidthId) {
            $res['InternetBandwidthId'] = $this->internetBandwidthId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AllocateIpv6InternetBandwidthResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Ipv6AddressId'])) {
            $model->ipv6AddressId = $map['Ipv6AddressId'];
        }
        if (isset($map['InternetBandwidthId'])) {
            $model->internetBandwidthId = $map['InternetBandwidthId'];
        }

        return $model;
    }
}
