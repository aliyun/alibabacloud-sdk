<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\DetectLivingFaceResponse\data\elements\results;

use AlibabaCloud\Tea\Model;

class frames extends Model
{
    /**
     * @description rate
     *
     * @var float
     */
    public $rate;
    /**
     * @description url
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'rate' => 'Rate',
        'url'  => 'Url',
    ];

    public function validate()
    {
        Model::validateRequired('rate', $this->rate, true);
        Model::validateRequired('url', $this->url, true);
    }

    public function toMap()
    {
        $res         = [];
        $res['Rate'] = $this->rate;
        $res['Url']  = $this->url;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rate'])) {
            $model->rate = $map['Rate'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
