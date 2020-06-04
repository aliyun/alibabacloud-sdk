<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SearchMediaRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'searchType' => 'SearchType',
        'fields' => 'Fields',
        'match' => 'Match',
        'sortBy' => 'SortBy',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'scrollToken' => 'ScrollToken',
        'sessionId' => 'SessionId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['SearchType'] = $this->searchType;
        $res['Fields'] = $this->fields;
        $res['Match'] = $this->match;
        $res['SortBy'] = $this->sortBy;
        $res['PageNo'] = $this->pageNo;
        $res['PageSize'] = $this->pageSize;
        $res['ScrollToken'] = $this->scrollToken;
        $res['SessionId'] = $this->sessionId;
        return $res;
    }
    /**
     * @param array $map
     * @return SearchMediaRequest
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
        if(isset($map['SearchType'])){
            $model->searchType = $map['SearchType'];
        }
        if(isset($map['Fields'])){
            $model->fields = $map['Fields'];
        }
        if(isset($map['Match'])){
            $model->match = $map['Match'];
        }
        if(isset($map['SortBy'])){
            $model->sortBy = $map['SortBy'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['ScrollToken'])){
            $model->scrollToken = $map['ScrollToken'];
        }
        if(isset($map['SessionId'])){
            $model->sessionId = $map['SessionId'];
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
     * @description searchType
     * @var string
     */
    public $searchType;

    /**
     * @description fields
     * @var string
     */
    public $fields;

    /**
     * @description match
     * @var string
     */
    public $match;

    /**
     * @description sortBy
     * @var string
     */
    public $sortBy;

    /**
     * @description pageNo
     * @var integer
     */
    public $pageNo;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description scrollToken
     * @var string
     */
    public $scrollToken;

    /**
     * @description sessionId
     * @var string
     */
    public $sessionId;

}
