<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLogAnalysisResponse\analyses\analysis;

class analyses extends Model {
    protected $_name = [
        'analysis' => 'Analysis',
    ];
    public function validate() {
        Model::validateRequired('analysis', $this->analysis, true);
    }
    public function toMap() {
        $res = [];
        $res['Analysis'] = [];
        if(null !== $this->analysis && is_array($this->analysis)){
            $n = 0;
            foreach($this->analysis as $item){
                $res['Analysis'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return analyses
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Analysis'])){
            if(!empty($map['Analysis'])){
                $model->analysis = [];
                $n = 0;
                foreach($map['Analysis'] as $item) {
                    $model->analysis[$n++] = null !== $item ? analysis::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description Analysis
     * @var array
     */
    public $analysis;

}
