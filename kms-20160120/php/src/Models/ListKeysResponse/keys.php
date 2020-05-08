<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListKeysResponse;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeysResponse\keys\key;
use AlibabaCloud\Tea\Model;

class keys extends Model
{
    /**
     * @description Key
     *
     * @var array
     */
    public $key;
    protected $_name = [
        'key' => 'Key',
    ];

    public function validate()
    {
        Model::validateRequired('key', $this->key, true);
    }

    public function toMap()
    {
        $res        = [];
        $res['Key'] = [];
        if (null !== $this->key && \is_array($this->key)) {
            $n = 0;
            foreach ($this->key as $item) {
                $res['Key'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            if (!empty($map['Key'])) {
                $model->key = [];
                $n          = 0;
                foreach ($map['Key'] as $item) {
                    $model->key[$n++] = null !== $item ? key::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
