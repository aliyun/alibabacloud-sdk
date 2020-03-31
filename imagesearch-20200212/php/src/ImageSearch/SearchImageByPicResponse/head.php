<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch\SearchImageByPicResponse;

use AlibabaCloud\Tea\Model;

class head extends Model
{
    public $docsReturn;
    public $docsFound;
    public $searchTime;
    protected $_required = [
        'docsReturn' => true,
        'docsFound'  => true,
        'searchTime' => true,
    ];
    protected $_name = [
        'docsReturn' => 'DocsReturn',
        'docsFound'  => 'DocsFound',
        'searchTime' => 'SearchTime',
    ];
    protected $_description = [
        'docsReturn' => 'docsReturn',
        'docsFound'  => 'docsFound',
        'searchTime' => 'searchTime',
    ];
}
