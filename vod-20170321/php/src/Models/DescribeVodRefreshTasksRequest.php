<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeVodRefreshTasksRequest extends Model {
    protected $_name = [
        'ownerId' => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'taskId' => 'TaskId',
        'objectPath' => 'ObjectPath',
        'pageNumber' => 'PageNumber',
        'objectType' => 'ObjectType',
        'domainName' => 'DomainName',
        'status' => 'Status',
        'pageSize' => 'PageSize',
        'startTime' => 'StartTime',
        'endTime' => 'EndTime',
        'resourceGroupId' => 'ResourceGroupId',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['OwnerId'] = $this->ownerId;
        $res['SecurityToken'] = $this->securityToken;
        $res['TaskId'] = $this->taskId;
        $res['ObjectPath'] = $this->objectPath;
        $res['PageNumber'] = $this->pageNumber;
        $res['ObjectType'] = $this->objectType;
        $res['DomainName'] = $this->domainName;
        $res['Status'] = $this->status;
        $res['PageSize'] = $this->pageSize;
        $res['StartTime'] = $this->startTime;
        $res['EndTime'] = $this->endTime;
        $res['ResourceGroupId'] = $this->resourceGroupId;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeVodRefreshTasksRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['OwnerId'])){
            $model->ownerId = $map['OwnerId'];
        }
        if(isset($map['SecurityToken'])){
            $model->securityToken = $map['SecurityToken'];
        }
        if(isset($map['TaskId'])){
            $model->taskId = $map['TaskId'];
        }
        if(isset($map['ObjectPath'])){
            $model->objectPath = $map['ObjectPath'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['ObjectType'])){
            $model->objectType = $map['ObjectType'];
        }
        if(isset($map['DomainName'])){
            $model->domainName = $map['DomainName'];
        }
        if(isset($map['Status'])){
            $model->status = $map['Status'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['StartTime'])){
            $model->startTime = $map['StartTime'];
        }
        if(isset($map['EndTime'])){
            $model->endTime = $map['EndTime'];
        }
        if(isset($map['ResourceGroupId'])){
            $model->resourceGroupId = $map['ResourceGroupId'];
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
     * @description taskId
     * @var string
     */
    public $taskId;

    /**
     * @description content
     * @var string
     */
    public $objectPath;

    /**
     * @description pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description taskType
     * @var string
     */
    public $objectType;

    /**
     * @description domainName
     * @var string
     */
    public $domainName;

    /**
     * @description taskStatusStr
     * @var string
     */
    public $status;

    /**
     * @description pageSize
     * @var integer
     */
    public $pageSize;

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

    /**
     * @description resourceGroupId
     * @var string
     */
    public $resourceGroupId;

}
