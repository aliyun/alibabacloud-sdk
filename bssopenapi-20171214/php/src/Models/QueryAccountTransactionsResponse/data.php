<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountTransactionsResponse\data\accountTransactionsList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description accountName
     *
     * @var string
     */
    public $accountName;

    /**
     * @description totalCount
     *
     * @var int
     */
    public $totalCount;

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
     * @description accountTransactionsList
     *
     * @var accountTransactionsList
     */
    public $accountTransactionsList;
    protected $_name = [
        'accountName'             => 'AccountName',
        'totalCount'              => 'TotalCount',
        'pageNum'                 => 'PageNum',
        'pageSize'                => 'PageSize',
        'accountTransactionsList' => 'AccountTransactionsList',
    ];

    public function validate()
    {
        Model::validateRequired('accountName', $this->accountName, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('accountTransactionsList', $this->accountTransactionsList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->accountTransactionsList) {
            $res['AccountTransactionsList'] = null !== $this->accountTransactionsList ? $this->accountTransactionsList->toMap() : null;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['AccountTransactionsList'])) {
            $model->accountTransactionsList = accountTransactionsList::fromMap($map['AccountTransactionsList']);
        }

        return $model;
    }
}
