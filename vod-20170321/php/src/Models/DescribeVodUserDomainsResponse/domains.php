<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodUserDomainsResponse\domains\pageData;

class domains extends Model {
    protected $_name = [
        'pageData' => 'PageData',
    ];
    public function validate() {
        Model::validateRequired('pageData', $this->pageData, true);
    }
    public function toMap() {
        $res = [];
        $res['PageData'] = [];
        if(null !== $this->pageData && is_array($this->pageData)){
            $n = 0;
            foreach($this->pageData as $item){
                $res['PageData'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['PageData'])){
            if(!empty($map['PageData'])){
                $model->pageData = [];
                $n = 0;
                foreach($map['PageData'] as $item) {
                    $model->pageData[$n++] = null !== $item ? pageData::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description PageData
     * @var array
     */
    public $pageData;

}
