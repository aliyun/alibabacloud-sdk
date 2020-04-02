<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanTextResponse\data\elements\results;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @description label
     *
     * @var string
     */
    public $label;
    /**
     * @description contexts
     *
     * @var array
     */
    public $contexts;
    protected $_name = [
        'label'    => 'Label',
        'contexts' => 'Contexts',
    ];

    public function validate()
    {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('contexts', $this->contexts, true);
    }

    public function toMap()
    {
        $res             = [];
        $res['Label']    = $this->label;
        $res['Contexts'] = [];
        if (null !== $this->contexts && \is_array($this->contexts)) {
            $n = 0;
            foreach ($this->contexts as $item) {
                $res['Contexts'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Contexts'])) {
            if (!empty($map['Contexts'])) {
                $model->contexts = [];
                $n               = 0;
                foreach ($map['Contexts'] as $item) {
                    $model->contexts[$n++] = null !== $item ? ScanTextResponse\data\elements\results\details\contexts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
