<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSystemEventAttributeRequest extends Model
{
    /**
     * @description product
     *
     * @var string
     */
    public $product;

    /**
     * @description eventType
     *
     * @var string
     */
    public $eventType;

    /**
     * @description name
     *
     * @var string
     */
    public $name;

    /**
     * @description level
     *
     * @var string
     */
    public $level;

    /**
     * @description status
     *
     * @var string
     */
    public $status;

    /**
     * @description groupId
     *
     * @var string
     */
    public $groupId;

    /**
     * @description express
     *
     * @var string
     */
    public $searchKeywords;

    /**
     * @description timeStart
     *
     * @var string
     */
    public $startTime;

    /**
     * @description timeEnd
     *
     * @var string
     */
    public $endTime;

    /**
     * @description page
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description size
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'product'        => 'Product',
        'eventType'      => 'EventType',
        'name'           => 'Name',
        'level'          => 'Level',
        'status'         => 'Status',
        'groupId'        => 'GroupId',
        'searchKeywords' => 'SearchKeywords',
        'startTime'      => 'StartTime',
        'endTime'        => 'EndTime',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->searchKeywords) {
            $res['SearchKeywords'] = $this->searchKeywords;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSystemEventAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['SearchKeywords'])) {
            $model->searchKeywords = $map['SearchKeywords'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
