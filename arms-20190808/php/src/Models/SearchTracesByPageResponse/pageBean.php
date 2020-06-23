<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageResponse;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchTracesByPageResponse\pageBean\traceInfos;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @description total
     *
     * @var int
     */
    public $total;

    /**
     * @description page
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
     * @description items
     *
     * @var array
     */
    public $traceInfos;
    protected $_name = [
        'total'      => 'Total',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'traceInfos' => 'TraceInfos',
    ];

    public function validate()
    {
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('traceInfos', $this->traceInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->traceInfos) {
            $res['TraceInfos'] = [];
            if (null !== $this->traceInfos && \is_array($this->traceInfos)) {
                $n = 0;
                foreach ($this->traceInfos as $item) {
                    $res['TraceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TraceInfos'])) {
            if (!empty($map['TraceInfos'])) {
                $model->traceInfos = [];
                $n                 = 0;
                foreach ($map['TraceInfos'] as $item) {
                    $model->traceInfos[$n++] = null !== $item ? traceInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
