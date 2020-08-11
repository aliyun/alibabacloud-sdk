<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance;

use AlibabaCloud\Tea\Model;

class eipAddress extends Model
{
    /**
     * @var string
     */
    public $allocationId;

    /**
     * @var string
     */
    public $ipAddress;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var bool
     */
    public $isSupportUnassociate;
    protected $_name = [
        'allocationId'         => 'AllocationId',
        'ipAddress'            => 'IpAddress',
        'bandwidth'            => 'Bandwidth',
        'internetChargeType'   => 'InternetChargeType',
        'isSupportUnassociate' => 'IsSupportUnassociate',
    ];

    public function validate()
    {
        Model::validateRequired('allocationId', $this->allocationId, true);
        Model::validateRequired('ipAddress', $this->ipAddress, true);
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('internetChargeType', $this->internetChargeType, true);
        Model::validateRequired('isSupportUnassociate', $this->isSupportUnassociate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->isSupportUnassociate) {
            $res['IsSupportUnassociate'] = $this->isSupportUnassociate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipAddress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['IsSupportUnassociate'])) {
            $model->isSupportUnassociate = $map['IsSupportUnassociate'];
        }

        return $model;
    }
}
