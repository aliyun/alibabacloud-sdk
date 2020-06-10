<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateIpControlResponse extends Model
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
    public $ipControlId;
    protected $_name = [
        'requestId'   => 'RequestId',
        'ipControlId' => 'IpControlId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('ipControlId', $this->ipControlId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ipControlId) {
            $res['IpControlId'] = $this->ipControlId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIpControlResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IpControlId'])) {
            $model->ipControlId = $map['IpControlId'];
        }

        return $model;
    }
}
