<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListOutboundStrategiesResponse\outboundStrategies;
use AlibabaCloud\Tea\Model;

class ListOutboundStrategiesResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description code
     *
     * @var string
     */
    public $code;

    /**
     * @description message
     *
     * @var string
     */
    public $message;

    /**
     * @description data
     *
     * @var array
     */
    public $outboundStrategies;
    protected $_name = [
        'requestId'          => 'RequestId',
        'code'               => 'Code',
        'message'            => 'Message',
        'outboundStrategies' => 'OutboundStrategies',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('outboundStrategies', $this->outboundStrategies, true);
    }

    public function toMap()
    {
        $res                       = [];
        $res['RequestId']          = $this->requestId;
        $res['Code']               = $this->code;
        $res['Message']            = $this->message;
        $res['OutboundStrategies'] = [];
        if (null !== $this->outboundStrategies && \is_array($this->outboundStrategies)) {
            $n = 0;
            foreach ($this->outboundStrategies as $item) {
                $res['OutboundStrategies'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListOutboundStrategiesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OutboundStrategies'])) {
            if (!empty($map['OutboundStrategies'])) {
                $model->outboundStrategies = [];
                $n                         = 0;
                foreach ($map['OutboundStrategies'] as $item) {
                    $model->outboundStrategies[$n++] = null !== $item ? outboundStrategies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
