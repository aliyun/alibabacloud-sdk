<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeSystemParametersResponse\systemParams;
use AlibabaCloud\Tea\Model;

class DescribeSystemParametersResponse extends Model
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
     * @var systemParams
     */
    public $systemParams;
    protected $_name = [
        'requestId'    => 'RequestId',
        'systemParams' => 'SystemParams',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('systemParams', $this->systemParams, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->systemParams) {
            $res['SystemParams'] = null !== $this->systemParams ? $this->systemParams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSystemParametersResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemParams'])) {
            $model->systemParams = systemParams::fromMap($map['SystemParams']);
        }

        return $model;
    }
}
