<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewResponse;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostAutoRenewResponse\dedicatedHostRenewAttributes\dedicatedHostRenewAttribute;
use AlibabaCloud\Tea\Model;

class dedicatedHostRenewAttributes extends Model
{
    /**
     * @var array
     */
    public $dedicatedHostRenewAttribute;
    protected $_name = [
        'dedicatedHostRenewAttribute' => 'DedicatedHostRenewAttribute',
    ];

    public function validate()
    {
        Model::validateRequired('dedicatedHostRenewAttribute', $this->dedicatedHostRenewAttribute, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHostRenewAttribute) {
            $res['DedicatedHostRenewAttribute'] = [];
            if (null !== $this->dedicatedHostRenewAttribute && \is_array($this->dedicatedHostRenewAttribute)) {
                $n = 0;
                foreach ($this->dedicatedHostRenewAttribute as $item) {
                    $res['DedicatedHostRenewAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHostRenewAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHostRenewAttribute'])) {
            if (!empty($map['DedicatedHostRenewAttribute'])) {
                $model->dedicatedHostRenewAttribute = [];
                $n                                  = 0;
                foreach ($map['DedicatedHostRenewAttribute'] as $item) {
                    $model->dedicatedHostRenewAttribute[$n++] = null !== $item ? dedicatedHostRenewAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
