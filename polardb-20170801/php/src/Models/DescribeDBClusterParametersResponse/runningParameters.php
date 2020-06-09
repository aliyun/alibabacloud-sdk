<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBClusterParametersResponse\runningParameters\parameter;

class runningParameters extends Model {
    protected $_name = [
        'parameter' => 'Parameter',
    ];
    public function validate() {
        Model::validateRequired('parameter', $this->parameter, true);
    }
    public function toMap() {
        $res = [];
        $res['Parameter'] = [];
        if(null !== $this->parameter && is_array($this->parameter)){
            $n = 0;
            foreach($this->parameter as $item){
                $res['Parameter'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return runningParameters
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Parameter'])){
            if(!empty($map['Parameter'])){
                $model->parameter = [];
                $n = 0;
                foreach($map['Parameter'] as $item) {
                    $model->parameter[$n++] = null !== $item ? parameter::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Parameter
     * @var array
     */
    public $parameter;

}
