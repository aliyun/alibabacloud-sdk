<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan;

use AlibabaCloud\Tea\Model;

class RecolorImageRequest extends Model
{
    public $url;
    public $mode;
    public $refUrl;
    public $colorCount;
    public $colorTemplate;
    protected $_required = [
        'url' => true,
    ];
    protected $_name = [
        'url'           => 'Url',
        'mode'          => 'Mode',
        'refUrl'        => 'RefUrl',
        'colorCount'    => 'ColorCount',
        'colorTemplate' => 'ColorTemplate',
    ];
    protected $_description = [
        'url'           => 'url',
        'mode'          => 'mode',
        'refUrl'        => 'refUrl',
        'colorCount'    => 'colorCount',
        'colorTemplate' => 'colorTemplate',
    ];
}
