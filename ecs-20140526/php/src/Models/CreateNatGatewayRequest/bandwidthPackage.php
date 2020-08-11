<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreateNatGatewayRequest;

use AlibabaCloud\Tea\Model;

class bandwidthPackage extends Model
{
    /**
     * @var int
     */
    public $ipCount;

    /**
     * @var int
     */
    public $bandwidth;

    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'ipCount'   => 'IpCount',
        'bandwidth' => 'Bandwidth',
        'zone'      => 'Zone',
    ];

    public function validate()
    {
        Model::validateRequired('ipCount', $this->ipCount, true);
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('zone', $this->zone, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipCount) {
            $res['IpCount'] = $this->ipCount;
        }
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidthPackage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpCount'])) {
            $model->ipCount = $map['IpCount'];
        }
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
