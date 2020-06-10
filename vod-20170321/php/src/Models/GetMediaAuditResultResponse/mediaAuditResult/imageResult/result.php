<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\imageResult;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description label
     *
     * @var string
     */
    public $label;

    /**
     * @description scene
     *
     * @var string
     */
    public $scene;

    /**
     * @description score
     *
     * @var string
     */
    public $score;

    /**
     * @description suggestion
     *
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'label'      => 'Label',
        'scene'      => 'Scene',
        'score'      => 'Score',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('scene', $this->scene, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('suggestion', $this->suggestion, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
