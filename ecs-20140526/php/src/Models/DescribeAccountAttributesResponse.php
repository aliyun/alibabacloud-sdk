<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponse\accountAttributeItems;
use AlibabaCloud\Tea\Model;

class DescribeAccountAttributesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var accountAttributeItems
     */
    public $accountAttributeItems;
    protected $_name = [
        'requestId'             => 'RequestId',
        'accountAttributeItems' => 'AccountAttributeItems',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('accountAttributeItems', $this->accountAttributeItems, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->accountAttributeItems) {
            $res['AccountAttributeItems'] = null !== $this->accountAttributeItems ? $this->accountAttributeItems->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountAttributesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccountAttributeItems'])) {
            $model->accountAttributeItems = accountAttributeItems::fromMap($map['AccountAttributeItems']);
        }

        return $model;
    }
}
