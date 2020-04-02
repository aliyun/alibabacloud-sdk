<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Videorecog\GenerateVideoCoverResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description outputs
     *
     * @var array
     */
    public $outputs;
    protected $_name = [
        'outputs' => 'Outputs',
    ];

    public function validate()
    {
        Model::validateRequired('outputs', $this->outputs, true);
    }

    public function toMap()
    {
        $res            = [];
        $res['Outputs'] = [];
        if (null !== $this->outputs && \is_array($this->outputs)) {
            $n = 0;
            foreach ($this->outputs as $item) {
                $res['Outputs'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n              = 0;
                foreach ($map['Outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? GenerateVideoCoverResponse\data\outputs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
