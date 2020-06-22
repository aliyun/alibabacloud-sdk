<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostResponse;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryInstanceGaapCostResponse\data\modules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description hostId
     *
     * @var string
     */
    public $hostId;

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

    /**
     * @description totalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description modules
     *
     * @var modules
     */
    public $modules;
    protected $_name = [
        'hostId'     => 'HostId',
        'pageNum'    => 'PageNum',
        'pageSize'   => 'PageSize',
        'totalCount' => 'TotalCount',
        'modules'    => 'Modules',
    ];

    public function validate()
    {
        Model::validateRequired('hostId', $this->hostId, true);
        Model::validateRequired('pageNum', $this->pageNum, true);
        Model::validateRequired('pageSize', $this->pageSize, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('modules', $this->modules, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->modules) {
            $res['Modules'] = null !== $this->modules ? $this->modules->toMap() : null;
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
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Modules'])) {
            $model->modules = modules::fromMap($map['Modules']);
        }

        return $model;
    }
}
