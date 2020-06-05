<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QuerySmsTemplateResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'code' => 'Code',
        'message' => 'Message',
        'templateStatus' => 'TemplateStatus',
        'reason' => 'Reason',
        'templateCode' => 'TemplateCode',
        'templateType' => 'TemplateType',
        'templateName' => 'TemplateName',
        'templateContent' => 'TemplateContent',
        'createDate' => 'CreateDate',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('templateStatus', $this->templateStatus, true);
        Model::validateRequired('reason', $this->reason, true);
        Model::validateRequired('templateCode', $this->templateCode, true);
        Model::validateRequired('templateType', $this->templateType, true);
        Model::validateRequired('templateName', $this->templateName, true);
        Model::validateRequired('templateContent', $this->templateContent, true);
        Model::validateRequired('createDate', $this->createDate, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['Code'] = $this->code;
        $res['Message'] = $this->message;
        $res['TemplateStatus'] = $this->templateStatus;
        $res['Reason'] = $this->reason;
        $res['TemplateCode'] = $this->templateCode;
        $res['TemplateType'] = $this->templateType;
        $res['TemplateName'] = $this->templateName;
        $res['TemplateContent'] = $this->templateContent;
        $res['CreateDate'] = $this->createDate;
        return $res;
    }
    /**
     * @param array $map
     * @return QuerySmsTemplateResponse
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
        if(isset($map['TemplateStatus'])){
            $model->templateStatus = $map['TemplateStatus'];
        }
        if(isset($map['Reason'])){
            $model->reason = $map['Reason'];
        }
        if(isset($map['TemplateCode'])){
            $model->templateCode = $map['TemplateCode'];
        }
        if(isset($map['TemplateType'])){
            $model->templateType = $map['TemplateType'];
        }
        if(isset($map['TemplateName'])){
            $model->templateName = $map['TemplateName'];
        }
        if(isset($map['TemplateContent'])){
            $model->templateContent = $map['TemplateContent'];
        }
        if(isset($map['CreateDate'])){
            $model->createDate = $map['CreateDate'];
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
     * @description module.templateStatus
     * @var integer
     */
    public $templateStatus;

    /**
     * @description module.reason
     * @var string
     */
    public $reason;

    /**
     * @description module.templateCode
     * @var string
     */
    public $templateCode;

    /**
     * @description module.templateType
     * @var integer
     */
    public $templateType;

    /**
     * @description module.templateName
     * @var string
     */
    public $templateName;

    /**
     * @description module.templateContent
     * @var string
     */
    public $templateContent;

    /**
     * @description module.createDate
     * @var string
     */
    public $createDate;

}
