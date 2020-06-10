<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class ExecContainerCommandResponse extends Model
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
     * @var string
     */
    public $webSocketUri;
    protected $_name = [
        'requestId'    => 'RequestId',
        'webSocketUri' => 'WebSocketUri',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('webSocketUri', $this->webSocketUri, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->webSocketUri) {
            $res['WebSocketUri'] = $this->webSocketUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecContainerCommandResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WebSocketUri'])) {
            $model->webSocketUri = $map['WebSocketUri'];
        }

        return $model;
    }
}
