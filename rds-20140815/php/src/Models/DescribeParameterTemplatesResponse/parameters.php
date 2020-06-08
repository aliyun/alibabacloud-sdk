<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterTemplatesResponse;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeParameterTemplatesResponse\parameters\templateRecord;

class parameters extends Model {
    protected $_name = [
        'templateRecord' => 'TemplateRecord',
    ];
    public function validate() {
        Model::validateRequired('templateRecord', $this->templateRecord, true);
    }
    public function toMap() {
        $res = [];
        $res['TemplateRecord'] = [];
        if(null !== $this->templateRecord && is_array($this->templateRecord)){
            $n = 0;
            foreach($this->templateRecord as $item){
                $res['TemplateRecord'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return parameters
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['TemplateRecord'])){
            if(!empty($map['TemplateRecord'])){
                $model->templateRecord = [];
                $n = 0;
                foreach($map['TemplateRecord'] as $item) {
                    $model->templateRecord[$n++] = null !== $item ? templateRecord::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description TemplateRecord
     * @var array
     */
    public $templateRecord;

}
