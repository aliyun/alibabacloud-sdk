<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\initContainers\env;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Eci\V20180808\Models\ExportContainerGroupTemplateResponse\template\spec\initContainers\env\valueFrom\fieldRef;

class valueFrom extends Model {
    protected $_name = [
        'fieldRef' => 'FieldRef',
    ];
    public function validate() {
        Model::validateRequired('fieldRef', $this->fieldRef, true);
    }
    public function toMap() {
        $res = [];
        $res['FieldRef'] = null !== $this->fieldRef ? $this->fieldRef->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return valueFrom
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FieldRef'])){
            $model->fieldRef = fieldRef::fromMap($map['FieldRef']);
        }
        return $model;
    }
    /**
     * @description fieldRef
     * @var fieldRef
     */
    public $fieldRef;

}
