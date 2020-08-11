<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDemandsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDemandsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var array
     */
    public $tag;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $demandId;

    /**
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $demandType;

    /**
     * @var array
     */
    public $demandStatus;
    protected $_name = [
        'regionId'           => 'RegionId',
        'tag'                => 'Tag',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'dryRun'             => 'DryRun',
        'zoneId'             => 'ZoneId',
        'demandId'           => 'DemandId',
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'instanceType'       => 'InstanceType',
        'instanceChargeType' => 'InstanceChargeType',
        'demandType'         => 'DemandType',
        'demandStatus'       => 'DemandStatus',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->demandId) {
            $res['DemandId'] = $this->demandId;
        }
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->demandType) {
            $res['DemandType'] = $this->demandType;
        }
        if (null !== $this->demandStatus) {
            $res['DemandStatus'] = $this->demandStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDemandsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['DemandId'])) {
            $model->demandId = $map['DemandId'];
        }
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['DemandType'])) {
            $model->demandType = $map['DemandType'];
        }
        if (isset($map['DemandStatus'])) {
            if (!empty($map['DemandStatus'])) {
                $model->demandStatus = $map['DemandStatus'];
            }
        }

        return $model;
    }
}
