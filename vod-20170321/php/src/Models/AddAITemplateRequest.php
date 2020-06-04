<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddAITemplateRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'templateName' => 'TemplateName',
        'templateType' => 'TemplateType',
        'templateConfig' => 'TemplateConfig',
    ];
    public function validate() {
        Model::validateRequired('templateName', $this->templateName, true);
        Model::validateRequired('templateType', $this->templateType, true);
        Model::validateRequired('templateConfig', $this->templateConfig, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['TemplateName'] = $this->templateName;
        $res['TemplateType'] = $this->templateType;
        $res['TemplateConfig'] = $this->templateConfig;
        return $res;
    }
    /**
     * @param array $map
     * @return AddAITemplateRequest
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
        if(isset($map['TemplateName'])){
            $model->templateName = $map['TemplateName'];
        }
        if(isset($map['TemplateType'])){
            $model->templateType = $map['TemplateType'];
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
     * @description templateName
     * @var string
     */
    public $templateName;

    /**
     * @description templateType
     * @var string
     */
    public $templateType;

    /**
     * @description templateConfig
     * @var string
     */
    public $templateConfig;

}
