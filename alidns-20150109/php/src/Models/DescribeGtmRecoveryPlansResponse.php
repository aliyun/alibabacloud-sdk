<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlansResponse\recoveryPlans;
use AlibabaCloud\Tea\Model;

class DescribeGtmRecoveryPlansResponse extends Model
{
    /**
     * @description requestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description module.totalItems
     *
     * @var int
     */
    public $totalItems;

    /**
     * @description module.totalPages
     *
     * @var int
     */
    public $totalPages;

    /**
     * @description module.pageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description module.pageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description module.data
     *
     * @var recoveryPlans
     */
    public $recoveryPlans;
    protected $_name = [
        'requestId'     => 'RequestId',
        'totalItems'    => 'TotalItems',
        'totalPages'    => 'TotalPages',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'recoveryPlans' => 'RecoveryPlans',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalItems', $this->totalItems, true);
        Model::validateRequired('totalPages', $this->totalPages, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('recoveryPlans', $this->recoveryPlans, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->recoveryPlans) {
            $res['RecoveryPlans'] = null !== $this->recoveryPlans ? $this->recoveryPlans->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmRecoveryPlansResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RecoveryPlans'])) {
            $model->recoveryPlans = recoveryPlans::fromMap($map['RecoveryPlans']);
        }

        return $model;
    }
}
