<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListStackGroupOperationResultsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $operationId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'regionId'    => 'RegionId',
        'operationId' => 'OperationId',
        'pageSize'    => 'PageSize',
        'pageNumber'  => 'PageNumber',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('operationId', $this->operationId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->operationId) {
            $res['OperationId'] = $this->operationId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStackGroupOperationResultsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OperationId'])) {
            $model->operationId = $map['OperationId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
