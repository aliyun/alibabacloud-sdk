<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeProductResourceTagKeyListResponse;

use AlibabaCloud\Tea\Model;

class tagKeys extends Model
{
    /**
     * @description TagKey
     *
     * @var array
     */
    public $tagKey;
    protected $_name = [
        'tagKey' => 'TagKey',
    ];

    public function validate()
    {
        Model::validateRequired('tagKey', $this->tagKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = [];
            if (null !== $this->tagKey) {
                $res['TagKey'] = $this->tagKey;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagKey'])) {
            if (!empty($map['TagKey'])) {
                $model->tagKey = [];
                $model->tagKey = $map['TagKey'];
            }
        }

        return $model;
    }
}
