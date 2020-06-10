<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponse\bandwidthPackages\bandwidthPackage;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeBandwidthPackagesResponse\bandwidthPackages\bandwidthPackage\publicIpAddresses\publicIpAddresse;
use AlibabaCloud\Tea\Model;

class publicIpAddresses extends Model
{
    /**
     * @description PublicIpAddresse
     *
     * @var array
     */
    public $publicIpAddresse;
    protected $_name = [
        'publicIpAddresse' => 'PublicIpAddresse',
    ];

    public function validate()
    {
        Model::validateRequired('publicIpAddresse', $this->publicIpAddresse, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicIpAddresse) {
            $res['PublicIpAddresse'] = [];
            if (null !== $this->publicIpAddresse && \is_array($this->publicIpAddresse)) {
                $n = 0;
                foreach ($this->publicIpAddresse as $item) {
                    $res['PublicIpAddresse'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return publicIpAddresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublicIpAddresse'])) {
            if (!empty($map['PublicIpAddresse'])) {
                $model->publicIpAddresse = [];
                $n                       = 0;
                foreach ($map['PublicIpAddresse'] as $item) {
                    $model->publicIpAddresse[$n++] = null !== $item ? publicIpAddresse::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
