<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\ListStackInstancesResponse\stackInstances;
use AlibabaCloud\Tea\Model;

class ListStackInstancesResponse extends Model
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
     * @description StackInstances
     *
     * @var array
     */
    public $stackInstances;
    protected $_name = [
        'requestId'      => 'RequestId',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'totalCount'     => 'TotalCount',
        'stackInstances' => 'StackInstances',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('stackInstances', $this->stackInstances, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['RequestId']      = $this->requestId;
        $res['PageNumber']     = $this->pageNumber;
        $res['PageSize']       = $this->pageSize;
        $res['TotalCount']     = $this->totalCount;
        $res['StackInstances'] = [];
        if (null !== $this->stackInstances && \is_array($this->stackInstances)) {
            $n = 0;
            foreach ($this->stackInstances as $item) {
                $res['StackInstances'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackInstancesResponse
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
        if (isset($map['StackInstances'])) {
            if (!empty($map['StackInstances'])) {
                $model->stackInstances = [];
                $n                     = 0;
                foreach ($map['StackInstances'] as $item) {
                    $model->stackInstances[$n++] = null !== $item ? stackInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
