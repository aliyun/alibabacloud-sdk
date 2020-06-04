<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceLiveUrlResponse extends Model {
    protected $_name = [
        'code' => 'Code',
        'url' => 'Url',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];
    public function validate() {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('url', $this->url, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }
    public function toMap() {
        $res = [];
        $res['Code'] = $this->code;
        $res['Url'] = $this->url;
        $res['Message'] = $this->message;
        $res['RequestId'] = $this->requestId;
        return $res;
    }
    /**
     * @param array $map
     * @return GetDeviceLiveUrlResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Code'])){
            $model->code = $map['Code'];
        }
        if(isset($map['Url'])){
            $model->url = $map['Url'];
        }
        if(isset($map['Message'])){
            $model->message = $map['Message'];
        }
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        return $model;
    }
    /**
     * @description code
     * @var string
     */
    public $code;

    /**
     * @description data
     * @var string
     */
    public $url;

    /**
     * @description message
     * @var string
     */
    public $message;

    /**
     * @description requestId
     * @var string
     */
    public $requestId;

}
