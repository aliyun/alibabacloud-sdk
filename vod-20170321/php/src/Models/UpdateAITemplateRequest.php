<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateAITemplateRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'templateConfig' => 'TemplateConfig',
    ];
    public function validate() {
        Model::validateRequired('templateId', $this->templateId, true);
        Model::validateRequired('templateName', $this->templateName, true);
        Model::validateRequired('templateConfig', $this->templateConfig, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['TemplateId'] = $this->templateId;
        $res['TemplateName'] = $this->templateName;
        $res['TemplateConfig'] = $this->templateConfig;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateAITemplateRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['TemplateId'])){
            $model->templateId = $map['TemplateId'];
        }
        if(isset($map['TemplateName'])){
            $model->templateName = $map['TemplateName'];
        }
        if(isset($map['TemplateConfig'])){
            $model->templateConfig = $map['TemplateConfig'];
        }
        return $model;
    }
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
     * @description templateId
     * @var string
     */
    public $templateId;

    /**
     * @description templateName
     * @var string
     */
    public $templateName;

    /**
     * @description templateConfig
     * @var string
     */
    public $templateConfig;

}
