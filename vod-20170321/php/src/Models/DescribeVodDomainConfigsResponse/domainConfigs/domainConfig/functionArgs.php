<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainConfigsResponse\domainConfigs\domainConfig;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainConfigsResponse\domainConfigs\domainConfig\functionArgs\functionArg;

class functionArgs extends Model {
    protected $_name = [
        'functionArg' => 'FunctionArg',
    ];
    public function validate() {
        Model::validateRequired('functionArg', $this->functionArg, true);
    }
    public function toMap() {
        $res = [];
        $res['FunctionArg'] = [];
        if(null !== $this->functionArg && is_array($this->functionArg)){
            $n = 0;
            foreach($this->functionArg as $item){
                $res['FunctionArg'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return functionArgs
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FunctionArg'])){
            if(!empty($map['FunctionArg'])){
                $model->functionArg = [];
                $n = 0;
                foreach($map['FunctionArg'] as $item) {
                    $model->functionArg[$n++] = null !== $item ? functionArg::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description FunctionArg
     * @var array
     */
    public $functionArg;

}
