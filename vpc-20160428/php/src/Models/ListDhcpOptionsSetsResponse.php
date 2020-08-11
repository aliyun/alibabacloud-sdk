<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListDhcpOptionsSetsResponse\dhcpOptionsSets;
use AlibabaCloud\Tea\Model;

class ListDhcpOptionsSetsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var array
     */
    public $dhcpOptionsSets;
    protected $_name = [
        'requestId'       => 'RequestId',
        'nextToken'       => 'NextToken',
        'dhcpOptionsSets' => 'DhcpOptionsSets',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('nextToken', $this->nextToken, true);
        Model::validateRequired('dhcpOptionsSets', $this->dhcpOptionsSets, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->dhcpOptionsSets) {
            $res['DhcpOptionsSets'] = [];
            if (null !== $this->dhcpOptionsSets && \is_array($this->dhcpOptionsSets)) {
                $n = 0;
                foreach ($this->dhcpOptionsSets as $item) {
                    $res['DhcpOptionsSets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDhcpOptionsSetsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['DhcpOptionsSets'])) {
            if (!empty($map['DhcpOptionsSets'])) {
                $model->dhcpOptionsSets = [];
                $n                      = 0;
                foreach ($map['DhcpOptionsSets'] as $item) {
                    $model->dhcpOptionsSets[$n++] = null !== $item ? dhcpOptionsSets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
