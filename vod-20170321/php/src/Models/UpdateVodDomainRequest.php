<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateVodDomainRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'domainName' => 'DomainName',
        'sources' => 'Sources',
        'topLevelDomain' => 'TopLevelDomain',
    ];
    public function validate() {
        Model::validateRequired('domainName', $this->domainName, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['SecurityToken'] = $this->securityToken;
        $res['DomainName'] = $this->domainName;
        $res['Sources'] = $this->sources;
        $res['TopLevelDomain'] = $this->topLevelDomain;
        return $res;
    }
    /**
     * @param array $map
     * @return UpdateVodDomainRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
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
        if(isset($map['TopLevelDomain'])){
            $model->topLevelDomain = $map['TopLevelDomain'];
        }
        return $model;
    }
    /**
     * @description ownerId
     * @var integer
     */
    public $ownerId;

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
     * @description topLevelDomain
     * @var string
     */
    public $topLevelDomain;

}
