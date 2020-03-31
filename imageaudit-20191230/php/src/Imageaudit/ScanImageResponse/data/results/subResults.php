<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageaudit\V20191230\Imageaudit\ScanImageResponse\data\results;

use AlibabaCloud\Tea\Model;

class subResults extends Model
{
    public $label;
    public $suggestion;
    public $rate;
    public $scene;
    public $frames;
    public $hintWordsInfoList;
    public $programCodeDataList;
    public $logoDataList;
    public $sfaceDataList;
    public $OCRDataList;
    protected $_required = [
        'label'               => true,
        'suggestion'          => true,
        'rate'                => true,
        'scene'               => true,
        'frames'              => true,
        'hintWordsInfoList'   => true,
        'programCodeDataList' => true,
        'logoDataList'        => true,
        'sfaceDataList'       => true,
        'OCRDataList'         => true,
    ];
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
    protected $_description = [
        'label'               => 'label',
        'suggestion'          => 'suggestion',
        'rate'                => 'rate',
        'scene'               => 'scene',
        'frames'              => 'frames',
        'hintWordsInfoList'   => 'hintWordsInfo',
        'programCodeDataList' => 'programCodeData',
        'logoDataList'        => 'logoData',
        'sfaceDataList'       => 'sfaceData',
        'OCRDataList'         => 'ocrData',
    ];
}
