<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20200212\ImageSearch;

use AlibabaCloud\Tea\Model;

class SearchImageByPicAdvanceRequest extends Model
{
    public $picContentObject;
    public $categoryId;
    public $instanceName;
    public $crop;
    public $region;
    public $num;
    public $start;
    public $filter;
    protected $_required = [
        'picContentObject' => true,
        'instanceName'     => true,
    ];
    protected $_description = [
        'picContentObject' => 'PicContentObject',
        'categoryId'       => 'categoryId',
        'instanceName'     => 'instanceName',
        'crop'             => 'crop',
        'region'           => 'region',
        'num'              => 'num',
        'start'            => 'start',
        'filter'           => 'filter',
    ];
    protected $_name = [
        'picContentObject' => 'PicContentObject',
        'categoryId'       => 'CategoryId',
        'instanceName'     => 'InstanceName',
        'crop'             => 'Crop',
        'region'           => 'Region',
        'num'              => 'Num',
        'start'            => 'Start',
        'filter'           => 'Filter',
    ];
}
