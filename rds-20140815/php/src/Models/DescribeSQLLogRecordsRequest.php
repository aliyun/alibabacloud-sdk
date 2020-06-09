<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeSQLLogRecordsRequest extends Model {
    protected $_name = [
        'accessKeyId' => 'AccessKeyId',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'clientToken' => 'ClientToken',
        'DBInstanceId' => 'DBInstanceId',
        'SQLId' => 'SQLId',
        'queryKeywords' => 'QueryKeywords',
        'startTime' => 'StartTime',
        'database' => 'Database',
        'user' => 'User',
        'form' => 'Form',
        'endTime' => 'EndTime',
        'pageSize' => 'PageSize',
        'pageNumber' => 'PageNumber',
        'ownerAccount' => 'OwnerAccount',
    ];
    public function validate() {
        Model::validateRequired('DBInstanceId', $this->DBInstanceId, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessKeyId'] = $this->accessKeyId;
        $res['OwnerId'] = $this->ownerId;
        $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        $res['ResourceOwnerId'] = $this->resourceOwnerId;
        $res['ClientToken'] = $this->clientToken;
        $res['DBInstanceId'] = $this->DBInstanceId;
        $res['SQLId'] = $this->SQLId;
        $res['QueryKeywords'] = $this->queryKeywords;
        $res['StartTime'] = $this->startTime;
        $res['Database'] = $this->database;
        $res['User'] = $this->user;
        $res['Form'] = $this->form;
        $res['EndTime'] = $this->endTime;
        $res['PageSize'] = $this->pageSize;
        $res['PageNumber'] = $this->pageNumber;
        $res['OwnerAccount'] = $this->ownerAccount;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeSQLLogRecordsRequest
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
        if(isset($map['ClientToken'])){
            $model->clientToken = $map['ClientToken'];
        }
        if(isset($map['DBInstanceId'])){
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if(isset($map['SQLId'])){
            $model->SQLId = $map['SQLId'];
        }
        if(isset($map['QueryKeywords'])){
            $model->queryKeywords = $map['QueryKeywords'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['Database'])){
            $model->database = $map['Database'];
        }
        if(isset($map['User'])){
            $model->user = $map['User'];
        }
        if(isset($map['Form'])){
            $model->form = $map['Form'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['OwnerAccount'])){
            $model->ownerAccount = $map['OwnerAccount'];
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
     * @description token
     * @var string
     */
    public $clientToken;

    /**
     * @description dbInstanceId
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description sqlId
     * @var integer
     */
    public $SQLId;

    /**
     * @description queryKeyword
     * @var string
     */
    public $queryKeywords;

    /**
     * @description startTime
     * @var string
     */
    public $startTime;

    /**
     * @description dbName
     * @var string
     */
    public $database;

    /**
     * @description accountName
     * @var string
     */
    public $user;

    /**
     * @description form
     * @var string
     */
    public $form;

    /**
     * @description endTime
     * @var string
     */
    public $endTime;

    /**
     * @description maxRecordsPerPage
     * @var integer
     */
    public $pageSize;

    /**
     * @description pageNumbers
     * @var integer
     */
    public $pageNumber;

    /**
     * @description ownerAccount
     * @var string
     */
    public $ownerAccount;

}
