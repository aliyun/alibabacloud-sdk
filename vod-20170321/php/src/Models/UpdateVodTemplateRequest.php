<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateVodTemplateRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'vodTemplateId' => 'VodTemplateId',
        'name' => 'Name',
        'templateConfig' => 'TemplateConfig',
    ];
    public function validate() {
        Model::validateRequired('vodTemplateId', $this->vodTemplateId, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['VodTemplateId'] = $this->vodTemplateId;
        $res['Name'] = $this->name;
        $res['TemplateConfig'] = $this->templateConfig;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateVodTemplateRequest
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
        if(isset($map['VodTemplateId'])){
            $model->vodTemplateId = $map['VodTemplateId'];
        }
        if(isset($map['Name'])){
            $model->name = $map['Name'];
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
     * @description vodTemplateId
     * @var string
     */
    public $vodTemplateId;

    /**
     * @description name
     * @var string
     */
    public $name;

    /**
     * @description templateConfig
     * @var string
     */
    public $templateConfig;

}
