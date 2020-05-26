<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackGroupOperationsResponse\stackGroupOperations;
use AlibabaCloud\Tea\Model;

class ListStackGroupOperationsResponse extends Model
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
     * @description StackGroupOperations
     *
     * @var array
     */
    public $stackGroupOperations;
    protected $_name = [
        'requestId'            => 'RequestId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'totalCount'           => 'TotalCount',
        'stackGroupOperations' => 'StackGroupOperations',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('stackGroupOperations', $this->stackGroupOperations, true);
    }

    public function toMap()
    {
        $res                         = [];
        $res['RequestId']            = $this->requestId;
        $res['PageNumber']           = $this->pageNumber;
        $res['PageSize']             = $this->pageSize;
        $res['TotalCount']           = $this->totalCount;
        $res['StackGroupOperations'] = [];
        if (null !== $this->stackGroupOperations && \is_array($this->stackGroupOperations)) {
            $n = 0;
            foreach ($this->stackGroupOperations as $item) {
                $res['StackGroupOperations'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackGroupOperationsResponse
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
        if (isset($map['StackGroupOperations'])) {
            if (!empty($map['StackGroupOperations'])) {
                $model->stackGroupOperations = [];
                $n                           = 0;
                foreach ($map['StackGroupOperations'] as $item) {
                    $model->stackGroupOperations[$n++] = null !== $item ? stackGroupOperations::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
