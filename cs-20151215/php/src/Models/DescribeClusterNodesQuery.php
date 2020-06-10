<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeClusterNodesQuery extends Model
{
    /**
     * @description pageSize
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description pageNumber
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description nodepool_id
     *
     * @var string
     */
    public $nodepoolId;

    /**
     * @description state
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'pageSize'   => 'pageSize',
        'pageNumber' => 'pageNumber',
        'nodepoolId' => 'nodepool_id',
        'state'      => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterNodesQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
