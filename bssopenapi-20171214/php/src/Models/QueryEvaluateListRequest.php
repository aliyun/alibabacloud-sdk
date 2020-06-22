<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryEvaluateListRequest extends Model
{
    /**
     * @description type
     *
     * @var int
     */
    public $type;

    /**
     * @description outBizId
     *
     * @var string
     */
    public $outBizId;

    /**
     * @description pageNum
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description startAmount
     *
     * @var int
     */
    public $startAmount;

    /**
     * @description endAmount
     *
     * @var int
     */
    public $endAmount;

    /**
     * @description startBizTime
     *
     * @var string
     */
    public $startBizTime;

    /**
     * @description endBizTime
     *
     * @var string
     */
    public $endBizTime;

    /**
     * @description sortType
     *
     * @var int
     */
    public $sortType;

    /**
     * @description startSearchTime
     *
     * @var string
     */
    public $startSearchTime;

    /**
     * @description endSearchTime
     *
     * @var string
     */
    public $endSearchTime;

    /**
     * @description billCycle
     *
     * @var string
     */
    public $billCycle;

    /**
     * @description bizTypeList
     *
     * @var array
     */
    public $bizTypeList;
    protected $_name = [
        'type'            => 'Type',
        'outBizId'        => 'OutBizId',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'startAmount'     => 'StartAmount',
        'endAmount'       => 'EndAmount',
        'startBizTime'    => 'StartBizTime',
        'endBizTime'      => 'EndBizTime',
        'sortType'        => 'SortType',
        'startSearchTime' => 'StartSearchTime',
        'endSearchTime'   => 'EndSearchTime',
        'billCycle'       => 'BillCycle',
        'bizTypeList'     => 'BizTypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->outBizId) {
            $res['OutBizId'] = $this->outBizId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startAmount) {
            $res['StartAmount'] = $this->startAmount;
        }
        if (null !== $this->endAmount) {
            $res['EndAmount'] = $this->endAmount;
        }
        if (null !== $this->startBizTime) {
            $res['StartBizTime'] = $this->startBizTime;
        }
        if (null !== $this->endBizTime) {
            $res['EndBizTime'] = $this->endBizTime;
        }
        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
        }
        if (null !== $this->startSearchTime) {
            $res['StartSearchTime'] = $this->startSearchTime;
        }
        if (null !== $this->endSearchTime) {
            $res['EndSearchTime'] = $this->endSearchTime;
        }
        if (null !== $this->billCycle) {
            $res['BillCycle'] = $this->billCycle;
        }
        if (null !== $this->bizTypeList) {
            $res['BizTypeList'] = [];
            if (null !== $this->bizTypeList) {
                $res['BizTypeList'] = $this->bizTypeList;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEvaluateListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['OutBizId'])) {
            $model->outBizId = $map['OutBizId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartAmount'])) {
            $model->startAmount = $map['StartAmount'];
        }
        if (isset($map['EndAmount'])) {
            $model->endAmount = $map['EndAmount'];
        }
        if (isset($map['StartBizTime'])) {
            $model->startBizTime = $map['StartBizTime'];
        }
        if (isset($map['EndBizTime'])) {
            $model->endBizTime = $map['EndBizTime'];
        }
        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }
        if (isset($map['StartSearchTime'])) {
            $model->startSearchTime = $map['StartSearchTime'];
        }
        if (isset($map['EndSearchTime'])) {
            $model->endSearchTime = $map['EndSearchTime'];
        }
        if (isset($map['BillCycle'])) {
            $model->billCycle = $map['BillCycle'];
        }
        if (isset($map['BizTypeList'])) {
            if (!empty($map['BizTypeList'])) {
                $model->bizTypeList = [];
                $model->bizTypeList = $map['BizTypeList'];
            }
        }

        return $model;
    }
}
