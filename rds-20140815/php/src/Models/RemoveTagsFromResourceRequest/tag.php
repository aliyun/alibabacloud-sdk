<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\RemoveTagsFromResourceRequest;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description description: 要解绑的第一组标签的Tagkey。需要解绑的标签，包括TagKey和TagValue，单次最多支持传入5组值。TagKey不能为空，TagValue可以为空。;
     *
     * @var string
     */
    public $key;

    /**
     * @description description: 要解绑的第一组标签的TagValue。需要解绑的标签，包括TagKey和TagValue，单次最多支持传入5组值。TagKey不能为空，TagValue可以为空。;
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'key',
        'value' => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
