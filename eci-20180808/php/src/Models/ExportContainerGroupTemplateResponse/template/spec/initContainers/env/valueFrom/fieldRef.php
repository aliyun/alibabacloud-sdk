<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\initContainers\env\valueFrom;

use AlibabaCloud\Tea\Model;

class fieldRef extends Model
{
    /**
     * @description fieldPath
     *
     * @var string
     */
    public $fieldPath;
    protected $_name = [
        'fieldPath' => 'FieldPath',
    ];

    public function validate()
    {
        Model::validateRequired('fieldPath', $this->fieldPath, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldPath) {
            $res['FieldPath'] = $this->fieldPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fieldRef
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FieldPath'])) {
            $model->fieldPath = $map['FieldPath'];
        }

        return $model;
    }
}
