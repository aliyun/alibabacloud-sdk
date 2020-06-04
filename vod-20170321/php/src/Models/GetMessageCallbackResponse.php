<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMessageCallbackResponse\messageCallback;

class GetMessageCallbackResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'messageCallback' => 'MessageCallback',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('messageCallback', $this->messageCallback, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['MessageCallback'] = null !== $this->messageCallback ? $this->messageCallback->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return GetMessageCallbackResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['MessageCallback'])){
            $model->messageCallback = messageCallback::fromMap($map['MessageCallback']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description data.userMessageCallbackDTO
     * @var messageCallback
     */
    public $messageCallback;

}
