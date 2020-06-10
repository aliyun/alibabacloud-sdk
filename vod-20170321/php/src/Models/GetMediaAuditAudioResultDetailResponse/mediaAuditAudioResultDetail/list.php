<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditAudioResultDetailResponse\mediaAuditAudioResultDetail;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description startTime
     *
     * @var int
     */
    public $startTime;

    /**
     * @description endTime
     *
     * @var int
     */
    public $endTime;

    /**
     * @description text
     *
     * @var string
     */
    public $text;

    /**
     * @description label
     *
     * @var string
     */
    public $label;
    protected $_name = [
        'startTime' => 'StartTime',
        'endTime'   => 'EndTime',
        'text'      => 'Text',
        'label'     => 'Label',
    ];

    public function validate()
    {
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('text', $this->text, true);
        Model::validateRequired('label', $this->label, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}
