<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageResponse\data\results;

use AlibabaCloud\Tea\Model;

class subResults extends Model
{
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
     * @description rate
     *
     * @var float
     */
    public $rate;

    /**
     * @description scene
     *
     * @var string
     */
    public $scene;

    /**
     * @description frames
     *
     * @var array
     */
    public $frames;

    /**
     * @description hintWordsInfo
     *
     * @var array
     */
    public $hintWordsInfoList;

    /**
     * @description programCodeData
     *
     * @var array
     */
    public $programCodeDataList;

    /**
     * @description logoData
     *
     * @var array
     */
    public $logoDataList;

    /**
     * @description sfaceData
     *
     * @var array
     */
    public $sfaceDataList;

    /**
     * @description ocrData
     *
     * @var array
     */
    public $OCRDataList;
    protected $_name = [
        'label'               => 'Label',
        'suggestion'          => 'Suggestion',
        'rate'                => 'Rate',
        'scene'               => 'Scene',
        'frames'              => 'Frames',
        'hintWordsInfoList'   => 'HintWordsInfoList',
        'programCodeDataList' => 'ProgramCodeDataList',
        'logoDataList'        => 'LogoDataList',
        'sfaceDataList'       => 'SfaceDataList',
        'OCRDataList'         => 'OCRDataList',
    ];

    public function validate()
    {
        Model::validateRequired('label', $this->label, true);
        Model::validateRequired('suggestion', $this->suggestion, true);
        Model::validateRequired('rate', $this->rate, true);
        Model::validateRequired('scene', $this->scene, true);
        Model::validateRequired('frames', $this->frames, true);
        Model::validateRequired('hintWordsInfoList', $this->hintWordsInfoList, true);
        Model::validateRequired('programCodeDataList', $this->programCodeDataList, true);
        Model::validateRequired('logoDataList', $this->logoDataList, true);
        Model::validateRequired('sfaceDataList', $this->sfaceDataList, true);
        Model::validateRequired('OCRDataList', $this->OCRDataList, true);
    }

    public function toMap()
    {
        $res               = [];
        $res['Label']      = $this->label;
        $res['Suggestion'] = $this->suggestion;
        $res['Rate']       = $this->rate;
        $res['Scene']      = $this->scene;
        $res['Frames']     = [];
        if (null !== $this->frames && \is_array($this->frames)) {
            $n = 0;
            foreach ($this->frames as $item) {
                $res['Frames'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['HintWordsInfoList'] = [];
        if (null !== $this->hintWordsInfoList && \is_array($this->hintWordsInfoList)) {
            $n = 0;
            foreach ($this->hintWordsInfoList as $item) {
                $res['HintWordsInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['ProgramCodeDataList'] = [];
        if (null !== $this->programCodeDataList && \is_array($this->programCodeDataList)) {
            $n = 0;
            foreach ($this->programCodeDataList as $item) {
                $res['ProgramCodeDataList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['LogoDataList'] = [];
        if (null !== $this->logoDataList && \is_array($this->logoDataList)) {
            $n = 0;
            foreach ($this->logoDataList as $item) {
                $res['LogoDataList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['SfaceDataList'] = [];
        if (null !== $this->sfaceDataList && \is_array($this->sfaceDataList)) {
            $n = 0;
            foreach ($this->sfaceDataList as $item) {
                $res['SfaceDataList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }
        $res['OCRDataList'] = [];
        if (null !== $this->OCRDataList && \is_array($this->OCRDataList)) {
            $n = 0;
            foreach ($this->OCRDataList as $item) {
                $res['OCRDataList'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Frames'])) {
            if (!empty($map['Frames'])) {
                $model->frames = [];
                $n             = 0;
                foreach ($map['Frames'] as $item) {
                    $model->frames[$n++] = null !== $item ? ScanImageResponse\data\results\subResults\frames::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HintWordsInfoList'])) {
            if (!empty($map['HintWordsInfoList'])) {
                $model->hintWordsInfoList = [];
                $n                        = 0;
                foreach ($map['HintWordsInfoList'] as $item) {
                    $model->hintWordsInfoList[$n++] = null !== $item ? ScanImageResponse\data\results\subResults\hintWordsInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProgramCodeDataList'])) {
            if (!empty($map['ProgramCodeDataList'])) {
                $model->programCodeDataList = [];
                $n                          = 0;
                foreach ($map['ProgramCodeDataList'] as $item) {
                    $model->programCodeDataList[$n++] = null !== $item ? ScanImageResponse\data\results\subResults\programCodeDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LogoDataList'])) {
            if (!empty($map['LogoDataList'])) {
                $model->logoDataList = [];
                $n                   = 0;
                foreach ($map['LogoDataList'] as $item) {
                    $model->logoDataList[$n++] = null !== $item ? ScanImageResponse\data\results\subResults\logoDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SfaceDataList'])) {
            if (!empty($map['SfaceDataList'])) {
                $model->sfaceDataList = [];
                $n                    = 0;
                foreach ($map['SfaceDataList'] as $item) {
                    $model->sfaceDataList[$n++] = null !== $item ? ScanImageResponse\data\results\subResults\sfaceDataList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OCRDataList'])) {
            if (!empty($map['OCRDataList'])) {
                $model->OCRDataList = [];
                $n                  = 0;
                foreach ($map['OCRDataList'] as $item) {
                    $model->OCRDataList[$n++] = null !== $item ? ScanImageResponse\data\results\subResults\OCRDataList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
