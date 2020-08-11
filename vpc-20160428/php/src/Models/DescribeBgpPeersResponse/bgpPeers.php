<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpPeersResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpPeersResponse\bgpPeers\bgpPeer;
use AlibabaCloud\Tea\Model;

class bgpPeers extends Model
{
    /**
     * @var array
     */
    public $bgpPeer;
    protected $_name = [
        'bgpPeer' => 'BgpPeer',
    ];

    public function validate()
    {
        Model::validateRequired('bgpPeer', $this->bgpPeer, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpPeer) {
            $res['BgpPeer'] = [];
            if (null !== $this->bgpPeer && \is_array($this->bgpPeer)) {
                $n = 0;
                foreach ($this->bgpPeer as $item) {
                    $res['BgpPeer'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bgpPeers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpPeer'])) {
            if (!empty($map['BgpPeer'])) {
                $model->bgpPeer = [];
                $n              = 0;
                foreach ($map['BgpPeer'] as $item) {
                    $model->bgpPeer[$n++] = null !== $item ? bgpPeer::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
