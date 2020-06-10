<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeApiGroupVpcWhitelistResponse extends Model
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
     * @var string
     */
    public $vpcIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'vpcIds'    => 'VpcIds',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('vpcIds', $this->vpcIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->vpcIds) {
            $res['VpcIds'] = $this->vpcIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiGroupVpcWhitelistResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VpcIds'])) {
            $model->vpcIds = $map['VpcIds'];
        }

        return $model;
    }
}
