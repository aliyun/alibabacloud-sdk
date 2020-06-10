<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorAvailableConfigResponse\ispCityNodes;
use AlibabaCloud\Tea\Model;

class DescribeGtmMonitorAvailableConfigResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.nodes
     *
     * @var ispCityNodes
     */
    public $ispCityNodes;
    protected $_name = [
        'requestId'    => 'RequestId',
        'ispCityNodes' => 'IspCityNodes',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('ispCityNodes', $this->ispCityNodes, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ispCityNodes) {
            $res['IspCityNodes'] = null !== $this->ispCityNodes ? $this->ispCityNodes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmMonitorAvailableConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IspCityNodes'])) {
            $model->ispCityNodes = ispCityNodes::fromMap($map['IspCityNodes']);
        }

        return $model;
    }
}
