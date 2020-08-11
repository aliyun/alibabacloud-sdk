<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthLimitationResponse\bandwidths;
use AlibabaCloud\Tea\Model;

class DescribeBandwidthLimitationResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bandwidths
     */
    public $bandwidths;
    protected $_name = [
        'requestId'  => 'RequestId',
        'bandwidths' => 'Bandwidths',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('bandwidths', $this->bandwidths, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->bandwidths) {
            $res['Bandwidths'] = null !== $this->bandwidths ? $this->bandwidths->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBandwidthLimitationResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Bandwidths'])) {
            $model->bandwidths = bandwidths::fromMap($map['Bandwidths']);
        }

        return $model;
    }
}
