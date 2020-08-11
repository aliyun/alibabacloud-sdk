<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreatePhysicalConnectionSetupOrderRequest extends Model
{
    /**
     * @description description: The ID of the region where the leased line is deployed. You can get the region ID by calling the DescribeRegions API.;
     *
     * @var string
     */
    public $regionId;

    /**
     * @description description: The ID of the access point.;
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description description: The service provider that provides the leased line. Valid values:* CT: China Telecom* CU: China Unicom* CM: China Mobile* CO: Other Chinese service providers* Equinix: Equinix* Other: Other service providers outside Mainland China;
     *
     * @var string
     */
    public $lineOperator;

    /**
     * @description description: Optional. The type of the leased line connection port. Valid values:* **100Base-T**: 100M electrical ports* **1000Base-T **(default value): Gigabit electrical ports* **1000Base-LX**: 1000M single-mode optical ports (10 km)* **10GBase-T**: 10GE electrical ports* **10GBase-LR**: 10GE single-mode optical ports (10km) ;
     *
     * @var string
     */
    public $portType;

    /**
     * @description description: The ID of the redundant physical connection. Its status must be **Allocated**,**Confirmed**or** Enabled**. ;
     *
     * @var string
     */
    public $redundantPhysicalConnectionId;

    /**
     * @description description: Optional. Indicates whether to pay the fee automatically.Valid values: **true | false**;
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @description description: Optional. The token used for client authentication.;
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'regionId'                      => 'RegionId',
        'accessPointId'                 => 'AccessPointId',
        'lineOperator'                  => 'LineOperator',
        'portType'                      => 'PortType',
        'redundantPhysicalConnectionId' => 'RedundantPhysicalConnectionId',
        'autoPay'                       => 'AutoPay',
        'clientToken'                   => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('accessPointId', $this->accessPointId, true);
        Model::validateRequired('lineOperator', $this->lineOperator, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->lineOperator) {
            $res['LineOperator'] = $this->lineOperator;
        }
        if (null !== $this->portType) {
            $res['PortType'] = $this->portType;
        }
        if (null !== $this->redundantPhysicalConnectionId) {
            $res['RedundantPhysicalConnectionId'] = $this->redundantPhysicalConnectionId;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePhysicalConnectionSetupOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['LineOperator'])) {
            $model->lineOperator = $map['LineOperator'];
        }
        if (isset($map['PortType'])) {
            $model->portType = $map['PortType'];
        }
        if (isset($map['RedundantPhysicalConnectionId'])) {
            $model->redundantPhysicalConnectionId = $map['RedundantPhysicalConnectionId'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
