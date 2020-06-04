<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\liveResult\counterList;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\liveResult\topList;

class liveResult extends Model {
    protected $_name = [
        'suggestion' => 'Suggestion',
        'label' => 'Label',
        'maxScore' => 'MaxScore',
        'averageScore' => 'AverageScore',
        'counterList' => 'CounterList',
        'topList' => 'TopList',
    ];
    public function validate() {
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('maxScore', $this->maxScore, true);
        Model::validateRequired('averageScore', $this->averageScore, true);
        Model::validateRequired('counterList', $this->counterList, true);
        Model::validateRequired('topList', $this->topList, true);
    }
    public function toMap() {
        $res = [];
        $res['Suggestion'] = $this->suggestion;
        $res['Label'] = $this->label;
        $res['MaxScore'] = $this->maxScore;
        $res['AverageScore'] = $this->averageScore;
        $res['CounterList'] = [];
        if(null !== $this->counterList && is_array($this->counterList)){
            $n = 0;
            foreach($this->counterList as $item){
                $res['CounterList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['TopList'] = [];
        if(null !== $this->topList && is_array($this->topList)){
            $n = 0;
            foreach($this->topList as $item){
                $res['TopList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return liveResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Suggestion'])){
            $model->suggestion = $map['Suggestion'];
        }
        if(isset($map['Label'])){
            $model->label = $map['Label'];
        }
        if(isset($map['MaxScore'])){
            $model->maxScore = $map['MaxScore'];
        }
        if(isset($map['AverageScore'])){
            $model->averageScore = $map['AverageScore'];
        }
        if(isset($map['CounterList'])){
            if(!empty($map['CounterList'])){
                $model->counterList = [];
                $n = 0;
                foreach($map['CounterList'] as $item) {
                    $model->counterList[$n++] = null !== $item ? counterList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['TopList'])){
            if(!empty($map['TopList'])){
                $model->topList = [];
                $n = 0;
                foreach($map['TopList'] as $item) {
                    $model->topList[$n++] = null !== $item ? topList::fromMap($item) : $item;
                }
            }
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
     * @description maxScore
     * @var string
     */
    public $maxScore;

    /**
     * @description averageScore
     * @var string
     */
    public $averageScore;

    /**
     * @description counterList
     * @var array
     */
    public $counterList;

    /**
     * @description topList
     * @var array
     */
    public $topList;

}
