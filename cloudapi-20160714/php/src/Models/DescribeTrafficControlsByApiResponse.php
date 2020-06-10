<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeTrafficControlsByApiResponse\trafficControlItems;
use AlibabaCloud\Tea\Model;

class DescribeTrafficControlsByApiResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data
     *
     * @var trafficControlItems
     */
    public $trafficControlItems;
    protected $_name = [
        'requestId'           => 'RequestId',
        'trafficControlItems' => 'TrafficControlItems',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('trafficControlItems', $this->trafficControlItems, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trafficControlItems) {
            $res['TrafficControlItems'] = null !== $this->trafficControlItems ? $this->trafficControlItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrafficControlsByApiResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrafficControlItems'])) {
            $model->trafficControlItems = trafficControlItems::fromMap($map['TrafficControlItems']);
        }

        return $model;
    }
}
