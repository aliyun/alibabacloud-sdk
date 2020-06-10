<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\audioResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\imageResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\textResult;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAuditResultResponse\mediaAuditResult\videoResult;
use AlibabaCloud\Tea\Model;

class mediaAuditResult extends Model
{
    /**
     * @description abnormalContent
     *
     * @var string
     */
    public $abnormalModules;

    /**
     * @description label
     *
     * @var string
     */
    public $label;

    /**
     * @description suggestion
     *
     * @var string
     */
    public $suggestion;

    /**
     * @description audioResult
     *
     * @var array
     */
    public $audioResult;

    /**
     * @description imageResult
     *
     * @var array
     */
    public $imageResult;

    /**
     * @description textResult
     *
     * @var array
     */
    public $textResult;

    /**
     * @description videoResult
     *
     * @var videoResult
     */
    public $videoResult;
    protected $_name = [
        'abnormalModules' => 'AbnormalModules',
        'label'           => 'Label',
        'suggestion'      => 'Suggestion',
        'audioResult'     => 'AudioResult',
        'imageResult'     => 'ImageResult',
        'textResult'      => 'TextResult',
        'videoResult'     => 'VideoResult',
    ];

    public function validate()
    {
        Model::validateRequired('abnormalModules', $this->abnormalModules, true);
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('audioResult', $this->audioResult, true);
        Model::validateRequired('imageResult', $this->imageResult, true);
        Model::validateRequired('textResult', $this->textResult, true);
        Model::validateRequired('videoResult', $this->videoResult, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalModules) {
            $res['AbnormalModules'] = $this->abnormalModules;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->audioResult) {
            $res['AudioResult'] = [];
            if (null !== $this->audioResult && \is_array($this->audioResult)) {
                $n = 0;
                foreach ($this->audioResult as $item) {
                    $res['AudioResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageResult) {
            $res['ImageResult'] = [];
            if (null !== $this->imageResult && \is_array($this->imageResult)) {
                $n = 0;
                foreach ($this->imageResult as $item) {
                    $res['ImageResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->textResult) {
            $res['TextResult'] = [];
            if (null !== $this->textResult && \is_array($this->textResult)) {
                $n = 0;
                foreach ($this->textResult as $item) {
                    $res['TextResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->videoResult) {
            $res['VideoResult'] = null !== $this->videoResult ? $this->videoResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaAuditResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalModules'])) {
            $model->abnormalModules = $map['AbnormalModules'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['AudioResult'])) {
            if (!empty($map['AudioResult'])) {
                $model->audioResult = [];
                $n                  = 0;
                foreach ($map['AudioResult'] as $item) {
                    $model->audioResult[$n++] = null !== $item ? audioResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageResult'])) {
            if (!empty($map['ImageResult'])) {
                $model->imageResult = [];
                $n                  = 0;
                foreach ($map['ImageResult'] as $item) {
                    $model->imageResult[$n++] = null !== $item ? imageResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TextResult'])) {
            if (!empty($map['TextResult'])) {
                $model->textResult = [];
                $n                 = 0;
                foreach ($map['TextResult'] as $item) {
                    $model->textResult[$n++] = null !== $item ? textResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VideoResult'])) {
            $model->videoResult = videoResult::fromMap($map['VideoResult']);
        }

        return $model;
    }
}
