<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data;

use AlibabaCloud\Tea\Model;

class textResult extends Model
{
    /**
     * @description suggestion
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description label
     *
     * @var string
     */
    public $label;

    /**
     * @description score
     *
     * @var string
     */
    public $score;

    /**
     * @description scene
     *
     * @var string
     */
    public $scene;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description content
     *
     * @var string
     */
    public $content;
    protected $_name = [
        'suggestion' => 'Suggestion',
        'label'      => 'Label',
        'score'      => 'Score',
        'scene'      => 'Scene',
        'type'       => 'Type',
        'content'    => 'Content',
    ];

    public function validate()
    {
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('scene', $this->scene, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('content', $this->content, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return textResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
