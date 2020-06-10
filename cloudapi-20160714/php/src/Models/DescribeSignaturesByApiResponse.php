<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSignaturesByApiResponse\signatures;
use AlibabaCloud\Tea\Model;

class DescribeSignaturesByApiResponse extends Model
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
     * @var signatures
     */
    public $signatures;
    protected $_name = [
        'requestId'  => 'RequestId',
        'signatures' => 'Signatures',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('signatures', $this->signatures, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signatures) {
            $res['Signatures'] = null !== $this->signatures ? $this->signatures->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSignaturesByApiResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Signatures'])) {
            $model->signatures = signatures::fromMap($map['Signatures']);
        }

        return $model;
    }
}
