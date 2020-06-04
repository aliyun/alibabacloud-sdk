<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponse\videoTagResult;

use AlibabaCloud\Tea\Model;

class keyword extends Model {
    protected $_name = [
        'tag' => 'Tag',
        'times' => 'Times',
    ];
    public function validate() {
        Model::validateRequired('tag', $this->tag, true);
        Model::validateRequired('times', $this->times, true);
    }
    public function toMap() {
        $res = [];
        $res['Tag'] = $this->tag;
        $res['Times'] = [];
        if(null !== $this->times){
            $res['Times'] = $this->times;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return keyword
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Tag'])){
            $model->tag = $map['Tag'];
        }
        if(isset($map['Times'])){
            if(!empty($map['Times'])){
                $model->times = [];
                $model->times = $map['Times'];
            }
        }
        return $model;
    }
    /**
     * @description tag
     * @var string
     */
    public $tag;

    /**
     * @description times
     * @var array
     */
    public $times;

}
