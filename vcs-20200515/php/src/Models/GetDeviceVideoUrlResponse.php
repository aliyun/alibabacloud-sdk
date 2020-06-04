<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetDeviceVideoUrlResponse extends Model {
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'url' => 'Url',
    ];
    public function validate() {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('url', $this->url, true);
    }
    public function toMap() {
        $res = [];
        $res['Code'] = $this->code;
        $res['Message'] = $this->message;
        $res['RequestId'] = $this->requestId;
        $res['Url'] = $this->url;
        return $res;
    }
    /**
     * @param array $map
     * @return GetDeviceVideoUrlResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Code'])){
            $model->code = $map['Code'];
        }
        if(isset($map['Message'])){
            $model->message = $map['Message'];
        }
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Url'])){
            $model->url = $map['Url'];
        }
        return $model;
    }
    /**
     * @description code
     * @var string
     */
    public $code;

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

    /**
     * @description data
     * @var string
     */
    public $url;

}
