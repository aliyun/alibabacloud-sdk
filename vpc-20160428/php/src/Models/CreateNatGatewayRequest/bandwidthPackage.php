<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateNatGatewayRequest;

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

    /**
     * @var string
     */
    public $ISP;
    protected $_name = [
        'ipCount'   => 'IpCount',
        'bandwidth' => 'Bandwidth',
        'zone'      => 'Zone',
        'ISP'       => 'ISP',
    ];

    public function validate()
    {
        Model::validateRequired('ipCount', $this->ipCount, true);
        Model::validateRequired('bandwidth', $this->bandwidth, true);
        Model::validateRequired('zone', $this->zone, true);
        Model::validateRequired('ISP', $this->ISP, true);
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
        if (null !== $this->ISP) {
            $res['ISP'] = $this->ISP;
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
        if (isset($map['ISP'])) {
            $model->ISP = $map['ISP'];
        }

        return $model;
    }
}
