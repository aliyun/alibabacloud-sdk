<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeResponse;

use AlibabaCloud\SDK\Imageenhan\V20190930\Models\ChangeImageSizeResponse\data\retainLocation;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description url
     *
     * @var string
     */
    public $url;

    /**
     * @description retainLocation
     *
     * @var retainLocation
     */
    public $retainLocation;
    protected $_name = [
        'url'            => 'Url',
        'retainLocation' => 'RetainLocation',
    ];

    public function validate()
    {
        Model::validateRequired('url', $this->url, true);
        Model::validateRequired('retainLocation', $this->retainLocation, true);
    }

    public function toMap()
    {
        $res                   = [];
        $res['Url']            = $this->url;
        $res['RetainLocation'] = null !== $this->retainLocation ? $this->retainLocation->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['RetainLocation'])) {
            $model->retainLocation = retainLocation::fromMap($map['RetainLocation']);
        }

        return $model;
    }
}
