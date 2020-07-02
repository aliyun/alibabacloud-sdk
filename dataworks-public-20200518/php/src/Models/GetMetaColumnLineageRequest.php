<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaColumnLineageRequest extends Model
{
    /**
     * @description columnGuid
     *
     * @var string
     */
    public $columnGuid;

    /**
     * @description direction
     *
     * @var string
     */
    public $direction;

    /**
     * @description pageNum
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description pageSize
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'columnGuid' => 'ColumnGuid',
        'direction'  => 'Direction',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
        Model::validateRequired('columnGuid', $this->columnGuid, true);
        Model::validateRequired('direction', $this->direction, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnGuid) {
            $res['ColumnGuid'] = $this->columnGuid;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaColumnLineageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColumnGuid'])) {
            $model->columnGuid = $map['ColumnGuid'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
