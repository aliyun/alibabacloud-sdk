<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponse;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponse\tagGroupList\tagGroup;
use AlibabaCloud\Tea\Model;

class tagGroupList extends Model
{
    /**
     * @description TagGroup
     *
     * @var array
     */
    public $tagGroup;
    protected $_name = [
        'tagGroup' => 'TagGroup',
    ];

    public function validate()
    {
        Model::validateRequired('tagGroup', $this->tagGroup, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagGroup) {
            $res['TagGroup'] = [];
            if (null !== $this->tagGroup && \is_array($this->tagGroup)) {
                $n = 0;
                foreach ($this->tagGroup as $item) {
                    $res['TagGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagGroupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagGroup'])) {
            if (!empty($map['TagGroup'])) {
                $model->tagGroup = [];
                $n               = 0;
                foreach ($map['TagGroup'] as $item) {
                    $model->tagGroup[$n++] = null !== $item ? tagGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
