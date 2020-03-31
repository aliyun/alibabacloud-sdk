<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTableResponse\data\tables\tableRows;

use AlibabaCloud\Tea\Model;

class tableColumns extends Model
{
    public $startColumn;
    public $startRow;
    public $endColumn;
    public $endRow;
    public $height;
    public $width;
    public $texts;
    protected $_required = [
        'startColumn' => true,
        'startRow'    => true,
        'endColumn'   => true,
        'endRow'      => true,
        'height'      => true,
        'width'       => true,
        'texts'       => true,
    ];
    protected $_name = [
        'startColumn' => 'StartColumn',
        'startRow'    => 'StartRow',
        'endColumn'   => 'EndColumn',
        'endRow'      => 'EndRow',
        'height'      => 'Height',
        'width'       => 'Width',
        'texts'       => 'Texts',
    ];
    protected $_description = [
        'startColumn' => 'startColumn',
        'startRow'    => 'startRow',
        'endColumn'   => 'endColumn',
        'endRow'      => 'endRow',
        'height'      => 'height',
        'width'       => 'width',
        'texts'       => 'texts',
    ];
}
