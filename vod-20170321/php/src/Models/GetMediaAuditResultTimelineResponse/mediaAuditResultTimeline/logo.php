<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponse\mediaAuditResultTimeline;

use AlibabaCloud\Tea\Model;

class logo extends Model {
    protected $_name = [
        'label' => 'Label',
        'score' => 'Score',
        'timestamp' => 'Timestamp',
    ];
    public function validate() {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('timestamp', $this->timestamp, true);
    }
    public function toMap() {
        $res = [];
        $res['Label'] = $this->label;
        $res['Score'] = $this->score;
        $res['Timestamp'] = $this->timestamp;
        return $res;
    }
    /**
     * @param array $map
     * @return logo
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Label'])){
            $model->label = $map['Label'];
        }
        if(isset($map['Score'])){
            $model->score = $map['Score'];
        }
        if(isset($map['Timestamp'])){
            $model->timestamp = $map['Timestamp'];
        }
        return $model;
    }
    /**
     * @description label
     * @var string
     */
    public $label;

    /**
     * @description score
     * @var string
     */
    public $score;

    /**
     * @description timestamp
     * @var string
     */
    public $timestamp;

}
