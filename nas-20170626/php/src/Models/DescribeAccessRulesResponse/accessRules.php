<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessRulesResponse\accessRules\accessRule;

class accessRules extends Model {
    protected $_name = [
        'accessRule' => 'AccessRule',
    ];
    public function validate() {
        Model::validateRequired('accessRule', $this->accessRule, true);
    }
    public function toMap() {
        $res = [];
        $res['AccessRule'] = [];
        if(null !== $this->accessRule && is_array($this->accessRule)){
            $n = 0;
            foreach($this->accessRule as $item){
                $res['AccessRule'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return accessRules
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AccessRule'])){
            if(!empty($map['AccessRule'])){
                $model->accessRule = [];
                $n = 0;
                foreach($map['AccessRule'] as $item) {
                    $model->accessRule[$n++] = null !== $item ? accessRule::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description AccessRule
     * @var array
     */
    public $accessRule;

}
