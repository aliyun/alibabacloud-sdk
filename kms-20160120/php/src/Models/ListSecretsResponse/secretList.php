<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponse;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListSecretsResponse\secretList\secret;
use AlibabaCloud\Tea\Model;

class secretList extends Model
{
    /**
     * @description Secret
     *
     * @var array
     */
    public $secret;
    protected $_name = [
        'secret' => 'Secret',
    ];

    public function validate()
    {
        Model::validateRequired('secret', $this->secret, true);
    }

    public function toMap()
    {
        $res           = [];
        $res['Secret'] = [];
        if (null !== $this->secret && \is_array($this->secret)) {
            $n = 0;
            foreach ($this->secret as $item) {
                $res['Secret'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Secret'])) {
            if (!empty($map['Secret'])) {
                $model->secret = [];
                $n             = 0;
                foreach ($map['Secret'] as $item) {
                    $model->secret[$n++] = null !== $item ? secret::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
