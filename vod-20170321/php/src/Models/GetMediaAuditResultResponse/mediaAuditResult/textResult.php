<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult;

use AlibabaCloud\Tea\Model;

class textResult extends Model
{
    /**
     * @description content
     *
     * @var string
     */
    public $content;

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

    /**
     * @description type
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'content'    => 'Content',
        'label'      => 'Label',
        'scene'      => 'Scene',
        'score'      => 'Score',
        'suggestion' => 'Suggestion',
        'type'       => 'Type',
    ];

    public function validate()
    {
        Model::validateRequired('content', $this->content, true);
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('scene', $this->scene, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('type', $this->type, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
