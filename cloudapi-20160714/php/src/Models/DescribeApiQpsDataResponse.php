<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiQpsDataResponse\callFails;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiQpsDataResponse\callSuccesses;
use AlibabaCloud\Tea\Model;

class DescribeApiQpsDataResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description data.successList
     *
     * @var callSuccesses
     */
    public $callSuccesses;

    /**
     * @description data.failList
     *
     * @var callFails
     */
    public $callFails;
    protected $_name = [
        'requestId'     => 'RequestId',
        'callSuccesses' => 'CallSuccesses',
        'callFails'     => 'CallFails',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('callSuccesses', $this->callSuccesses, true);
        Model::validateRequired('callFails', $this->callFails, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->callSuccesses) {
            $res['CallSuccesses'] = null !== $this->callSuccesses ? $this->callSuccesses->toMap() : null;
        }
        if (null !== $this->callFails) {
            $res['CallFails'] = null !== $this->callFails ? $this->callFails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiQpsDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CallSuccesses'])) {
            $model->callSuccesses = callSuccesses::fromMap($map['CallSuccesses']);
        }
        if (isset($map['CallFails'])) {
            $model->callFails = callFails::fromMap($map['CallFails']);
        }

        return $model;
    }
}
