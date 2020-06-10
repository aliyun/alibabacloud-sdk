<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DetachAppPolicyFromIdentityRequest extends Model
{
    /**
     * @description ownerId
     *
     * @var int
     */
    public $ownerId;

    /**
     * @description resourceOwnerAccount
     *
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @description resourceOwnerId
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description identityType
     *
     * @var string
     */
    public $identityType;

    /**
     * @description identityName
     *
     * @var string
     */
    public $identityName;

    /**
     * @description appId
     *
     * @var string
     */
    public $appId;

    /**
     * @description policyNames
     *
     * @var string
     */
    public $policyNames;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'identityType'         => 'IdentityType',
        'identityName'         => 'IdentityName',
        'appId'                => 'AppId',
        'policyNames'          => 'PolicyNames',
    ];

    public function validate()
    {
        Model::validateRequired('identityType', $this->identityType, true);
        Model::validateRequired('identityName', $this->identityName, true);
        Model::validateRequired('policyNames', $this->policyNames, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->identityName) {
            $res['IdentityName'] = $this->identityName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->policyNames) {
            $res['PolicyNames'] = $this->policyNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachAppPolicyFromIdentityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['IdentityName'])) {
            $model->identityName = $map['IdentityName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PolicyNames'])) {
            $model->policyNames = $map['PolicyNames'];
        }

        return $model;
    }
}
