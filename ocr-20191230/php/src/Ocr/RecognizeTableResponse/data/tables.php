<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocr\V20191230\Ocr\RecognizeTableResponse\data;

use AlibabaCloud\Tea\Model;

class tables extends Model
{
    public $head;
    public $tail;
    public $tableRows;
    protected $_required = [
        'head'      => true,
        'tail'      => true,
        'tableRows' => true,
    ];
    protected $_name = [
        'head'      => 'Head',
        'tail'      => 'Tail',
        'tableRows' => 'TableRows',
    ];
    protected $_description = [
        'head'      => 'head',
        'tail'      => 'tail',
        'tableRows' => 'tableRows',
    ];
}
