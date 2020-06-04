<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class StartMicroOutboundRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'prodCode' => 'ProdCode',
        'accountType' => 'AccountType',
        'accountId' => 'AccountId',
        'commandCode' => 'CommandCode',
        'callingNumber' => 'CallingNumber',
        'calledNumber' => 'CalledNumber',
        'extInfo' => 'ExtInfo',
        'appName' => 'AppName',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ProdCode'] = $this->prodCode;
        $res['AccountType'] = $this->accountType;
        $res['AccountId'] = $this->accountId;
        $res['CommandCode'] = $this->commandCode;
        $res['CallingNumber'] = $this->callingNumber;
        $res['CalledNumber'] = $this->calledNumber;
        $res['ExtInfo'] = $this->extInfo;
        $res['AppName'] = $this->appName;
        return $res;
    }
    /**
     * @param array $map
     * @return StartMicroOutboundRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessKeyId'])){
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['ResourceOwnerAccount'])){
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if(isset($map['ResourceOwnerId'])){
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if(isset($map['ProdCode'])){
            $model->prodCode = $map['ProdCode'];
        }
        if(isset($map['AccountType'])){
            $model->accountType = $map['AccountType'];
        }
        if(isset($map['AccountId'])){
            $model->accountId = $map['AccountId'];
        }
        if(isset($map['CommandCode'])){
            $model->commandCode = $map['CommandCode'];
        }
        if(isset($map['CallingNumber'])){
            $model->callingNumber = $map['CallingNumber'];
        }
        if(isset($map['CalledNumber'])){
            $model->calledNumber = $map['CalledNumber'];
        }
        if(isset($map['ExtInfo'])){
            $model->extInfo = $map['ExtInfo'];
        }
        if(isset($map['AppName'])){
            $model->appName = $map['AppName'];
        }
        return $model;
    }
    /**
     * @description appKey
     * @var string
     */
    public $accessKeyId;

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
     * @description prodCode
     * @var string
     */
    public $prodCode;

    /**
     * @description accountType
     * @var string
     */
    public $accountType;

    /**
     * @description accountId
     * @var string
     */
    public $accountId;

    /**
     * @description commandCode
     * @var string
     */
    public $commandCode;

    /**
     * @description callingNumber
     * @var string
     */
    public $callingNumber;

    /**
     * @description calledNumber
     * @var string
     */
    public $calledNumber;

    /**
     * @description extInfo
     * @var string
     */
    public $extInfo;

    /**
     * @description appName
     * @var string
     */
    public $appName;

}
