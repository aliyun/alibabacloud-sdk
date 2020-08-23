<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePoliciesResponse\lifecyclePolicies;
use AlibabaCloud\Tea\Model;

class DescribeLifecyclePoliciesResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var array
     */
    public $lifecyclePolicies;
    protected $_name = [
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
        'pageSize'          => 'PageSize',
        'pageNumber'        => 'PageNumber',
        'lifecyclePolicies' => 'LifecyclePolicies',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('lifecyclePolicies', $this->lifecyclePolicies, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->lifecyclePolicies) {
            $res['LifecyclePolicies'] = [];
            if (null !== $this->lifecyclePolicies && \is_array($this->lifecyclePolicies)) {
                $n = 0;
                foreach ($this->lifecyclePolicies as $item) {
                    $res['LifecyclePolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLifecyclePoliciesResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['LifecyclePolicies'])) {
            if (!empty($map['LifecyclePolicies'])) {
                $model->lifecyclePolicies = [];
                $n                        = 0;
                foreach ($map['LifecyclePolicies'] as $item) {
                    $model->lifecyclePolicies[$n++] = null !== $item ? lifecyclePolicies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
