<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponse;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetTopicInfluenceResponse\data\influences;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description topicId
     *
     * @var int
     */
    public $topicId;

    /**
     * @description influences
     *
     * @var array
     */
    public $influences;
    protected $_name = [
        'topicId'    => 'TopicId',
        'influences' => 'Influences',
    ];

    public function validate()
    {
        Model::validateRequired('topicId', $this->topicId, true);
        Model::validateRequired('influences', $this->influences, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }
        if (null !== $this->influences) {
            $res['Influences'] = [];
            if (null !== $this->influences && \is_array($this->influences)) {
                $n = 0;
                foreach ($this->influences as $item) {
                    $res['Influences'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }
        if (isset($map['Influences'])) {
            if (!empty($map['Influences'])) {
                $model->influences = [];
                $n                 = 0;
                foreach ($map['Influences'] as $item) {
                    $model->influences[$n++] = null !== $item ? influences::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
