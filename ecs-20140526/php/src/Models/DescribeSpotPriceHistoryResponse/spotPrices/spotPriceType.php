<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSpotPriceHistoryResponse\spotPrices;

use AlibabaCloud\Tea\Model;

class spotPriceType extends Model
{
    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $ioOptimized;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var float
     */
    public $spotPrice;

    /**
     * @var float
     */
    public $originPrice;
    protected $_name = [
        'zoneId'       => 'ZoneId',
        'instanceType' => 'InstanceType',
        'ioOptimized'  => 'IoOptimized',
        'timestamp'    => 'Timestamp',
        'networkType'  => 'NetworkType',
        'spotPrice'    => 'SpotPrice',
        'originPrice'  => 'OriginPrice',
    ];

    public function validate()
    {
        Model::validateRequired('zoneId', $this->zoneId, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('ioOptimized', $this->ioOptimized, true);
        Model::validateRequired('timestamp', $this->timestamp, true);
        Model::validateRequired('networkType', $this->networkType, true);
        Model::validateRequired('spotPrice', $this->spotPrice, true);
        Model::validateRequired('originPrice', $this->originPrice, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ioOptimized) {
            $res['IoOptimized'] = $this->ioOptimized;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->spotPrice) {
            $res['SpotPrice'] = $this->spotPrice;
        }
        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spotPriceType
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IoOptimized'])) {
            $model->ioOptimized = $map['IoOptimized'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['SpotPrice'])) {
            $model->spotPrice = $map['SpotPrice'];
        }
        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }

        return $model;
    }
}
