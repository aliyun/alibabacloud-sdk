<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Imagerecog\RecognizeImageStyleResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description styles
     *
     * @var array
     */
    public $styles;
    protected $_name = [
        'styles' => 'Styles',
    ];

    public function validate()
    {
        Model::validateRequired('styles', $this->styles, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['Styles'] = [];
        if (null !== $this->styles) {
            $res['Styles'] = $this->styles;
        }

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
        if (isset($map['Styles'])) {
            if (!empty($map['Styles'])) {
                $model->styles = [];
                $model->styles = $map['Styles'];
            }
        }

        return $model;
    }
}
