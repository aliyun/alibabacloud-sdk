<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetTopicRequest extends Model
{
    /**
     * @description topicId
     *
     * @var int
     */
    public $topicId;
    protected $_name = [
        'topicId' => 'TopicId',
    ];

    public function validate()
    {
        Model::validateRequired('topicId', $this->topicId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTopicRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        return $model;
    }
}
