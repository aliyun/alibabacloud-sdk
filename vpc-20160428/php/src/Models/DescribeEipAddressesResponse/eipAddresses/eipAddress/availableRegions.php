<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipAddressesResponse\eipAddresses\eipAddress;

use AlibabaCloud\Tea\Model;

class availableRegions extends Model
{
    /**
     * @description AvailableRegion
     *
     * @var array
     */
    public $availableRegion;
    protected $_name = [
        'availableRegion' => 'AvailableRegion',
    ];

    public function validate()
    {
        Model::validateRequired('availableRegion', $this->availableRegion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableRegion) {
            $res['AvailableRegion'] = $this->availableRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableRegions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableRegion'])) {
            if (!empty($map['AvailableRegion'])) {
                $model->availableRegion = $map['AvailableRegion'];
            }
        }

        return $model;
    }
}
