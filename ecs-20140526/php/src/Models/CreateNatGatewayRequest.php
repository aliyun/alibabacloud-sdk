<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayRequest\bandwidthPackage;
use AlibabaCloud\Tea\Model;

class CreateNatGatewayRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var array
     */
    public $bandwidthPackage;
    protected $_name = [
        'regionId'         => 'RegionId',
        'vpcId'            => 'VpcId',
        'name'             => 'Name',
        'description'      => 'Description',
        'clientToken'      => 'ClientToken',
        'bandwidthPackage' => 'BandwidthPackage',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('bandwidthPackage', $this->bandwidthPackage, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->bandwidthPackage) {
            $res['BandwidthPackage'] = [];
            if (null !== $this->bandwidthPackage && \is_array($this->bandwidthPackage)) {
                $n = 0;
                foreach ($this->bandwidthPackage as $item) {
                    $res['BandwidthPackage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNatGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['BandwidthPackage'])) {
            if (!empty($map['BandwidthPackage'])) {
                $model->bandwidthPackage = [];
                $n                       = 0;
                foreach ($map['BandwidthPackage'] as $item) {
                    $model->bandwidthPackage[$n++] = null !== $item ? bandwidthPackage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
