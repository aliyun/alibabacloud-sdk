<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\CS\AttachInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class listSuffix extends Model
{
    /**
     * @description list
     *
     * @var array
     */
    public $list;
    protected $_name = [
        'list' => 'list',
    ];

    public function validate()
    {
        Model::validateRequired('list', $this->list, true);
    }

    public function toMap()
    {
        $res         = [];
        $res['list'] = [];
        if (null !== $this->list && \is_array($this->list)) {
            $n = 0;
            foreach ($this->list as $item) {
                $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['list'])) {
            if (!empty($map['list'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? AttachInstancesResponseBody\listSuffix\listSuffix::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
