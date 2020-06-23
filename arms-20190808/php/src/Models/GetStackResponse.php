<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetStackResponse\stackInfo;
use AlibabaCloud\Tea\Model;

class GetStackResponse extends Model
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
    public $stackInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'stackInfo' => 'StackInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('stackInfo', $this->stackInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stackInfo) {
            $res['StackInfo'] = [];
            if (null !== $this->stackInfo && \is_array($this->stackInfo)) {
                $n = 0;
                foreach ($this->stackInfo as $item) {
                    $res['StackInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStackResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackInfo'])) {
            if (!empty($map['StackInfo'])) {
                $model->stackInfo = [];
                $n                = 0;
                foreach ($map['StackInfo'] as $item) {
                    $model->stackInfo[$n++] = null !== $item ? stackInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
