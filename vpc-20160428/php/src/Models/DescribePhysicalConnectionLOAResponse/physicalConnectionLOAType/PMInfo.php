<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponse\physicalConnectionLOAType;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribePhysicalConnectionLOAResponse\physicalConnectionLOAType\PMInfo\PMInfo;
use AlibabaCloud\Tea\Model;

class PMInfo extends Model
{
    /**
     * @var array
     */
    public $PMInfo;
    protected $_name = [
        'PMInfo' => 'PMInfo',
    ];

    public function validate()
    {
        Model::validateRequired('PMInfo', $this->PMInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->PMInfo) {
            $res['PMInfo'] = [];
            if (null !== $this->PMInfo && \is_array($this->PMInfo)) {
                $n = 0;
                foreach ($this->PMInfo as $item) {
                    $res['PMInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PMInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PMInfo'])) {
            if (!empty($map['PMInfo'])) {
                $model->PMInfo = [];
                $n             = 0;
                foreach ($map['PMInfo'] as $item) {
                    $model->PMInfo[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
