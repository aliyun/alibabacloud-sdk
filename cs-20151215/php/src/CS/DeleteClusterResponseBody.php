<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS;

use AlibabaCloud\Tea\Model;

class DeleteClusterResponseBody extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res              = [];
        $res['RequestId'] = $this->requestId;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
