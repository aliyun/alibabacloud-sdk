<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainConfigsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainConfigsResponse\domainConfigs\domainConfig;

class domainConfigs extends Model {
    protected $_name = [
        'domainConfig' => 'DomainConfig',
    ];
    public function validate() {
        Model::validateRequired('domainConfig', $this->domainConfig, true);
    }
    public function toMap() {
        $res = [];
        $res['DomainConfig'] = [];
        if(null !== $this->domainConfig && is_array($this->domainConfig)){
            $n = 0;
            foreach($this->domainConfig as $item){
                $res['DomainConfig'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return domainConfigs
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['DomainConfig'])){
            if(!empty($map['DomainConfig'])){
                $model->domainConfig = [];
                $n = 0;
                foreach($map['DomainConfig'] as $item) {
                    $model->domainConfig[$n++] = null !== $item ? domainConfig::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description DomainConfig
     * @var array
     */
    public $domainConfig;

}
