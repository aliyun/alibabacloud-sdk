<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStacksResponse\stacks;
use AlibabaCloud\Tea\Model;

class ListStacksResponse extends Model
{
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
     * @description RequestId
     *
     * @var string
     */
    public $requestId;

    /**
     * @description TotalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Stacks
     *
     * @var array
     */
    public $stacks;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
        'stacks'     => 'Stacks',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('stacks', $this->stacks, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->stacks) {
            $res['Stacks'] = [];
            if (null !== $this->stacks && \is_array($this->stacks)) {
                $n = 0;
                foreach ($this->stacks as $item) {
                    $res['Stacks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStacksResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Stacks'])) {
            if (!empty($map['Stacks'])) {
                $model->stacks = [];
                $n             = 0;
                foreach ($map['Stacks'] as $item) {
                    $model->stacks[$n++] = null !== $item ? stacks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
