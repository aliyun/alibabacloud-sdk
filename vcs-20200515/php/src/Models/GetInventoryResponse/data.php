<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\GetInventoryResponse;

use AlibabaCloud\SDK\Vcs\V20200515\Models\GetInventoryResponse\data\resultObject;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description resultObject
     *
     * @var array
     */
    public $resultObject;
    protected $_name = [
        'resultObject' => 'ResultObject',
    ];

    public function validate()
    {
        Model::validateRequired('resultObject', $this->resultObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultObject) {
            $res['ResultObject'] = [];
            if (null !== $this->resultObject && \is_array($this->resultObject)) {
                $n = 0;
                foreach ($this->resultObject as $item) {
                    $res['ResultObject'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['ResultObject'])) {
            if (!empty($map['ResultObject'])) {
                $model->resultObject = [];
                $n                   = 0;
                foreach ($map['ResultObject'] as $item) {
                    $model->resultObject[$n++] = null !== $item ? resultObject::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
