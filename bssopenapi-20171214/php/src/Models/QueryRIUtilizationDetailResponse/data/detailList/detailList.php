<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRIUtilizationDetailResponse\data\detailList;

use AlibabaCloud\Tea\Model;

class detailList extends Model
{
    /**
     * @description riInstanceId
     *
     * @var string
     */
    public $RIInstanceId;

    /**
     * @description instanceSpec
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @description deductedInstanceId
     *
     * @var string
     */
    public $deductedInstanceId;

    /**
     * @description deductedCommodityCode
     *
     * @var string
     */
    public $deductedCommodityCode;

    /**
     * @description deductDate
     *
     * @var string
     */
    public $deductDate;

    /**
     * @description deductHours
     *
     * @var string
     */
    public $deductHours;

    /**
     * @description deductedCommodityName
     *
     * @var string
     */
    public $deductedProductDetail;

    /**
     * @description deductQuantity
     *
     * @var float
     */
    public $deductQuantity;

    /**
     * @description deductFactorTotal
     *
     * @var float
     */
    public $deductFactorTotal;
    protected $_name = [
        'RIInstanceId'          => 'RIInstanceId',
        'instanceSpec'          => 'InstanceSpec',
        'deductedInstanceId'    => 'DeductedInstanceId',
        'deductedCommodityCode' => 'DeductedCommodityCode',
        'deductDate'            => 'DeductDate',
        'deductHours'           => 'DeductHours',
        'deductedProductDetail' => 'DeductedProductDetail',
        'deductQuantity'        => 'DeductQuantity',
        'deductFactorTotal'     => 'DeductFactorTotal',
    ];

    public function validate()
    {
        Model::validateRequired('RIInstanceId', $this->RIInstanceId, true);
        Model::validateRequired('instanceSpec', $this->instanceSpec, true);
        Model::validateRequired('deductedInstanceId', $this->deductedInstanceId, true);
        Model::validateRequired('deductedCommodityCode', $this->deductedCommodityCode, true);
        Model::validateRequired('deductDate', $this->deductDate, true);
        Model::validateRequired('deductHours', $this->deductHours, true);
        Model::validateRequired('deductedProductDetail', $this->deductedProductDetail, true);
        Model::validateRequired('deductQuantity', $this->deductQuantity, true);
        Model::validateRequired('deductFactorTotal', $this->deductFactorTotal, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->RIInstanceId) {
            $res['RIInstanceId'] = $this->RIInstanceId;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }
        if (null !== $this->deductedInstanceId) {
            $res['DeductedInstanceId'] = $this->deductedInstanceId;
        }
        if (null !== $this->deductedCommodityCode) {
            $res['DeductedCommodityCode'] = $this->deductedCommodityCode;
        }
        if (null !== $this->deductDate) {
            $res['DeductDate'] = $this->deductDate;
        }
        if (null !== $this->deductHours) {
            $res['DeductHours'] = $this->deductHours;
        }
        if (null !== $this->deductedProductDetail) {
            $res['DeductedProductDetail'] = $this->deductedProductDetail;
        }
        if (null !== $this->deductQuantity) {
            $res['DeductQuantity'] = $this->deductQuantity;
        }
        if (null !== $this->deductFactorTotal) {
            $res['DeductFactorTotal'] = $this->deductFactorTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RIInstanceId'])) {
            $model->RIInstanceId = $map['RIInstanceId'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }
        if (isset($map['DeductedInstanceId'])) {
            $model->deductedInstanceId = $map['DeductedInstanceId'];
        }
        if (isset($map['DeductedCommodityCode'])) {
            $model->deductedCommodityCode = $map['DeductedCommodityCode'];
        }
        if (isset($map['DeductDate'])) {
            $model->deductDate = $map['DeductDate'];
        }
        if (isset($map['DeductHours'])) {
            $model->deductHours = $map['DeductHours'];
        }
        if (isset($map['DeductedProductDetail'])) {
            $model->deductedProductDetail = $map['DeductedProductDetail'];
        }
        if (isset($map['DeductQuantity'])) {
            $model->deductQuantity = $map['DeductQuantity'];
        }
        if (isset($map['DeductFactorTotal'])) {
            $model->deductFactorTotal = $map['DeductFactorTotal'];
        }

        return $model;
    }
}
