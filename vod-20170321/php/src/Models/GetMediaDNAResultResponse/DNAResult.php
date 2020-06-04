<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse\DNAResult\videoDNA;

class DNAResult extends Model {
    protected $_name = [
        'videoDNA' => 'VideoDNA',
    ];
    public function validate() {
        Model::validateRequired('videoDNA', $this->videoDNA, true);
    }
    public function toMap() {
        $res = [];
        $res['VideoDNA'] = [];
        if(null !== $this->videoDNA && is_array($this->videoDNA)){
            $n = 0;
            foreach($this->videoDNA as $item){
                $res['VideoDNA'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return DNAResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['VideoDNA'])){
            if(!empty($map['VideoDNA'])){
                $model->videoDNA = [];
                $n = 0;
                foreach($map['VideoDNA'] as $item) {
                    $model->videoDNA[$n++] = null !== $item ? videoDNA::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description videoDNA
     * @var array
     */
    public $videoDNA;

}
