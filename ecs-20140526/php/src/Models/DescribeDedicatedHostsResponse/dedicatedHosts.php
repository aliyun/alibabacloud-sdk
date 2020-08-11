<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponse\dedicatedHosts\dedicatedHost;
use AlibabaCloud\Tea\Model;

class dedicatedHosts extends Model
{
    /**
     * @var array
     */
    public $dedicatedHost;
    protected $_name = [
        'dedicatedHost' => 'DedicatedHost',
    ];

    public function validate()
    {
        Model::validateRequired('dedicatedHost', $this->dedicatedHost, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHost) {
            $res['DedicatedHost'] = [];
            if (null !== $this->dedicatedHost && \is_array($this->dedicatedHost)) {
                $n = 0;
                foreach ($this->dedicatedHost as $item) {
                    $res['DedicatedHost'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHost'])) {
            if (!empty($map['DedicatedHost'])) {
                $model->dedicatedHost = [];
                $n                    = 0;
                foreach ($map['DedicatedHost'] as $item) {
                    $model->dedicatedHost[$n++] = null !== $item ? dedicatedHost::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
