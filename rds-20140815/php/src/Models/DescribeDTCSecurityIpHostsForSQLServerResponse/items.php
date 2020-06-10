<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDTCSecurityIpHostsForSQLServerResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDTCSecurityIpHostsForSQLServerResponse\items\whiteListGroups;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description WhiteListGroups
     *
     * @var array
     */
    public $whiteListGroups;
    protected $_name = [
        'whiteListGroups' => 'WhiteListGroups',
    ];

    public function validate()
    {
        Model::validateRequired('whiteListGroups', $this->whiteListGroups, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->whiteListGroups) {
            $res['WhiteListGroups'] = [];
            if (null !== $this->whiteListGroups && \is_array($this->whiteListGroups)) {
                $n = 0;
                foreach ($this->whiteListGroups as $item) {
                    $res['WhiteListGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WhiteListGroups'])) {
            if (!empty($map['WhiteListGroups'])) {
                $model->whiteListGroups = [];
                $n                      = 0;
                foreach ($map['WhiteListGroups'] as $item) {
                    $model->whiteListGroups[$n++] = null !== $item ? whiteListGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
