<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class CreateCorpResponse extends Model {
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'corpId' => 'CorpId',
    ];
    public function validate() {
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('corpId', $this->corpId, true);
    }
    public function toMap() {
        $res = [];
        $res['Code'] = $this->code;
        $res['Message'] = $this->message;
        $res['RequestId'] = $this->requestId;
        $res['CorpId'] = $this->corpId;
        return $res;
    }
    /**
     * @param array $map
     * @return CreateCorpResponse
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
        if(isset($map['CorpId'])){
            $model->corpId = $map['CorpId'];
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
    public $corpId;

}
