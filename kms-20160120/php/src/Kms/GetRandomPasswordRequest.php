<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Kms;

use AlibabaCloud\Tea\Model;

class GetRandomPasswordRequest extends Model
{
    /**
     * @description PasswordLength
     *
     * @var string
     */
    public $passwordLength;

    /**
     * @description ExcludeCharacters
     *
     * @var string
     */
    public $excludeCharacters;

    /**
     * @description ExcludeLowercase
     *
     * @var string
     */
    public $excludeLowercase;

    /**
     * @description ExcludeUppercase
     *
     * @var string
     */
    public $excludeUppercase;

    /**
     * @description ExcludeNumbers
     *
     * @var string
     */
    public $excludeNumbers;

    /**
     * @description ExcludePunctuation
     *
     * @var string
     */
    public $excludePunctuation;

    /**
     * @description RequireEachIncludedType
     *
     * @var string
     */
    public $requireEachIncludedType;
    protected $_name = [
        'passwordLength'          => 'PasswordLength',
        'excludeCharacters'       => 'ExcludeCharacters',
        'excludeLowercase'        => 'ExcludeLowercase',
        'excludeUppercase'        => 'ExcludeUppercase',
        'excludeNumbers'          => 'ExcludeNumbers',
        'excludePunctuation'      => 'ExcludePunctuation',
        'requireEachIncludedType' => 'RequireEachIncludedType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res                            = [];
        $res['PasswordLength']          = $this->passwordLength;
        $res['ExcludeCharacters']       = $this->excludeCharacters;
        $res['ExcludeLowercase']        = $this->excludeLowercase;
        $res['ExcludeUppercase']        = $this->excludeUppercase;
        $res['ExcludeNumbers']          = $this->excludeNumbers;
        $res['ExcludePunctuation']      = $this->excludePunctuation;
        $res['RequireEachIncludedType'] = $this->requireEachIncludedType;

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRandomPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PasswordLength'])) {
            $model->passwordLength = $map['PasswordLength'];
        }
        if (isset($map['ExcludeCharacters'])) {
            $model->excludeCharacters = $map['ExcludeCharacters'];
        }
        if (isset($map['ExcludeLowercase'])) {
            $model->excludeLowercase = $map['ExcludeLowercase'];
        }
        if (isset($map['ExcludeUppercase'])) {
            $model->excludeUppercase = $map['ExcludeUppercase'];
        }
        if (isset($map['ExcludeNumbers'])) {
            $model->excludeNumbers = $map['ExcludeNumbers'];
        }
        if (isset($map['ExcludePunctuation'])) {
            $model->excludePunctuation = $map['ExcludePunctuation'];
        }
        if (isset($map['RequireEachIncludedType'])) {
            $model->requireEachIncludedType = $map['RequireEachIncludedType'];
        }

        return $model;
    }
}
