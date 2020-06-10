<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeGtmAvailableAlertGroupResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module
     *
     * @var string
     */
    public $availableAlertGroup;
    protected $_name = [
        'requestId'           => 'RequestId',
        'availableAlertGroup' => 'AvailableAlertGroup',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('availableAlertGroup', $this->availableAlertGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->availableAlertGroup) {
            $res['AvailableAlertGroup'] = $this->availableAlertGroup;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmAvailableAlertGroupResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AvailableAlertGroup'])) {
            $model->availableAlertGroup = $map['AvailableAlertGroup'];
        }

        return $model;
    }
}
