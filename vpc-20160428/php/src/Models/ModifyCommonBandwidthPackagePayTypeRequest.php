<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifyCommonBandwidthPackagePayTypeRequest extends Model
{
    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $payType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $kbpsBandwidth;

    /**
     * @var string
     */
    public $resourceBid;

    /**
     * @var int
     */
    public $resourceUid;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'bandwidthPackageId' => 'BandwidthPackageId',
        'payType'            => 'PayType',
        'pricingCycle'       => 'PricingCycle',
        'duration'           => 'Duration',
        'autoPay'            => 'AutoPay',
        'bandwidth'          => 'Bandwidth',
        'kbpsBandwidth'      => 'KbpsBandwidth',
        'resourceBid'        => 'ResourceBid',
        'resourceUid'        => 'ResourceUid',
        'regionId'           => 'RegionId',
    ];

    public function validate()
    {
        Model::validateRequired('bandwidthPackageId', $this->bandwidthPackageId, true);
        Model::validateRequired('regionId', $this->regionId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->kbpsBandwidth) {
            $res['KbpsBandwidth'] = $this->kbpsBandwidth;
        }
        if (null !== $this->resourceBid) {
            $res['ResourceBid'] = $this->resourceBid;
        }
        if (null !== $this->resourceUid) {
            $res['ResourceUid'] = $this->resourceUid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCommonBandwidthPackagePayTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['KbpsBandwidth'])) {
            $model->kbpsBandwidth = $map['KbpsBandwidth'];
        }
        if (isset($map['ResourceBid'])) {
            $model->resourceBid = $map['ResourceBid'];
        }
        if (isset($map['ResourceUid'])) {
            $model->resourceUid = $map['ResourceUid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
