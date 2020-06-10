<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponse\databases\database;

use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDatabasesResponse\databases\database\accounts\account;
use AlibabaCloud\Tea\Model;

class accounts extends Model
{
    /**
     * @description Account
     *
     * @var array
     */
    public $account;
    protected $_name = [
        'account' => 'Account',
    ];

    public function validate()
    {
        Model::validateRequired('account', $this->account, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = [];
            if (null !== $this->account && \is_array($this->account)) {
                $n = 0;
                foreach ($this->account as $item) {
                    $res['Account'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            if (!empty($map['Account'])) {
                $model->account = [];
                $n              = 0;
                foreach ($map['Account'] as $item) {
                    $model->account[$n++] = null !== $item ? account::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
