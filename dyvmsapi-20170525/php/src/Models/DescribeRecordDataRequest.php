<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class DescribeRecordDataRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $accessKeyId;

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
     * @description prodCode
     *
     * @var string
     */
    public $prodCode;

    /**
     * @description accountType
     *
     * @var string
     */
    public $accountType;

    /**
     * @description accountId
     *
     * @var string
     */
    public $accountId;

    /**
     * @description acid
     *
     * @var string
     */
    public $acid;

    /**
     * @description secLevel
     *
     * @var int
     */
    public $secLevel;
    protected $_name = [
        'accessKeyId'          => 'AccessKeyId',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'prodCode'             => 'ProdCode',
        'accountType'          => 'AccountType',
        'accountId'            => 'AccountId',
        'acid'                 => 'Acid',
        'secLevel'             => 'SecLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res                         = [];
        $res['AccessKeyId']          = $this->accessKeyId;
        $res['OwnerId']              = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId']      = $this->resourceOwnerId;
        $res['ProdCode']             = $this->prodCode;
        $res['AccountType']          = $this->accountType;
        $res['AccountId']            = $this->accountId;
        $res['Acid']                 = $this->acid;
        $res['SecLevel']             = $this->secLevel;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRecordDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Acid'])) {
            $model->acid = $map['Acid'];
        }
        if (isset($map['SecLevel'])) {
            $model->secLevel = $map['SecLevel'];
        }

        return $model;
    }
}
