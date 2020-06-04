<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DetachAppPolicyFromIdentityRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'identityType' => 'IdentityType',
        'identityName' => 'IdentityName',
        'appId' => 'AppId',
        'policyNames' => 'PolicyNames',
    ];
    public function validate() {
        Model::validateRequired('identityType', $this->identityType, true);
        Model::validateRequired('identityName', $this->identityName, true);
        Model::validateRequired('policyNames', $this->policyNames, true);
    }
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['IdentityType'] = $this->identityType;
        $res['IdentityName'] = $this->identityName;
        $res['AppId'] = $this->appId;
        $res['PolicyNames'] = $this->policyNames;
        return $res;
    }
    /**
     * @param array $map
     * @return DetachAppPolicyFromIdentityRequest
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
        if(isset($map['IdentityType'])){
            $model->identityType = $map['IdentityType'];
        }
        if(isset($map['IdentityName'])){
            $model->identityName = $map['IdentityName'];
        }
        if(isset($map['AppId'])){
            $model->appId = $map['AppId'];
        }
        if(isset($map['PolicyNames'])){
            $model->policyNames = $map['PolicyNames'];
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
     * @description identityType
     * @var string
     */
    public $identityType;

    /**
     * @description identityName
     * @var string
     */
    public $identityName;

    /**
     * @description appId
     * @var string
     */
    public $appId;

    /**
     * @description policyNames
     * @var string
     */
    public $policyNames;

}
