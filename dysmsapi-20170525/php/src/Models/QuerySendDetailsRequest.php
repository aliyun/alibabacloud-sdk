<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QuerySendDetailsRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'phoneNumber' => 'PhoneNumber',
        'bizId' => 'BizId',
        'sendDate' => 'SendDate',
        'pageSize' => 'PageSize',
        'currentPage' => 'CurrentPage',
    ];
    public function validate() {
        Model::validateRequired('phoneNumber', $this->phoneNumber, true);
        Model::validateRequired('sendDate', $this->sendDate, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('currentPage', $this->currentPage, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['PhoneNumber'] = $this->phoneNumber;
        $res['BizId'] = $this->bizId;
        $res['SendDate'] = $this->sendDate;
        $res['PageSize'] = $this->pageSize;
        $res['CurrentPage'] = $this->currentPage;
        return $res;
    }
    /**
     * @param array $map
     * @return QuerySendDetailsRequest
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
        if(isset($map['PhoneNumber'])){
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if(isset($map['BizId'])){
            $model->bizId = $map['BizId'];
        }
        if(isset($map['SendDate'])){
            $model->sendDate = $map['SendDate'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['CurrentPage'])){
            $model->currentPage = $map['CurrentPage'];
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
     * @description phoneNumber
     * @var string
     */
    public $phoneNumber;

    /**
     * @description bizId
     * @var string
     */
    public $bizId;

    /**
     * @description sendDate
     * @var string
     */
    public $sendDate;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description currentPage
     * @var integer
     */
    public $currentPage;

}
