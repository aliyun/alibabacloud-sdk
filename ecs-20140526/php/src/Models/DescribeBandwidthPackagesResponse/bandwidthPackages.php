<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponse\bandwidthPackages\bandwidthPackage;
use AlibabaCloud\Tea\Model;

class bandwidthPackages extends Model
{
    /**
     * @var array
     */
    public $bandwidthPackage;
    protected $_name = [
        'bandwidthPackage' => 'BandwidthPackage',
    ];

    public function validate()
    {
        Model::validateRequired('bandwidthPackage', $this->bandwidthPackage, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackage) {
            $res['BandwidthPackage'] = [];
            if (null !== $this->bandwidthPackage && \is_array($this->bandwidthPackage)) {
                $n = 0;
                foreach ($this->bandwidthPackage as $item) {
                    $res['BandwidthPackage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bandwidthPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackage'])) {
            if (!empty($map['BandwidthPackage'])) {
                $model->bandwidthPackage = [];
                $n                       = 0;
                foreach ($map['BandwidthPackage'] as $item) {
                    $model->bandwidthPackage[$n++] = null !== $item ? bandwidthPackage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
