<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponse\keySpecs;
use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeServiceResponse\protectionLevels;
use AlibabaCloud\Tea\Model;

class DescribeServiceResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description ProtectionLevels
     *
     * @var DescribeServiceResponse.protectionLevels
     */
    public $protectionLevels;

    /**
     * @description KeySpecs
     *
     * @var DescribeServiceResponse.keySpecs
     */
    public $keySpecs;
    protected $_name = [
        'requestId'        => 'RequestId',
        'protectionLevels' => 'ProtectionLevels',
        'keySpecs'         => 'KeySpecs',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('protectionLevels', $this->protectionLevels, true);
        Model::validateRequired('keySpecs', $this->keySpecs, true);
    }

    public function toMap()
    {
        $res                     = [];
        $res['RequestId']        = $this->requestId;
        $res['ProtectionLevels'] = null !== $this->protectionLevels ? $this->protectionLevels->toMap() : null;
        $res['KeySpecs']         = null !== $this->keySpecs ? $this->keySpecs->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ProtectionLevels'])) {
            $model->protectionLevels = protectionLevels::fromMap($map['ProtectionLevels']);
        }
        if (isset($map['KeySpecs'])) {
            $model->keySpecs = keySpecs::fromMap($map['KeySpecs']);
        }

        return $model;
    }
}
