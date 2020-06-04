<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\imageResult;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'suggestion' => 'Suggestion',
        'label' => 'Label',
        'score' => 'Score',
        'scene' => 'Scene',
    ];
    public function validate() {
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('scene', $this->scene, true);
    }
    public function toMap() {
        $res = [];
        $res['Suggestion'] = $this->suggestion;
        $res['Label'] = $this->label;
        $res['Score'] = $this->score;
        $res['Scene'] = $this->scene;
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Suggestion'])){
            $model->suggestion = $map['Suggestion'];
        }
        if(isset($map['Label'])){
            $model->label = $map['Label'];
        }
        if(isset($map['Score'])){
            $model->score = $map['Score'];
        }
        if(isset($map['Scene'])){
            $model->scene = $map['Scene'];
        }
        return $model;
    }
    /**
     * @description suggestion
     * @var string
     */
    public $suggestion;

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
     * @description scene
     * @var string
     */
    public $scene;

}
