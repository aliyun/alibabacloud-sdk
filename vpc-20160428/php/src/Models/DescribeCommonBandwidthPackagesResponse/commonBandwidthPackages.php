<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeCommonBandwidthPackagesResponse\commonBandwidthPackages\commonBandwidthPackage;
use AlibabaCloud\Tea\Model;

class commonBandwidthPackages extends Model
{
    /**
     * @var array
     */
    public $commonBandwidthPackage;
    protected $_name = [
        'commonBandwidthPackage' => 'CommonBandwidthPackage',
    ];

    public function validate()
    {
        Model::validateRequired('commonBandwidthPackage', $this->commonBandwidthPackage, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonBandwidthPackage) {
            $res['CommonBandwidthPackage'] = [];
            if (null !== $this->commonBandwidthPackage && \is_array($this->commonBandwidthPackage)) {
                $n = 0;
                foreach ($this->commonBandwidthPackage as $item) {
                    $res['CommonBandwidthPackage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commonBandwidthPackages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommonBandwidthPackage'])) {
            if (!empty($map['CommonBandwidthPackage'])) {
                $model->commonBandwidthPackage = [];
                $n                             = 0;
                foreach ($map['CommonBandwidthPackage'] as $item) {
                    $model->commonBandwidthPackage[$n++] = null !== $item ? commonBandwidthPackage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
