<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossBackupMetaListResponse;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeCrossBackupMetaListResponse\items\meta;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description Meta
     *
     * @var array
     */
    public $meta;
    protected $_name = [
        'meta' => 'Meta',
    ];

    public function validate()
    {
        Model::validateRequired('meta', $this->meta, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->meta) {
            $res['Meta'] = [];
            if (null !== $this->meta && \is_array($this->meta)) {
                $n = 0;
                foreach ($this->meta as $item) {
                    $res['Meta'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Meta'])) {
            if (!empty($map['Meta'])) {
                $model->meta = [];
                $n           = 0;
                foreach ($map['Meta'] as $item) {
                    $model->meta[$n++] = null !== $item ? meta::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
