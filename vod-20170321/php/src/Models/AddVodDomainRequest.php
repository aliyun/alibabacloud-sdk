<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class AddVodDomainRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'ownerAccount' => 'OwnerAccount',
        'securityToken' => 'SecurityToken',
        'domainName' => 'DomainName',
        'sources' => 'Sources',
        'checkUrl' => 'CheckUrl',
        'scope' => 'Scope',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('sources', $this->sources, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['OwnerAccount'] = $this->ownerAccount;
        $res['SecurityToken'] = $this->securityToken;
        $res['DomainName'] = $this->domainName;
        $res['Sources'] = $this->sources;
        $res['CheckUrl'] = $this->checkUrl;
        $res['Scope'] = $this->scope;
        return $res;
    }
    /**
     * @param array $map
     * @return AddVodDomainRequest
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
        if(isset($map['Sources'])){
            $model->sources = $map['Sources'];
        }
        if(isset($map['CheckUrl'])){
            $model->checkUrl = $map['CheckUrl'];
        }
        if(isset($map['Scope'])){
            $model->scope = $map['Scope'];
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

    /**
     * @description sources
     * @var string
     */
    public $sources;

    /**
     * @description checkUrl
     * @var string
     */
    public $checkUrl;

    /**
     * @description scope
     * @var string
     */
    public $scope;

}
