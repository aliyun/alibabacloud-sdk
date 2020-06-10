<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponse\instances\instance\vpcAttributes\privateIpAddress;
use AlibabaCloud\Tea\Model;

class vpcAttributes extends Model
{
    /**
     * @description vpcId
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description vSwitchId
     *
     * @var string
     */
    public $VSwitchId;

    /**
     * @description natIpAddress
     *
     * @var string
     */
    public $natIpAddress;

    /**
     * @description privateIpAddress
     *
     * @var privateIpAddress
     */
    public $privateIpAddress;
    protected $_name = [
        'vpcId'            => 'VpcId',
        'VSwitchId'        => 'VSwitchId',
        'natIpAddress'     => 'NatIpAddress',
        'privateIpAddress' => 'PrivateIpAddress',
    ];

    public function validate()
    {
        Model::validateRequired('vpcId', $this->vpcId, true);
        Model::validateRequired('VSwitchId', $this->VSwitchId, true);
        Model::validateRequired('natIpAddress', $this->natIpAddress, true);
        Model::validateRequired('privateIpAddress', $this->privateIpAddress, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->VSwitchId) {
            $res['VSwitchId'] = $this->VSwitchId;
        }
        if (null !== $this->natIpAddress) {
            $res['NatIpAddress'] = $this->natIpAddress;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = null !== $this->privateIpAddress ? $this->privateIpAddress->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpcAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->VSwitchId = $map['VSwitchId'];
        }
        if (isset($map['NatIpAddress'])) {
            $model->natIpAddress = $map['NatIpAddress'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = privateIpAddress::fromMap($map['PrivateIpAddress']);
        }

        return $model;
    }
}
