<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Tea\Model;

class ListJobOrdersRequest extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $appName;

    /**
     * @description appSecret
     *
     * @var string
     */
    public $appCode;

    /**
     * @description cursor
     *
     * @var int
     */
    public $cursor;

    /**
     * @description handler
     *
     * @var string
     */
    public $handler;

    /**
     * @description client_sys
     *
     * @var string
     */
    public $clientSystem;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description title
     *
     * @var string
     */
    public $title;

    /**
     * @description order_status
     *
     * @var string
     */
    public $orderStatus;

    /**
     * @description client_unique_id
     *
     * @var string
     */
    public $clientUniqueId;

    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description id
     *
     * @var string
     */
    public $id;

    /**
     * @description endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description changing_type
     *
     * @var string
     */
    public $changingType;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'appName'        => 'AppName',
        'appCode'        => 'AppCode',
        'cursor'         => 'Cursor',
        'handler'        => 'Handler',
        'clientSystem'   => 'ClientSystem',
        'pageSize'       => 'PageSize',
        'title'          => 'Title',
        'orderStatus'    => 'OrderStatus',
        'clientUniqueId' => 'ClientUniqueId',
        'requestId'      => 'RequestId',
        'startTime'      => 'StartTime',
        'id'             => 'Id',
        'endTime'        => 'EndTime',
        'changingType'   => 'ChangingType',
        'status'         => 'Status',
    ];

    public function validate()
    {
        Model::validateRequired('cursor', $this->cursor, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('requestId', $this->requestId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->cursor) {
            $res['Cursor'] = $this->cursor;
        }
        if (null !== $this->handler) {
            $res['Handler'] = $this->handler;
        }
        if (null !== $this->clientSystem) {
            $res['ClientSystem'] = $this->clientSystem;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->orderStatus) {
            $res['OrderStatus'] = $this->orderStatus;
        }
        if (null !== $this->clientUniqueId) {
            $res['ClientUniqueId'] = $this->clientUniqueId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->changingType) {
            $res['ChangingType'] = $this->changingType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListJobOrdersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['Cursor'])) {
            $model->cursor = $map['Cursor'];
        }
        if (isset($map['Handler'])) {
            $model->handler = $map['Handler'];
        }
        if (isset($map['ClientSystem'])) {
            $model->clientSystem = $map['ClientSystem'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['OrderStatus'])) {
            $model->orderStatus = $map['OrderStatus'];
        }
        if (isset($map['ClientUniqueId'])) {
            $model->clientUniqueId = $map['ClientUniqueId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ChangingType'])) {
            $model->changingType = $map['ChangingType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
