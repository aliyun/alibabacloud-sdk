<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponse\spans;
use AlibabaCloud\Tea\Model;

class GetTraceResponse extends Model
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
     * @var array
     */
    public $spans;
    protected $_name = [
        'requestId' => 'RequestId',
        'spans'     => 'Spans',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('spans', $this->spans, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->spans) {
            $res['Spans'] = [];
            if (null !== $this->spans && \is_array($this->spans)) {
                $n = 0;
                foreach ($this->spans as $item) {
                    $res['Spans'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTraceResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Spans'])) {
            if (!empty($map['Spans'])) {
                $model->spans = [];
                $n            = 0;
                foreach ($map['Spans'] as $item) {
                    $model->spans[$n++] = null !== $item ? spans::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
