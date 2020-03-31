<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizePassportMRZResponse\data;

use AlibabaCloud\Tea\Model;

class regions extends Model
{
    public $name;
    public $recognitionScore;
    public $content;
    public $detectionScore;
    public $bandBoxes;
    protected $_required = [
        'name'             => true,
        'recognitionScore' => true,
        'content'          => true,
        'detectionScore'   => true,
        'bandBoxes'        => true,
    ];
    protected $_name = [
        'name'             => 'Name',
        'recognitionScore' => 'RecognitionScore',
        'content'          => 'Content',
        'detectionScore'   => 'DetectionScore',
        'bandBoxes'        => 'BandBoxes',
    ];
    protected $_description = [
        'name'             => 'name',
        'recognitionScore' => 'recognitionScore',
        'content'          => 'content',
        'detectionScore'   => 'detectionScore',
        'bandBoxes'        => 'bandBoxes',
    ];
}
