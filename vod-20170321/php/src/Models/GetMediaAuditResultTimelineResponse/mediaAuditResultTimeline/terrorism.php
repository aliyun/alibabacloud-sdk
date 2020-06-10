<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultTimelineResponse\mediaAuditResultTimeline;

use AlibabaCloud\Tea\Model;

class terrorism extends Model
{
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
     * @description timestamp
     *
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'label'     => 'Label',
        'score'     => 'Score',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('timestamp', $this->timestamp, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terrorism
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
