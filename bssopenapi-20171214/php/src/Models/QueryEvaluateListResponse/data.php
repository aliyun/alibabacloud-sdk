<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryEvaluateListResponse\data\evaluateList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description hostId
     *
     * @var string
     */
    public $hostId;

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
     * @description totalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description totalInvoiceAmount
     *
     * @var int
     */
    public $totalInvoiceAmount;

    /**
     * @description totalUnAppliedInvoiceAmount
     *
     * @var int
     */
    public $totalUnAppliedInvoiceAmount;

    /**
     * @description evaluateList
     *
     * @var evaluateList
     */
    public $evaluateList;
    protected $_name = [
        'hostId'                      => 'HostId',
        'pageNum'                     => 'PageNum',
        'pageSize'                    => 'PageSize',
        'totalCount'                  => 'TotalCount',
        'totalInvoiceAmount'          => 'TotalInvoiceAmount',
        'totalUnAppliedInvoiceAmount' => 'TotalUnAppliedInvoiceAmount',
        'evaluateList'                => 'EvaluateList',
    ];

    public function validate()
    {
        Model::validateRequired('hostId', $this->hostId, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('totalInvoiceAmount', $this->totalInvoiceAmount, true);
        Model::validateRequired('totalUnAppliedInvoiceAmount', $this->totalUnAppliedInvoiceAmount, true);
        Model::validateRequired('evaluateList', $this->evaluateList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalInvoiceAmount) {
            $res['TotalInvoiceAmount'] = $this->totalInvoiceAmount;
        }
        if (null !== $this->totalUnAppliedInvoiceAmount) {
            $res['TotalUnAppliedInvoiceAmount'] = $this->totalUnAppliedInvoiceAmount;
        }
        if (null !== $this->evaluateList) {
            $res['EvaluateList'] = null !== $this->evaluateList ? $this->evaluateList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalInvoiceAmount'])) {
            $model->totalInvoiceAmount = $map['TotalInvoiceAmount'];
        }
        if (isset($map['TotalUnAppliedInvoiceAmount'])) {
            $model->totalUnAppliedInvoiceAmount = $map['TotalUnAppliedInvoiceAmount'];
        }
        if (isset($map['EvaluateList'])) {
            $model->evaluateList = evaluateList::fromMap($map['EvaluateList']);
        }

        return $model;
    }
}
