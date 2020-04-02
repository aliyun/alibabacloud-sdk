<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Facebody\HandPostureResponse\data\outputs;

use AlibabaCloud\SDK\Facebody\V20191230\Facebody\results\box;
use AlibabaCloud\SDK\Facebody\V20191230\Facebody\results\hands;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description box
     *
     * @var results.box
     */
    public $box;
    /**
     * @description hands
     *
     * @var results.hands
     */
    public $hands;
    protected $_name = [
        'box'   => 'Box',
        'hands' => 'Hands',
    ];

    public function validate()
    {
        Model::validateRequired('box', $this->box, true);
        Model::validateRequired('hands', $this->hands, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['Box']   = null !== $this->box ? $this->box->toMap() : null;
        $res['Hands'] = null !== $this->hands ? $this->hands->toMap() : null;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Box'])) {
            $model->box = results\box::fromMap($map['Box']);
        }
        if (isset($map['Hands'])) {
            $model->hands = results\hands::fromMap($map['Hands']);
        }

        return $model;
    }
}
