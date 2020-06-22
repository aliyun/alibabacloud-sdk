<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class RenewInstanceRequest extends Model
{
    /**
     * @description productCode
     *
     * @var string
     */
    public $productCode;

    /**
     * @description instanceId
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description renewPeriod
     *
     * @var int
     */
    public $renewPeriod;

    /**
     * @description clientToken
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description productType
     *
     * @var string
     */
    public $productType;
    protected $_name = [
        'productCode' => 'ProductCode',
        'instanceId'  => 'InstanceId',
        'renewPeriod' => 'RenewPeriod',
        'clientToken' => 'ClientToken',
        'productType' => 'ProductType',
    ];

    public function validate()
    {
        Model::validateRequired('productCode', $this->productCode, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('renewPeriod', $this->renewPeriod, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->renewPeriod) {
            $res['RenewPeriod'] = $this->renewPeriod;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RenewInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RenewPeriod'])) {
            $model->renewPeriod = $map['RenewPeriod'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
