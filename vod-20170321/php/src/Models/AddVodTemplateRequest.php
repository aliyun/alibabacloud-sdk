<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddVodTemplateRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'name' => 'Name',
        'templateType' => 'TemplateType',
        'subTemplateType' => 'SubTemplateType',
        'templateConfig' => 'TemplateConfig',
        'appId' => 'AppId',
    ];
    public function validate() {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('templateType', $this->templateType, true);
        Model::validateRequired('templateConfig', $this->templateConfig, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['Name'] = $this->name;
        $res['TemplateType'] = $this->templateType;
        $res['SubTemplateType'] = $this->subTemplateType;
        $res['TemplateConfig'] = $this->templateConfig;
        $res['AppId'] = $this->appId;
        return $res;
    }
    /**
     * @param array $map
     * @return AddVodTemplateRequest
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
        if(isset($map['Name'])){
            $model->name = $map['Name'];
        }
        if(isset($map['TemplateType'])){
            $model->templateType = $map['TemplateType'];
        }
        if(isset($map['SubTemplateType'])){
            $model->subTemplateType = $map['SubTemplateType'];
        }
        if(isset($map['TemplateConfig'])){
            $model->templateConfig = $map['TemplateConfig'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
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
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description templateType
     * @var string
     */
    public $templateType;

    /**
     * @description subTemplateType
     * @var string
     */
    public $subTemplateType;

    /**
     * @description templateConfig
     * @var string
     */
    public $templateConfig;

    /**
     * @description appId
     * @var string
     */
    public $appId;

}
