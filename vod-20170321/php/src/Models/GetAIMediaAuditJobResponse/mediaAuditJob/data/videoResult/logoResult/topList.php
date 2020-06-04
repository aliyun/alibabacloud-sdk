<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\logoResult;

use AlibabaCloud\Tea\Model;

class topList extends Model {
    protected $_name = [
        'label' => 'Label',
        'score' => 'Score',
        'timestamp' => 'Timestamp',
        'url' => 'Url',
    ];
    public function validate() {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('timestamp', $this->timestamp, true);
        Model::validateRequired('url', $this->url, true);
    }
    public function toMap() {
        $res = [];
        $res['Label'] = $this->label;
        $res['Score'] = $this->score;
        $res['Timestamp'] = $this->timestamp;
        $res['Url'] = $this->url;
        return $res;
    }
    /**
     * @param array $map
     * @return topList
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
        if(isset($map['Url'])){
            $model->url = $map['Url'];
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

    /**
     * @description url
     * @var string
     */
    public $url;

}
