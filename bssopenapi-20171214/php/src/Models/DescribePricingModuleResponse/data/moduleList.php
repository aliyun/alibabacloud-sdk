<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse\data;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\DescribePricingModuleResponse\data\moduleList\module;
use AlibabaCloud\Tea\Model;

class moduleList extends Model
{
    /**
     * @description Module
     *
     * @var array
     */
    public $module;
    protected $_name = [
        'module' => 'Module',
    ];

    public function validate()
    {
        Model::validateRequired('module', $this->module, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->module) {
            $res['Module'] = [];
            if (null !== $this->module && \is_array($this->module)) {
                $n = 0;
                foreach ($this->module as $item) {
                    $res['Module'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Module'])) {
            if (!empty($map['Module'])) {
                $model->module = [];
                $n             = 0;
                foreach ($map['Module'] as $item) {
                    $model->module[$n++] = null !== $item ? module::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
