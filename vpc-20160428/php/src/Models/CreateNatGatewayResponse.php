<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponse\bandwidthPackageIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponse\forwardTableIds;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayResponse\snatTableIds;
use AlibabaCloud\Tea\Model;

class CreateNatGatewayResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $natGatewayId;

    /**
     * @var forwardTableIds
     */
    public $forwardTableIds;

    /**
     * @var snatTableIds
     */
    public $snatTableIds;

    /**
     * @var bandwidthPackageIds
     */
    public $bandwidthPackageIds;
    protected $_name = [
        'requestId'           => 'RequestId',
        'natGatewayId'        => 'NatGatewayId',
        'forwardTableIds'     => 'ForwardTableIds',
        'snatTableIds'        => 'SnatTableIds',
        'bandwidthPackageIds' => 'BandwidthPackageIds',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('natGatewayId', $this->natGatewayId, true);
        Model::validateRequired('forwardTableIds', $this->forwardTableIds, true);
        Model::validateRequired('snatTableIds', $this->snatTableIds, true);
        Model::validateRequired('bandwidthPackageIds', $this->bandwidthPackageIds, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->natGatewayId) {
            $res['NatGatewayId'] = $this->natGatewayId;
        }
        if (null !== $this->forwardTableIds) {
            $res['ForwardTableIds'] = null !== $this->forwardTableIds ? $this->forwardTableIds->toMap() : null;
        }
        if (null !== $this->snatTableIds) {
            $res['SnatTableIds'] = null !== $this->snatTableIds ? $this->snatTableIds->toMap() : null;
        }
        if (null !== $this->bandwidthPackageIds) {
            $res['BandwidthPackageIds'] = null !== $this->bandwidthPackageIds ? $this->bandwidthPackageIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNatGatewayResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NatGatewayId'])) {
            $model->natGatewayId = $map['NatGatewayId'];
        }
        if (isset($map['ForwardTableIds'])) {
            $model->forwardTableIds = forwardTableIds::fromMap($map['ForwardTableIds']);
        }
        if (isset($map['SnatTableIds'])) {
            $model->snatTableIds = snatTableIds::fromMap($map['SnatTableIds']);
        }
        if (isset($map['BandwidthPackageIds'])) {
            $model->bandwidthPackageIds = bandwidthPackageIds::fromMap($map['BandwidthPackageIds']);
        }

        return $model;
    }
}
