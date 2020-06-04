<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\imageResult\result;

class imageResult extends Model {
    protected $_name = [
        'suggestion' => 'Suggestion',
        'label' => 'Label',
        'type' => 'Type',
        'url' => 'Url',
        'result' => 'Result',
    ];
    public function validate() {
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('url', $this->url, true);
        Model::validateRequired('result', $this->result, true);
    }
    public function toMap() {
        $res = [];
        $res['Suggestion'] = $this->suggestion;
        $res['Label'] = $this->label;
        $res['Type'] = $this->type;
        $res['Url'] = $this->url;
        $res['Result'] = [];
        if(null !== $this->result && is_array($this->result)){
            $n = 0;
            foreach($this->result as $item){
                $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return imageResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Suggestion'])){
            $model->suggestion = $map['Suggestion'];
        }
        if(isset($map['Label'])){
            $model->label = $map['Label'];
        }
        if(isset($map['Type'])){
            $model->type = $map['Type'];
        }
        if(isset($map['Url'])){
            $model->url = $map['Url'];
        }
        if(isset($map['Result'])){
            if(!empty($map['Result'])){
                $model->result = [];
                $n = 0;
                foreach($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
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
     * @description type
     * @var string
     */
    public $type;

    /**
     * @description url
     * @var string
     */
    public $url;

    /**
     * @description result
     * @var array
     */
    public $result;

}
