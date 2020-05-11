<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterNodesResponseBody;

use AlibabaCloud\Tea\Model;

class page extends Model
{
    /**
     * @description total_count
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description page_number
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description page_size
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'totalCount' => 'total_count',
        'pageNumber' => 'page_number',
        'pageSize'   => 'page_size',
    ];

    public function validate()
    {
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('pageNumber', $this->pageNumber, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
    }

    public function toMap()
    {
        $res                = [];
        $res['total_count'] = $this->totalCount;
        $res['page_number'] = $this->pageNumber;
        $res['page_size']   = $this->pageSize;

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
        if (isset($map['total_count'])) {
            $model->totalCount = $map['total_count'];
        }
        if (isset($map['page_number'])) {
            $model->pageNumber = $map['page_number'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        return $model;
    }
}
