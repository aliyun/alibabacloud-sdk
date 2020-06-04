<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponse\domains\pageData;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponse\domains\pageData\sources\source;

class sources extends Model {
    protected $_name = [
        'source' => 'Source',
    ];
    public function validate() {
        Model::validateRequired('source', $this->source, true);
    }
    public function toMap() {
        $res = [];
        $res['Source'] = [];
        if(null !== $this->source && is_array($this->source)){
            $n = 0;
            foreach($this->source as $item){
                $res['Source'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return sources
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Source'])){
            if(!empty($map['Source'])){
                $model->source = [];
                $n = 0;
                foreach($map['Source'] as $item) {
                    $model->source[$n++] = null !== $item ? source::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Source
     * @var array
     */
    public $source;

}
