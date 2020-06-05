<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonsResponseBody\standardComponents\addonName;

class standardComponents extends Model {
    protected $_name = [
        'addonName' => 'addon_name',
    ];
    public function validate() {
        Model::validateRequired('addonName', $this->addonName, true);
    }
    public function toMap() {
        $res = [];
        $res['addon_name'] = null !== $this->addonName ? $this->addonName->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return standardComponents
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['addon_name'])){
            $model->addonName = addonName::fromMap($map['addon_name']);
        }
        return $model;
    }
    /**
     * @description addon_name
     * @var addonName
     */
    public $addonName;

}
