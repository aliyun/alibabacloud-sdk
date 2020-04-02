<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\HandPostureResponse;

use AlibabaCloud\SDK\Facebody\V20191230\Facebody\data\metaObject;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description outputs
     *
     * @var array
     */
    public $outputs;
    /**
     * @description meta
     *
     * @var data.metaObject
     */
    public $metaObject;
    protected $_name = [
        'outputs'    => 'Outputs',
        'metaObject' => 'MetaObject',
    ];

    public function validate()
    {
        Model::validateRequired('outputs', $this->outputs, true);
        Model::validateRequired('metaObject', $this->metaObject, true);
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
        $res['MetaObject'] = null !== $this->metaObject ? $this->metaObject->toMap() : null;

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
                    $model->outputs[$n++] = null !== $item ? HandPostureResponse\data\outputs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MetaObject'])) {
            $model->metaObject = data\metaObject::fromMap($map['MetaObject']);
        }

        return $model;
    }
}
