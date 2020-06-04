<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class BatchSetVodDomainConfigsRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'ownerAccount' => 'OwnerAccount',
        'securityToken' => 'SecurityToken',
        'domainNames' => 'DomainNames',
        'functions' => 'Functions',
    ];
    public function validate() {
        Model::validateRequired('domainNames', $this->domainNames, true);
        Model::validateRequired('functions', $this->functions, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['SecurityToken'] = $this->securityToken;
        $res['DomainNames'] = $this->domainNames;
        $res['Functions'] = $this->functions;
        return $res;
    }
    /**
     * @param array $map
     * @return BatchSetVodDomainConfigsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if(isset($map['SecurityToken'])){
            $model->securityToken = $map['SecurityToken'];
        }
        if(isset($map['DomainNames'])){
            $model->domainNames = $map['DomainNames'];
        }
        if(isset($map['Functions'])){
            $model->functions = $map['Functions'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

    /**
     * @description securityToken
     * @var string
     */
    public $securityToken;

    /**
     * @description domainNames
     * @var string
     */
    public $domainNames;

    /**
     * @description functions
     * @var string
     */
    public $functions;

}
