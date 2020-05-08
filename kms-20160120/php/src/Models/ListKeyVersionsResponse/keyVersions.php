<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsResponse;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListKeyVersionsResponse\keyVersions\keyVersion;
use AlibabaCloud\Tea\Model;

class keyVersions extends Model
{
    /**
     * @description KeyVersion
     *
     * @var array
     */
    public $keyVersion;
    protected $_name = [
        'keyVersion' => 'KeyVersion',
    ];

    public function validate()
    {
        Model::validateRequired('keyVersion', $this->keyVersion, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['KeyVersion'] = [];
        if (null !== $this->keyVersion && \is_array($this->keyVersion)) {
            $n = 0;
            foreach ($this->keyVersion as $item) {
                $res['KeyVersion'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyVersion'])) {
            if (!empty($map['KeyVersion'])) {
                $model->keyVersion = [];
                $n                 = 0;
                foreach ($map['KeyVersion'] as $item) {
                    $model->keyVersion[$n++] = null !== $item ? keyVersion::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
