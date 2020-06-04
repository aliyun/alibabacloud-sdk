<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse\videoBase;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetPlayInfoResponse\videoBase\thumbnailList\thumbnail;

class thumbnailList extends Model {
    protected $_name = [
        'thumbnail' => 'Thumbnail',
    ];
    public function validate() {
        Model::validateRequired('thumbnail', $this->thumbnail, true);
    }
    public function toMap() {
        $res = [];
        $res['Thumbnail'] = [];
        if(null !== $this->thumbnail && is_array($this->thumbnail)){
            $n = 0;
            foreach($this->thumbnail as $item){
                $res['Thumbnail'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return thumbnailList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Thumbnail'])){
            if(!empty($map['Thumbnail'])){
                $model->thumbnail = [];
                $n = 0;
                foreach($map['Thumbnail'] as $item) {
                    $model->thumbnail[$n++] = null !== $item ? thumbnail::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Thumbnail
     * @var array
     */
    public $thumbnail;

}
