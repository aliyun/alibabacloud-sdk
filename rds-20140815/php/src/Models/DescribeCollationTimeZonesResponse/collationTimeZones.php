<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCollationTimeZonesResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCollationTimeZonesResponse\collationTimeZones\collationTimeZone;
use AlibabaCloud\Tea\Model;

class collationTimeZones extends Model
{
    /**
     * @description CollationTimeZone
     *
     * @var array
     */
    public $collationTimeZone;
    protected $_name = [
        'collationTimeZone' => 'CollationTimeZone',
    ];

    public function validate()
    {
        Model::validateRequired('collationTimeZone', $this->collationTimeZone, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collationTimeZone) {
            $res['CollationTimeZone'] = [];
            if (null !== $this->collationTimeZone && \is_array($this->collationTimeZone)) {
                $n = 0;
                foreach ($this->collationTimeZone as $item) {
                    $res['CollationTimeZone'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return collationTimeZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollationTimeZone'])) {
            if (!empty($map['CollationTimeZone'])) {
                $model->collationTimeZone = [];
                $n                        = 0;
                foreach ($map['CollationTimeZone'] as $item) {
                    $model->collationTimeZone[$n++] = null !== $item ? collationTimeZone::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
