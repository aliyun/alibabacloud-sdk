<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult\adResult\counterList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult\adResult\topList;
use AlibabaCloud\Tea\Model;

class adResult extends Model
{
    /**
     * @description averageScore
     *
     * @var string
     */
    public $averageScore;

    /**
     * @description label
     *
     * @var string
     */
    public $label;

    /**
     * @description maxScore
     *
     * @var string
     */
    public $maxScore;

    /**
     * @description suggestion
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description counterList
     *
     * @var array
     */
    public $counterList;

    /**
     * @description topList
     *
     * @var array
     */
    public $topList;
    protected $_name = [
        'averageScore' => 'AverageScore',
        'label'        => 'Label',
        'maxScore'     => 'MaxScore',
        'suggestion'   => 'Suggestion',
        'counterList'  => 'CounterList',
        'topList'      => 'TopList',
    ];

    public function validate()
    {
        Model::validateRequired('averageScore', $this->averageScore, true);
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('maxScore', $this->maxScore, true);
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('counterList', $this->counterList, true);
        Model::validateRequired('topList', $this->topList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageScore) {
            $res['AverageScore'] = $this->averageScore;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->maxScore) {
            $res['MaxScore'] = $this->maxScore;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->counterList) {
            $res['CounterList'] = [];
            if (null !== $this->counterList && \is_array($this->counterList)) {
                $n = 0;
                foreach ($this->counterList as $item) {
                    $res['CounterList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topList) {
            $res['TopList'] = [];
            if (null !== $this->topList && \is_array($this->topList)) {
                $n = 0;
                foreach ($this->topList as $item) {
                    $res['TopList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AverageScore'])) {
            $model->averageScore = $map['AverageScore'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['MaxScore'])) {
            $model->maxScore = $map['MaxScore'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['CounterList'])) {
            if (!empty($map['CounterList'])) {
                $model->counterList = [];
                $n                  = 0;
                foreach ($map['CounterList'] as $item) {
                    $model->counterList[$n++] = null !== $item ? counterList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TopList'])) {
            if (!empty($map['TopList'])) {
                $model->topList = [];
                $n              = 0;
                foreach ($map['TopList'] as $item) {
                    $model->topList[$n++] = null !== $item ? topList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
