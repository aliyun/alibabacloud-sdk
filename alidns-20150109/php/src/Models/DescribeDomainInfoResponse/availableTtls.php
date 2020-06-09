<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDomainInfoResponse;

use AlibabaCloud\Tea\Model;

class availableTtls extends Model {
    protected $_name = [
        'availableTtl' => 'AvailableTtl',
    ];
    public function validate() {
        Model::validateRequired('availableTtl', $this->availableTtl, true);
    }
    public function toMap() {
        $res = [];
        $res['AvailableTtl'] = [];
        if(null !== $this->availableTtl){
            $res['AvailableTtl'] = $this->availableTtl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return availableTtls
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['AvailableTtl'])){
            if(!empty($map['AvailableTtl'])){
                $model->availableTtl = [];
                $model->availableTtl = $map['AvailableTtl'];
            }
        }
        return $model;
    }
    /**
     * @description AvailableTtl
     * @var array
     */
    public $availableTtl;

}
