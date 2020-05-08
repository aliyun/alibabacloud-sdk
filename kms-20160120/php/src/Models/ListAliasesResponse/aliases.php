<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesResponse;

use AlibabaCloud\SDK\Kms\V20160120\Models\ListAliasesResponse\aliases\alias;
use AlibabaCloud\Tea\Model;

class aliases extends Model
{
    /**
     * @description Alias
     *
     * @var array
     */
    public $alias;
    protected $_name = [
        'alias' => 'Alias',
    ];

    public function validate()
    {
        Model::validateRequired('alias', $this->alias, true);
    }

    public function toMap()
    {
        $res          = [];
        $res['Alias'] = [];
        if (null !== $this->alias && \is_array($this->alias)) {
            $n = 0;
            foreach ($this->alias as $item) {
                $res['Alias'][$n++] = null !== $item ? $item->toMap() : $item;
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aliases
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            if (!empty($map['Alias'])) {
                $model->alias = [];
                $n            = 0;
                foreach ($map['Alias'] as $item) {
                    $model->alias[$n++] = null !== $item ? alias::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
