<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponse\videoTagResult;

use AlibabaCloud\Tea\Model;

class person extends Model {
    protected $_name = [
        'faceUrl' => 'FaceUrl',
        'tag' => 'Tag',
        'times' => 'Times',
    ];
    public function validate() {
        Model::validateRequired('faceUrl', $this->faceUrl, true);
        Model::validateRequired('tag', $this->tag, true);
        Model::validateRequired('times', $this->times, true);
    }
    public function toMap() {
        $res = [];
        $res['FaceUrl'] = $this->faceUrl;
        $res['Tag'] = $this->tag;
        $res['Times'] = [];
        if(null !== $this->times){
            $res['Times'] = $this->times;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return person
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['FaceUrl'])){
            $model->faceUrl = $map['FaceUrl'];
        }
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
     * @description faceUrl
     * @var string
     */
    public $faceUrl;

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
