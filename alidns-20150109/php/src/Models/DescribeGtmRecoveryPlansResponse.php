<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmRecoveryPlansResponse\recoveryPlans;

class DescribeGtmRecoveryPlansResponse extends Model {
    protected $_name = [
        'requestId' => 'RequestId',
        'totalItems' => 'TotalItems',
        'totalPages' => 'TotalPages',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'recoveryPlans' => 'RecoveryPlans',
    ];
    public function validate() {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalItems', $this->totalItems, true);
        Model::validateRequired('totalPages', $this->totalPages, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('recoveryPlans', $this->recoveryPlans, true);
    }
    public function toMap() {
        $res = [];
        $res['RequestId'] = $this->requestId;
        $res['TotalItems'] = $this->totalItems;
        $res['TotalPages'] = $this->totalPages;
        $res['PageNumber'] = $this->pageNumber;
        $res['PageSize'] = $this->pageSize;
        $res['RecoveryPlans'] = null !== $this->recoveryPlans ? $this->recoveryPlans->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return DescribeGtmRecoveryPlansResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['RequestId'])){
            $model->requestId = $map['RequestId'];
        }
        if(isset($map['TotalItems'])){
            $model->totalItems = $map['TotalItems'];
        }
        if(isset($map['TotalPages'])){
            $model->totalPages = $map['TotalPages'];
        }
        if(isset($map['PageNumber'])){
            $model->pageNumber = $map['PageNumber'];
        }
        if(isset($map['PageSize'])){
            $model->pageSize = $map['PageSize'];
        }
        if(isset($map['RecoveryPlans'])){
            $model->recoveryPlans = recoveryPlans::fromMap($map['RecoveryPlans']);
        }
        return $model;
    }
    /**
     * @description requestId
     * @var string
     */
    public $requestId;

    /**
     * @description module.totalItems
     * @var integer
     */
    public $totalItems;

    /**
     * @description module.totalPages
     * @var integer
     */
    public $totalPages;

    /**
     * @description module.pageNumber
     * @var integer
     */
    public $pageNumber;

    /**
     * @description module.pageSize
     * @var integer
     */
    public $pageSize;

    /**
     * @description module.data
     * @var recoveryPlans
     */
    public $recoveryPlans;

}
