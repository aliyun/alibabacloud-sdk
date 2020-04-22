<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Dysmsapi;

use AlibabaCloud\Tea\Model;

class ModifySmsTemplateResponse extends Model
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
        $res                 = [];
        $res['RequestId']    = $this->requestId;
        $res['TemplateCode'] = $this->templateCode;
        $res['Code']         = $this->code;
        $res['Message']      = $this->message;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySmsTemplateResponse
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
