<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineStatusesResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListBaselineStatusesResponse\data\baselineStatuses;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description pageNumber
     *
     * @var int
     */
    public $pageNumber;

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
     * @description data
     *
     * @var array
     */
    public $baselineStatuses;
    protected $_name = [
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'totalCount'       => 'TotalCount',
        'baselineStatuses' => 'BaselineStatuses',
    ];

    public function validate()
    {
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('baselineStatuses', $this->baselineStatuses, true);
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->baselineStatuses) {
            $res['BaselineStatuses'] = [];
            if (null !== $this->baselineStatuses && \is_array($this->baselineStatuses)) {
                $n = 0;
                foreach ($this->baselineStatuses as $item) {
                    $res['BaselineStatuses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['BaselineStatuses'])) {
            if (!empty($map['BaselineStatuses'])) {
                $model->baselineStatuses = [];
                $n                       = 0;
                foreach ($map['BaselineStatuses'] as $item) {
                    $model->baselineStatuses[$n++] = null !== $item ? baselineStatuses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
