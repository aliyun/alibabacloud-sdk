<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponseBody;

use AlibabaCloud\Tea\Model;

class page extends Model
{
    /**
     * @description page_size
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description page_number
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description total_count
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageSize'   => 'page_size',
        'pageNumber' => 'page_number',
        'totalCount' => 'total_count',
    ];

    public function validate()
    {
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['page_number'] = $this->pageNumber;
        }
        if (null !== $this->totalCount) {
            $res['total_count'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return page
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }
        if (isset($map['page_number'])) {
            $model->pageNumber = $map['page_number'];
        }
        if (isset($map['total_count'])) {
            $model->totalCount = $map['total_count'];
        }

        return $model;
    }
}
