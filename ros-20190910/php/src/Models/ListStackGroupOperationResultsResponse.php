<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationResultsResponse\stackGroupOperationResults;
use AlibabaCloud\Tea\Model;

class ListStackGroupOperationResultsResponse extends Model
{
    /**
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description PageNumber
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description PageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description TotalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description StackGroupOperationResults
     *
     * @var array
     */
    public $stackGroupOperationResults;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'pageNumber'                 => 'PageNumber',
        'pageSize'                   => 'PageSize',
        'totalCount'                 => 'TotalCount',
        'stackGroupOperationResults' => 'StackGroupOperationResults',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('stackGroupOperationResults', $this->stackGroupOperationResults, true);
    }

    public function toMap()
    {
        $res                               = [];
        $res['RequestId']                  = $this->requestId;
        $res['PageNumber']                 = $this->pageNumber;
        $res['PageSize']                   = $this->pageSize;
        $res['TotalCount']                 = $this->totalCount;
        $res['StackGroupOperationResults'] = [];
        if (null !== $this->stackGroupOperationResults && \is_array($this->stackGroupOperationResults)) {
            $n = 0;
            foreach ($this->stackGroupOperationResults as $item) {
                $res['StackGroupOperationResults'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackGroupOperationResultsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['StackGroupOperationResults'])) {
            if (!empty($map['StackGroupOperationResults'])) {
                $model->stackGroupOperationResults = [];
                $n                                 = 0;
                foreach ($map['StackGroupOperationResults'] as $item) {
                    $model->stackGroupOperationResults[$n++] = null !== $item ? stackGroupOperationResults::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
