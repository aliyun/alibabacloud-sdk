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
        $res                = [];
        $res['pageSize']    = $this->pageSize;
        $res['pageNumber']  = $this->pageNumber;
        $res['nodepool_id'] = $this->nodepoolId;
        $res['state']       = $this->state;

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
