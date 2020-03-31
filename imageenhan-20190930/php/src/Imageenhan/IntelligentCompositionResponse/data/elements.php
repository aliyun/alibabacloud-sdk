<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Imageenhan\IntelligentCompositionResponse\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    public $minX;
    public $minY;
    public $maxX;
    public $maxY;
    public $score;
    protected $_required = [
        'minX'  => true,
        'minY'  => true,
        'maxX'  => true,
        'maxY'  => true,
        'score' => true,
    ];
    protected $_name = [
        'minX'  => 'MinX',
        'minY'  => 'MinY',
        'maxX'  => 'MaxX',
        'maxY'  => 'MaxY',
        'score' => 'Score',
    ];
    protected $_description = [
        'minX'  => 'minX',
        'minY'  => 'minY',
        'maxX'  => 'maxX',
        'maxY'  => 'maxY',
        'score' => 'score',
    ];
}
