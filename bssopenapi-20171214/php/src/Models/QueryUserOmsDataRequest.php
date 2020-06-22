<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class QueryUserOmsDataRequest extends Model
{
    /**
     * @description table
     *
     * @var string
     */
    public $table;

    /**
     * @description dataType
     *
     * @var string
     */
    public $dataType;

    /**
     * @description startTime
     *
     * @var string
     */
    public $startTime;

    /**
     * @description endTime
     *
     * @var string
     */
    public $endTime;

    /**
     * @description marker
     *
     * @var string
     */
    public $marker;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'table'     => 'Table',
        'dataType'  => 'DataType',
        'startTime' => 'StartTime',
        'endTime'   => 'EndTime',
        'marker'    => 'Marker',
        'pageSize'  => 'PageSize',
    ];

    public function validate()
    {
        Model::validateRequired('table', $this->table, true);
        Model::validateRequired('dataType', $this->dataType, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUserOmsDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
