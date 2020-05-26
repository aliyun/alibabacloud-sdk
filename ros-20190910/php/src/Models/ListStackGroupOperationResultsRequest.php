<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class ListStackGroupOperationResultsRequest extends Model
{
    /**
     * @description RegionId
     *
     * @var string
     */
    public $regionId;

    /**
     * @description OperationId
     *
     * @var string
     */
    public $operationId;

    /**
     * @description PageSize
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description PageNumber
     *
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
        $res                = [];
        $res['RegionId']    = $this->regionId;
        $res['OperationId'] = $this->operationId;
        $res['PageSize']    = $this->pageSize;
        $res['PageNumber']  = $this->pageNumber;

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
