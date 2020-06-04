<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult;

use AlibabaCloud\Tea\Model;

class audioResult extends Model {
    protected $_name = [
        'label' => 'Label',
        'scene' => 'Scene',
        'score' => 'Score',
        'suggestion' => 'Suggestion',
    ];
    public function validate() {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('scene', $this->scene, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('suggestion', $this->suggestion, true);
    }
    public function toMap() {
        $res = [];
        $res['Label'] = $this->label;
        $res['Scene'] = $this->scene;
        $res['Score'] = $this->score;
        $res['Suggestion'] = $this->suggestion;
        return $res;
    }
    /**
     * @param array $map
     * @return audioResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Label'])){
            $model->label = $map['Label'];
        }
        if(isset($map['Scene'])){
            $model->scene = $map['Scene'];
        }
        if(isset($map['Score'])){
            $model->score = $map['Score'];
        }
        if(isset($map['Suggestion'])){
            $model->suggestion = $map['Suggestion'];
        }
        return $model;
    }
    /**
     * @description label
     * @var string
     */
    public $label;

    /**
     * @description Scene
     * @var string
     */
    public $scene;

    /**
     * @description score
     * @var string
     */
    public $score;

    /**
     * @description suggestion
     * @var string
     */
    public $suggestion;

}
