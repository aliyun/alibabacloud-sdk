<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIVideoTagResultResponse\videoTagResult;

use AlibabaCloud\Tea\Model;

class category extends Model {
    protected $_name = [
        'tag' => 'Tag',
    ];
    public function validate() {
        Model::validateRequired('tag', $this->tag, true);
    }
    public function toMap() {
        $res = [];
        $res['Tag'] = $this->tag;
        return $res;
    }
    /**
     * @param array $map
     * @return category
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Tag'])){
            $model->tag = $map['Tag'];
        }
        return $model;
    }
    /**
     * @description tag
     * @var string
     */
    public $tag;

}
