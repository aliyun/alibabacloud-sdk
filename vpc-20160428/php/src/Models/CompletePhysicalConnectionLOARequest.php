<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CompletePhysicalConnectionLOARequest extends Model
{
    /**
     * @description description: Optional. The token used for client authentication.;
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description description: The ID of the region where the leased line is deployed.;
     *
     * @var string
     */
    public $regionId;

    /**
     * @description description: The instance ID of the physical connection interface.;
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description description: The number of the leased line.;
     *
     * @var string
     */
    public $lineCode;

    /**
     * @description description: The label numbers of cables at the installation site.;
     *
     * @var string
     */
    public $lineLabel;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'regionId'    => 'RegionId',
        'instanceId'  => 'InstanceId',
        'lineCode'    => 'LineCode',
        'lineLabel'   => 'LineLabel',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('lineCode', $this->lineCode, true);
        Model::validateRequired('lineLabel', $this->lineLabel, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lineCode) {
            $res['LineCode'] = $this->lineCode;
        }
        if (null !== $this->lineLabel) {
            $res['LineLabel'] = $this->lineLabel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompletePhysicalConnectionLOARequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LineCode'])) {
            $model->lineCode = $map['LineCode'];
        }
        if (isset($map['LineLabel'])) {
            $model->lineLabel = $map['LineLabel'];
        }

        return $model;
    }
}
