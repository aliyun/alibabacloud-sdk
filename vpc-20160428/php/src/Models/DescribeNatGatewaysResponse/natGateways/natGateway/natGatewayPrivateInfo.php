<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponse\natGateways\natGateway;

use AlibabaCloud\Tea\Model;

class natGatewayPrivateInfo extends Model
{
    /**
     * @var string
     */
    public $eniInstanceId;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $vswitchId;

    /**
     * @var string
     */
    public $izNo;

    /**
     * @var int
     */
    public $maxBandwidth;
    protected $_name = [
        'eniInstanceId'    => 'EniInstanceId',
        'privateIpAddress' => 'PrivateIpAddress',
        'vswitchId'        => 'VswitchId',
        'izNo'             => 'IzNo',
        'maxBandwidth'     => 'MaxBandwidth',
    ];

    public function validate()
    {
        Model::validateRequired('eniInstanceId', $this->eniInstanceId, true);
        Model::validateRequired('privateIpAddress', $this->privateIpAddress, true);
        Model::validateRequired('vswitchId', $this->vswitchId, true);
        Model::validateRequired('izNo', $this->izNo, true);
        Model::validateRequired('maxBandwidth', $this->maxBandwidth, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eniInstanceId) {
            $res['EniInstanceId'] = $this->eniInstanceId;
        }
        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }
        if (null !== $this->vswitchId) {
            $res['VswitchId'] = $this->vswitchId;
        }
        if (null !== $this->izNo) {
            $res['IzNo'] = $this->izNo;
        }
        if (null !== $this->maxBandwidth) {
            $res['MaxBandwidth'] = $this->maxBandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return natGatewayPrivateInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EniInstanceId'])) {
            $model->eniInstanceId = $map['EniInstanceId'];
        }
        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }
        if (isset($map['VswitchId'])) {
            $model->vswitchId = $map['VswitchId'];
        }
        if (isset($map['IzNo'])) {
            $model->izNo = $map['IzNo'];
        }
        if (isset($map['MaxBandwidth'])) {
            $model->maxBandwidth = $map['MaxBandwidth'];
        }

        return $model;
    }
}
