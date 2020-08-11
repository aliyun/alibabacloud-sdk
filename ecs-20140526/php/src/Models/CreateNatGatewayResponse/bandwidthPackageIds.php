<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayResponse;

use AlibabaCloud\Tea\Model;

class bandwidthPackageIds extends Model
{
    /**
     * @var array
     */
    public $bandwidthPackageId;
    protected $_name = [
        'bandwidthPackageId' => 'BandwidthPackageId',
    ];

    public function validate()
    {
        Model::validateRequired('bandwidthPackageId', $this->bandwidthPackageId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidthPackageIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackageId'])) {
            if (!empty($map['BandwidthPackageId'])) {
                $model->bandwidthPackageId = $map['BandwidthPackageId'];
            }
        }

        return $model;
    }
}
