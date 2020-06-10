<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class DeleteSmsTemplateResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module
     *
     * @var string
     */
    public $templateCode;

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
    protected $_name = [
        'requestId'    => 'RequestId',
        'templateCode' => 'TemplateCode',
        'code'         => 'Code',
        'message'      => 'Message',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('templateCode', $this->templateCode, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSmsTemplateResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
