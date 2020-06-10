<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesOverviewResponse\regions;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesOverviewResponse\regions\regionModel\typeModels;
use AlibabaCloud\Tea\Model;

class regionModel extends Model
{
    /**
     * @description region
     *
     * @var string
     */
    public $region;

    /**
     * @description engineCount
     *
     * @var string
     */
    public $engineCount;

    /**
     * @description totalCount
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description typeModel
     *
     * @var typeModels
     */
    public $typeModels;
    protected $_name = [
        'region'      => 'Region',
        'engineCount' => 'EngineCount',
        'totalCount'  => 'TotalCount',
        'typeModels'  => 'TypeModels',
    ];

    public function validate()
    {
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('engineCount', $this->engineCount, true);
        Model::validateRequired('totalCount', $this->totalCount, true);
        Model::validateRequired('typeModels', $this->typeModels, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->engineCount) {
            $res['EngineCount'] = $this->engineCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->typeModels) {
            $res['TypeModels'] = null !== $this->typeModels ? $this->typeModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['EngineCount'])) {
            $model->engineCount = $map['EngineCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TypeModels'])) {
            $model->typeModels = typeModels::fromMap($map['TypeModels']);
        }

        return $model;
    }
}
