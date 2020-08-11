<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpNetworksResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpNetworksResponse\bgpNetworks\bgpNetwork;
use AlibabaCloud\Tea\Model;

class bgpNetworks extends Model
{
    /**
     * @var array
     */
    public $bgpNetwork;
    protected $_name = [
        'bgpNetwork' => 'BgpNetwork',
    ];

    public function validate()
    {
        Model::validateRequired('bgpNetwork', $this->bgpNetwork, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpNetwork) {
            $res['BgpNetwork'] = [];
            if (null !== $this->bgpNetwork && \is_array($this->bgpNetwork)) {
                $n = 0;
                foreach ($this->bgpNetwork as $item) {
                    $res['BgpNetwork'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bgpNetworks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpNetwork'])) {
            if (!empty($map['BgpNetwork'])) {
                $model->bgpNetwork = [];
                $n                 = 0;
                foreach ($map['BgpNetwork'] as $item) {
                    $model->bgpNetwork[$n++] = null !== $item ? bgpNetwork::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
