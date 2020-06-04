<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListLiveRecordVideoRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'streamName' => 'StreamName',
        'domainName' => 'DomainName',
        'appName' => 'AppName',
        'queryType' => 'QueryType',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'sortBy' => 'SortBy',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['StreamName'] = $this->streamName;
        $res['DomainName'] = $this->domainName;
        $res['AppName'] = $this->appName;
        $res['QueryType'] = $this->queryType;
        $res['PageNo'] = $this->pageNo;
        $res['PageSize'] = $this->pageSize;
        $res['SortBy'] = $this->sortBy;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        return $res;
    }
    /**
     * @param array $map
     * @return ListLiveRecordVideoRequest
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
        if(isset($map['StreamName'])){
            $model->streamName = $map['StreamName'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['AppName'])){
            $model->appName = $map['AppName'];
        }
        if(isset($map['QueryType'])){
            $model->queryType = $map['QueryType'];
        }
        if(isset($map['PageNo'])){
            $model->pageNo = $map['PageNo'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['SortBy'])){
            $model->sortBy = $map['SortBy'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
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
     * @description streamName
     * @var string
     */
    public $streamName;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description appName
     * @var string
     */
    public $appName;

    /**
     * @description queryType
     * @var string
     */
    public $queryType;

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
     * @description sortBy
     * @var string
     */
    public $sortBy;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

}
