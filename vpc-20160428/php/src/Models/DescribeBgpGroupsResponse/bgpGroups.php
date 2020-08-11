<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpGroupsResponse;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpGroupsResponse\bgpGroups\bgpGroup;
use AlibabaCloud\Tea\Model;

class bgpGroups extends Model
{
    /**
     * @var array
     */
    public $bgpGroup;
    protected $_name = [
        'bgpGroup' => 'BgpGroup',
    ];

    public function validate()
    {
        Model::validateRequired('bgpGroup', $this->bgpGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpGroup) {
            $res['BgpGroup'] = [];
            if (null !== $this->bgpGroup && \is_array($this->bgpGroup)) {
                $n = 0;
                foreach ($this->bgpGroup as $item) {
                    $res['BgpGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bgpGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpGroup'])) {
            if (!empty($map['BgpGroup'])) {
                $model->bgpGroup = [];
                $n               = 0;
                foreach ($map['BgpGroup'] as $item) {
                    $model->bgpGroup[$n++] = null !== $item ? bgpGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
