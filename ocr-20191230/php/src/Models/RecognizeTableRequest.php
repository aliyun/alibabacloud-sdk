<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Models;

use AlibabaCloud\Tea\Model;

class RecognizeTableRequest extends Model
{
    /**
     * @description imageUrl
     *
     * @var string
     */
    public $imageURL;

    /**
     * @description outputFormat
     *
     * @var string
     */
    public $outputFormat;

    /**
     * @description useFinanceModel
     *
     * @var bool
     */
    public $useFinanceModel;

    /**
     * @description assureDirection
     *
     * @var bool
     */
    public $assureDirection;

    /**
     * @description hasLine
     *
     * @var bool
     */
    public $hasLine;

    /**
     * @description skipDetection
     *
     * @var bool
     */
    public $skipDetection;
    protected $_name = [
        'imageURL'        => 'ImageURL',
        'outputFormat'    => 'OutputFormat',
        'useFinanceModel' => 'UseFinanceModel',
        'assureDirection' => 'AssureDirection',
        'hasLine'         => 'HasLine',
        'skipDetection'   => 'SkipDetection',
    ];

    public function validate()
    {
        Model::validateRequired('imageURL', $this->imageURL, true);
        Model::validateRequired('outputFormat', $this->outputFormat, true);
        Model::validateRequired('useFinanceModel', $this->useFinanceModel, true);
        Model::validateRequired('assureDirection', $this->assureDirection, true);
        Model::validateRequired('hasLine', $this->hasLine, true);
        Model::validateRequired('skipDetection', $this->skipDetection, true);
    }

    public function toMap()
    {
        $res                    = [];
        $res['ImageURL']        = $this->imageURL;
        $res['OutputFormat']    = $this->outputFormat;
        $res['UseFinanceModel'] = $this->useFinanceModel;
        $res['AssureDirection'] = $this->assureDirection;
        $res['HasLine']         = $this->hasLine;
        $res['SkipDetection']   = $this->skipDetection;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecognizeTableRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }
        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }
        if (isset($map['UseFinanceModel'])) {
            $model->useFinanceModel = $map['UseFinanceModel'];
        }
        if (isset($map['AssureDirection'])) {
            $model->assureDirection = $map['AssureDirection'];
        }
        if (isset($map['HasLine'])) {
            $model->hasLine = $map['HasLine'];
        }
        if (isset($map['SkipDetection'])) {
            $model->skipDetection = $map['SkipDetection'];
        }

        return $model;
    }
}
