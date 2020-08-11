<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNatGatewaysResponse\natGateways\natGateway\ipLists;

use AlibabaCloud\Tea\Model;

class ipList extends Model
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
     * @var string
     */
    public $usingStatus;

    /**
     * @var bool
     */
    public $apAccessEnabled;

    /**
     * @var bool
     */
    public $snatEntryEnabled;
    protected $_name = [
        'allocationId'     => 'AllocationId',
        'ipAddress'        => 'IpAddress',
        'usingStatus'      => 'UsingStatus',
        'apAccessEnabled'  => 'ApAccessEnabled',
        'snatEntryEnabled' => 'SnatEntryEnabled',
    ];

    public function validate()
    {
        Model::validateRequired('allocationId', $this->allocationId, true);
        Model::validateRequired('ipAddress', $this->ipAddress, true);
        Model::validateRequired('usingStatus', $this->usingStatus, true);
        Model::validateRequired('apAccessEnabled', $this->apAccessEnabled, true);
        Model::validateRequired('snatEntryEnabled', $this->snatEntryEnabled, true);
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
        if (null !== $this->usingStatus) {
            $res['UsingStatus'] = $this->usingStatus;
        }
        if (null !== $this->apAccessEnabled) {
            $res['ApAccessEnabled'] = $this->apAccessEnabled;
        }
        if (null !== $this->snatEntryEnabled) {
            $res['SnatEntryEnabled'] = $this->snatEntryEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipList
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
        if (isset($map['UsingStatus'])) {
            $model->usingStatus = $map['UsingStatus'];
        }
        if (isset($map['ApAccessEnabled'])) {
            $model->apAccessEnabled = $map['ApAccessEnabled'];
        }
        if (isset($map['SnatEntryEnabled'])) {
            $model->snatEntryEnabled = $map['SnatEntryEnabled'];
        }

        return $model;
    }
}
