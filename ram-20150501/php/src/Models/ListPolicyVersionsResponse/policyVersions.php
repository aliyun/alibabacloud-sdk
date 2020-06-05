<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models\ListPolicyVersionsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Ram\V20150501\Models\ListPolicyVersionsResponse\policyVersions\policyVersion;

class policyVersions extends Model {
    protected $_name = [
        'policyVersion' => 'PolicyVersion',
    ];
    public function validate() {
        Model::validateRequired('policyVersion', $this->policyVersion, true);
    }
    public function toMap() {
        $res = [];
        $res['PolicyVersion'] = [];
        if(null !== $this->policyVersion && is_array($this->policyVersion)){
            $n = 0;
            foreach($this->policyVersion as $item){
                $res['PolicyVersion'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return policyVersions
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['PolicyVersion'])){
            if(!empty($map['PolicyVersion'])){
                $model->policyVersion = [];
                $n = 0;
                foreach($map['PolicyVersion'] as $item) {
                    $model->policyVersion[$n++] = null !== $item ? policyVersion::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description PolicyVersion
     * @var array
     */
    public $policyVersion;

}
