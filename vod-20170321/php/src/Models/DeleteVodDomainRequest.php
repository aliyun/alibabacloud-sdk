<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteVodDomainRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'ownerAccount' => 'OwnerAccount',
        'securityToken' => 'SecurityToken',
        'domainName' => 'DomainName',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['SecurityToken'] = $this->securityToken;
        $res['DomainName'] = $this->domainName;
        return $res;
    }
    /**
     * @param array $map
     * @return DeleteVodDomainRequest
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
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
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
     * @description domainName
     * @var string
     */
    public $domainName;

}
