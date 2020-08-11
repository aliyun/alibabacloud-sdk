<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class RemoveBandwidthPackageIpsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var array
     */
    public $removedIpAddresses;
    protected $_name = [
        'regionId'           => 'RegionId',
        'bandwidthPackageId' => 'BandwidthPackageId',
        'clientToken'        => 'ClientToken',
        'removedIpAddresses' => 'RemovedIpAddresses',
    ];

    public function validate()
    {
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('bandwidthPackageId', $this->bandwidthPackageId, true);
        Model::validateRequired('removedIpAddresses', $this->removedIpAddresses, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->removedIpAddresses) {
            $res['RemovedIpAddresses'] = $this->removedIpAddresses;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveBandwidthPackageIpsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['RemovedIpAddresses'])) {
            if (!empty($map['RemovedIpAddresses'])) {
                $model->removedIpAddresses = $map['RemovedIpAddresses'];
            }
        }

        return $model;
    }
}
