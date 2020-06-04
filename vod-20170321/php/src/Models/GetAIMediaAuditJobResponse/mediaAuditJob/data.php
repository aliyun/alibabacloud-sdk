<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\imageResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\textResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\terrorismResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\pornResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\adResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\liveResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\logoResult;

class data extends Model {
    protected $_name = [
        'suggestion' => 'Suggestion',
        'abnormalModules' => 'AbnormalModules',
        'label' => 'Label',
        'imageResult' => 'ImageResult',
        'textResult' => 'TextResult',
        'videoResult' => 'VideoResult',
    ];
    public function validate() {
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('abnormalModules', $this->abnormalModules, true);
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('imageResult', $this->imageResult, true);
        Model::validateRequired('textResult', $this->textResult, true);
        Model::validateRequired('videoResult', $this->videoResult, true);
    }
    public function toMap() {
        $res = [];
        $res['Suggestion'] = $this->suggestion;
        $res['AbnormalModules'] = $this->abnormalModules;
        $res['Label'] = $this->label;
        $res['ImageResult'] = [];
        if(null !== $this->imageResult && is_array($this->imageResult)){
            $n = 0;
            foreach($this->imageResult as $item){
                $res['ImageResult'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['TextResult'] = [];
        if(null !== $this->textResult && is_array($this->textResult)){
            $n = 0;
            foreach($this->textResult as $item){
                $res['TextResult'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['VideoResult'] = null !== $this->videoResult ? $this->videoResult->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Suggestion'])){
            $model->suggestion = $map['Suggestion'];
        }
        if(isset($map['AbnormalModules'])){
            $model->abnormalModules = $map['AbnormalModules'];
        }
        if(isset($map['Label'])){
            $model->label = $map['Label'];
        }
        if(isset($map['ImageResult'])){
            if(!empty($map['ImageResult'])){
                $model->imageResult = [];
                $n = 0;
                foreach($map['ImageResult'] as $item) {
                    $model->imageResult[$n++] = null !== $item ? imageResult::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['TextResult'])){
            if(!empty($map['TextResult'])){
                $model->textResult = [];
                $n = 0;
                foreach($map['TextResult'] as $item) {
                    $model->textResult[$n++] = null !== $item ? textResult::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['VideoResult'])){
            $model->videoResult = videoResult::fromMap($map['VideoResult']);
        }
        return $model;
    }
    /**
     * @description suggestion
     * @var string
     */
    public $suggestion;

    /**
     * @description abnormalContent
     * @var string
     */
    public $abnormalModules;

    /**
     * @description label
     * @var string
     */
    public $label;

    /**
     * @description imageResult
     * @var array
     */
    public $imageResult;

    /**
     * @description textResult
     * @var array
     */
    public $textResult;

    /**
     * @description videoResult
     * @var videoResult
     */
    public $videoResult;

}
