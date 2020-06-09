<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainsResponse\domains\domain;

class domains extends Model {
    protected $_name = [
        'domain' => 'Domain',
    ];
    public function validate() {
        Model::validateRequired('domain', $this->domain, true);
    }
    public function toMap() {
        $res = [];
        $res['Domain'] = [];
        if(null !== $this->domain && is_array($this->domain)){
            $n = 0;
            foreach($this->domain as $item){
                $res['Domain'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return domains
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Domain'])){
            if(!empty($map['Domain'])){
                $model->domain = [];
                $n = 0;
                foreach($map['Domain'] as $item) {
                    $model->domain[$n++] = null !== $item ? domain::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Domain
     * @var array
     */
    public $domain;

}
