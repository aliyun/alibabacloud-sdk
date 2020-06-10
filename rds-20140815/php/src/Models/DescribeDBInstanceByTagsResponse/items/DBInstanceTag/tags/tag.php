<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsResponse\items\DBInstanceTag\tags;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @description key
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description value
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'tagKey'   => 'TagKey',
        'tagValue' => 'TagValue',
    ];

    public function validate()
    {
        Model::validateRequired('tagKey', $this->tagKey, true);
        Model::validateRequired('tagValue', $this->tagValue, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
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
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
