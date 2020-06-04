<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordDataResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'code' => 'Code',
        'message' => 'Message',
        'ossLink' => 'OssLink',
        'acid' => 'Acid',
        'agentId' => 'AgentId',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('ossLink', $this->ossLink, true);
        Model::validateRequired('acid', $this->acid, true);
        Model::validateRequired('agentId', $this->agentId, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Code'] = $this->code;
        $res['Message'] = $this->message;
        $res['OssLink'] = $this->ossLink;
        $res['Acid'] = $this->acid;
        $res['AgentId'] = $this->agentId;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeRecordDataResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['Code'])){
            $model->code = $map['Code'];
        }
        if(isset($map['Message'])){
            $model->message = $map['Message'];
        }
        if(isset($map['OssLink'])){
            $model->ossLink = $map['OssLink'];
        }
        if(isset($map['Acid'])){
            $model->acid = $map['Acid'];
        }
        if(isset($map['AgentId'])){
            $model->agentId = $map['AgentId'];
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

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
     * @description data.ossLink
     * @var string
     */
    public $ossLink;

    /**
     * @description data.acid
     * @var string
     */
    public $acid;

    /**
     * @description data.agentId
     * @var string
     */
    public $agentId;

}
