<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\terrorismResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\pornResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\adResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\liveResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponse\mediaAuditJob\data\videoResult\logoResult;

class videoResult extends Model {
    protected $_name = [
        'suggestion' => 'Suggestion',
        'label' => 'Label',
        'terrorismResult' => 'TerrorismResult',
        'pornResult' => 'PornResult',
        'adResult' => 'AdResult',
        'liveResult' => 'LiveResult',
        'logoResult' => 'LogoResult',
    ];
    public function validate() {
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('terrorismResult', $this->terrorismResult, true);
        Model::validateRequired('pornResult', $this->pornResult, true);
        Model::validateRequired('adResult', $this->adResult, true);
        Model::validateRequired('liveResult', $this->liveResult, true);
        Model::validateRequired('logoResult', $this->logoResult, true);
    }
    public function toMap() {
        $res = [];
        $res['Suggestion'] = $this->suggestion;
        $res['Label'] = $this->label;
        $res['TerrorismResult'] = null !== $this->terrorismResult ? $this->terrorismResult->toMap() : null;
        $res['PornResult'] = null !== $this->pornResult ? $this->pornResult->toMap() : null;
        $res['AdResult'] = null !== $this->adResult ? $this->adResult->toMap() : null;
        $res['LiveResult'] = null !== $this->liveResult ? $this->liveResult->toMap() : null;
        $res['LogoResult'] = null !== $this->logoResult ? $this->logoResult->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return videoResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Suggestion'])){
            $model->suggestion = $map['Suggestion'];
        }
        if(isset($map['Label'])){
            $model->label = $map['Label'];
        }
        if(isset($map['TerrorismResult'])){
            $model->terrorismResult = terrorismResult::fromMap($map['TerrorismResult']);
        }
        if(isset($map['PornResult'])){
            $model->pornResult = pornResult::fromMap($map['PornResult']);
        }
        if(isset($map['AdResult'])){
            $model->adResult = adResult::fromMap($map['AdResult']);
        }
        if(isset($map['LiveResult'])){
            $model->liveResult = liveResult::fromMap($map['LiveResult']);
        }
        if(isset($map['LogoResult'])){
            $model->logoResult = logoResult::fromMap($map['LogoResult']);
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
     * @description terrorismResult
     * @var terrorismResult
     */
    public $terrorismResult;

    /**
     * @description pornResult
     * @var pornResult
     */
    public $pornResult;

    /**
     * @description adResult
     * @var adResult
     */
    public $adResult;

    /**
     * @description liveResult
     * @var liveResult
     */
    public $liveResult;

    /**
     * @description logoResult
     * @var logoResult
     */
    public $logoResult;

}
