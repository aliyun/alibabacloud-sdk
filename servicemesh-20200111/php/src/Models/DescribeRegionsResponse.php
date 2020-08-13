<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeRegionsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $businessLocations;
    protected $_name = [
        'requestId'         => 'RequestId',
        'businessLocations' => 'BusinessLocations',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('businessLocations', $this->businessLocations, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->businessLocations) {
            $res['BusinessLocations'] = $this->businessLocations;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BusinessLocations'])) {
            $model->businessLocations = $map['BusinessLocations'];
        }

        return $model;
    }
}
