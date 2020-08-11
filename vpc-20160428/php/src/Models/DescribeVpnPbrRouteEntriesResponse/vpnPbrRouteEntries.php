<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnPbrRouteEntriesResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnPbrRouteEntriesResponse\vpnPbrRouteEntries\vpnPbrRouteEntry;
use AlibabaCloud\Tea\Model;

class vpnPbrRouteEntries extends Model
{
    /**
     * @var array
     */
    public $vpnPbrRouteEntry;
    protected $_name = [
        'vpnPbrRouteEntry' => 'VpnPbrRouteEntry',
    ];

    public function validate()
    {
        Model::validateRequired('vpnPbrRouteEntry', $this->vpnPbrRouteEntry, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpnPbrRouteEntry) {
            $res['VpnPbrRouteEntry'] = [];
            if (null !== $this->vpnPbrRouteEntry && \is_array($this->vpnPbrRouteEntry)) {
                $n = 0;
                foreach ($this->vpnPbrRouteEntry as $item) {
                    $res['VpnPbrRouteEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnPbrRouteEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpnPbrRouteEntry'])) {
            if (!empty($map['VpnPbrRouteEntry'])) {
                $model->vpnPbrRouteEntry = [];
                $n                       = 0;
                foreach ($map['VpnPbrRouteEntry'] as $item) {
                    $model->vpnPbrRouteEntry[$n++] = null !== $item ? vpnPbrRouteEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
