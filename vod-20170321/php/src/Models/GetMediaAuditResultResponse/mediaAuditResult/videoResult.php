<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult\pornResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult\adResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult\logoResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult\liveResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult\terrorismResult;

class videoResult extends Model {
    protected $_name = [
        'label' => 'Label',
        'suggestion' => 'Suggestion',
        'pornResult' => 'PornResult',
        'adResult' => 'AdResult',
        'logoResult' => 'LogoResult',
        'liveResult' => 'LiveResult',
        'terrorismResult' => 'TerrorismResult',
    ];
    public function validate() {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('pornResult', $this->pornResult, true);
        Model::validateRequired('adResult', $this->adResult, true);
        Model::validateRequired('logoResult', $this->logoResult, true);
        Model::validateRequired('liveResult', $this->liveResult, true);
        Model::validateRequired('terrorismResult', $this->terrorismResult, true);
    }
    public function toMap() {
        $res = [];
        $res['Label'] = $this->label;
        $res['Suggestion'] = $this->suggestion;
        $res['PornResult'] = null !== $this->pornResult ? $this->pornResult->toMap() : null;
        $res['AdResult'] = null !== $this->adResult ? $this->adResult->toMap() : null;
        $res['LogoResult'] = null !== $this->logoResult ? $this->logoResult->toMap() : null;
        $res['LiveResult'] = null !== $this->liveResult ? $this->liveResult->toMap() : null;
        $res['TerrorismResult'] = null !== $this->terrorismResult ? $this->terrorismResult->toMap() : null;
        return $res;
    }
    /**
     * @param array $map
     * @return videoResult
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['Label'])){
            $model->label = $map['Label'];
        }
        if(isset($map['Suggestion'])){
            $model->suggestion = $map['Suggestion'];
        }
        if(isset($map['PornResult'])){
            $model->pornResult = pornResult::fromMap($map['PornResult']);
        }
        if(isset($map['AdResult'])){
            $model->adResult = adResult::fromMap($map['AdResult']);
        }
        if(isset($map['LogoResult'])){
            $model->logoResult = logoResult::fromMap($map['LogoResult']);
        }
        if(isset($map['LiveResult'])){
            $model->liveResult = liveResult::fromMap($map['LiveResult']);
        }
        if(isset($map['TerrorismResult'])){
            $model->terrorismResult = terrorismResult::fromMap($map['TerrorismResult']);
        }
        return $model;
    }
    /**
     * @description label
     * @var string
     */
    public $label;

    /**
     * @description suggestion
     * @var string
     */
    public $suggestion;

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
     * @description logoResult
     * @var logoResult
     */
    public $logoResult;

    /**
     * @description liveResult
     * @var liveResult
     */
    public $liveResult;

    /**
     * @description terrorismResult
     * @var terrorismResult
     */
    public $terrorismResult;

}
