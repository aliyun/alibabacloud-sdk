<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInvocationResultsResponse\invocation\invocationResults;
use AlibabaCloud\Tea\Model;

class invocation extends Model
{
    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var invocationResults
     */
    public $invocationResults;
    protected $_name = [
        'pageSize'          => 'PageSize',
        'pageNumber'        => 'PageNumber',
        'totalCount'        => 'TotalCount',
        'invocationResults' => 'InvocationResults',
    ];

    public function validate()
    {
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('invocationResults', $this->invocationResults, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->invocationResults) {
            $res['InvocationResults'] = null !== $this->invocationResults ? $this->invocationResults->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invocation
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['InvocationResults'])) {
            $model->invocationResults = invocationResults::fromMap($map['InvocationResults']);
        }

        return $model;
    }
}
