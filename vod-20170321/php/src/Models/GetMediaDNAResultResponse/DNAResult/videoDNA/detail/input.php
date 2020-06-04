<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaDNAResultResponse\DNAResult\videoDNA\detail;

use AlibabaCloud\Tea\Model;

class input extends Model {
    protected $_name = [
        'start' => 'Start',
        'duration' => 'Duration',
    ];
    public function validate() {
        Model::validateRequired('start', $this->start, true);
        Model::validateRequired('duration', $this->duration, true);
    }
    public function toMap() {
        $res = [];
        $res['Start'] = $this->start;
        $res['Duration'] = $this->duration;
        return $res;
    }
    /**
     * @param array $map
     * @return input
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Start'])){
            $model->start = $map['Start'];
        }
        if(isset($map['Duration'])){
            $model->duration = $map['Duration'];
        }
        return $model;
    }
    /**
     * @description start
     * @var string
     */
    public $start;

    /**
     * @description duration
     * @var string
     */
    public $duration;

}
