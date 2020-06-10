<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\initContainers;

use AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\initContainers\env\valueFrom;
use AlibabaCloud\Tea\Model;

class env extends Model
{
    /**
     * @description key
     *
     * @var string
     */
    public $name;

    /**
     * @description value
     *
     * @var string
     */
    public $value;

    /**
     * @description valueFrom
     *
     * @var valueFrom
     */
    public $valueFrom;
    protected $_name = [
        'name'      => 'Name',
        'value'     => 'Value',
        'valueFrom' => 'ValueFrom',
    ];

    public function validate()
    {
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('value', $this->value, true);
        Model::validateRequired('valueFrom', $this->valueFrom, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueFrom) {
            $res['ValueFrom'] = null !== $this->valueFrom ? $this->valueFrom->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return env
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueFrom'])) {
            $model->valueFrom = valueFrom::fromMap($map['ValueFrom']);
        }

        return $model;
    }
}
