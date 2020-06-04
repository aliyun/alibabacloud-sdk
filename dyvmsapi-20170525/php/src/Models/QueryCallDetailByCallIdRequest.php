<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryCallDetailByCallIdRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'callId' => 'CallId',
        'prodId' => 'ProdId',
        'queryDate' => 'QueryDate',
    ];
    public function validate() {
        Model::validateRequired('callId', $this->callId, true);
        Model::validateRequired('prodId', $this->prodId, true);
        Model::validateRequired('queryDate', $this->queryDate, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['CallId'] = $this->callId;
        $res['ProdId'] = $this->prodId;
        $res['QueryDate'] = $this->queryDate;
        return $res;
    }
    /**
     * @param array $map
     * @return QueryCallDetailByCallIdRequest
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
        if(isset($map['CallId'])){
            $model->callId = $map['CallId'];
        }
        if(isset($map['ProdId'])){
            $model->prodId = $map['ProdId'];
        }
        if(isset($map['QueryDate'])){
            $model->queryDate = $map['QueryDate'];
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
     * @description callId
     * @var string
     */
    public $callId;

    /**
     * @description prodId
     * @var integer
     */
    public $prodId;

    /**
     * @description queryDate
     * @var integer
     */
    public $queryDate;

}
