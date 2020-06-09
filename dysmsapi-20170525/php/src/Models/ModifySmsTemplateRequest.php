<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class ModifySmsTemplateRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'templateType' => 'TemplateType',
        'templateName' => 'TemplateName',
        'templateCode' => 'TemplateCode',
        'templateContent' => 'TemplateContent',
        'remark' => 'Remark',
    ];
    public function validate() {
        Model::validateRequired('templateType', $this->templateType, true);
        Model::validateRequired('templateName', $this->templateName, true);
        Model::validateRequired('templateCode', $this->templateCode, true);
        Model::validateRequired('templateContent', $this->templateContent, true);
        Model::validateRequired('remark', $this->remark, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['TemplateType'] = $this->templateType;
        $res['TemplateName'] = $this->templateName;
        $res['TemplateCode'] = $this->templateCode;
        $res['TemplateContent'] = $this->templateContent;
        $res['Remark'] = $this->remark;
        return $res;
    }
    /**
     * @param array $map
     * @return ModifySmsTemplateRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['TemplateType'])){
            $model->templateType = $map['TemplateType'];
        }
        if(isset($map['TemplateName'])){
            $model->templateName = $map['TemplateName'];
        }
        if(isset($map['TemplateCode'])){
            $model->templateCode = $map['TemplateCode'];
        }
        if(isset($map['TemplateContent'])){
            $model->templateContent = $map['TemplateContent'];
        }
        if(isset($map['Remark'])){
            $model->remark = $map['Remark'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     * @var integer
     */
    public $resourceOwnerId;

    /**
     * @description templateType
     * @var integer
     */
    public $templateType;

    /**
     * @description templateName
     * @var string
     */
    public $templateName;

    /**
     * @description templateCode
     * @var string
     */
    public $templateCode;

    /**
     * @description templateContent
     * @var string
     */
    public $templateContent;

    /**
     * @description remark
     * @var string
     */
    public $remark;

}
