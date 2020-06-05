<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Tea\Model;

class SetPasswordPolicyRequest extends Model {
    protected $_name = [
        'minimumPasswordLength' => 'MinimumPasswordLength',
        'requireLowercaseCharacters' => 'RequireLowercaseCharacters',
        'requireUppercaseCharacters' => 'RequireUppercaseCharacters',
        'requireNumbers' => 'RequireNumbers',
        'requireSymbols' => 'RequireSymbols',
        'hardExpiry' => 'HardExpiry',
        'maxPasswordAge' => 'MaxPasswordAge',
        'passwordReusePrevention' => 'PasswordReusePrevention',
        'maxLoginAttemps' => 'MaxLoginAttemps',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        $res['MinimumPasswordLength'] = $this->minimumPasswordLength;
        $res['RequireLowercaseCharacters'] = $this->requireLowercaseCharacters;
        $res['RequireUppercaseCharacters'] = $this->requireUppercaseCharacters;
        $res['RequireNumbers'] = $this->requireNumbers;
        $res['RequireSymbols'] = $this->requireSymbols;
        $res['HardExpiry'] = $this->hardExpiry;
        $res['MaxPasswordAge'] = $this->maxPasswordAge;
        $res['PasswordReusePrevention'] = $this->passwordReusePrevention;
        $res['MaxLoginAttemps'] = $this->maxLoginAttemps;
        return $res;
    }
    /**
     * @param array $map
     * @return SetPasswordPolicyRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['MinimumPasswordLength'])){
            $model->minimumPasswordLength = $map['MinimumPasswordLength'];
        }
        if(isset($map['RequireLowercaseCharacters'])){
            $model->requireLowercaseCharacters = $map['RequireLowercaseCharacters'];
        }
        if(isset($map['RequireUppercaseCharacters'])){
            $model->requireUppercaseCharacters = $map['RequireUppercaseCharacters'];
        }
        if(isset($map['RequireNumbers'])){
            $model->requireNumbers = $map['RequireNumbers'];
        }
        if(isset($map['RequireSymbols'])){
            $model->requireSymbols = $map['RequireSymbols'];
        }
        if(isset($map['HardExpiry'])){
            $model->hardExpiry = $map['HardExpiry'];
        }
        if(isset($map['MaxPasswordAge'])){
            $model->maxPasswordAge = $map['MaxPasswordAge'];
        }
        if(isset($map['PasswordReusePrevention'])){
            $model->passwordReusePrevention = $map['PasswordReusePrevention'];
        }
        if(isset($map['MaxLoginAttemps'])){
            $model->maxLoginAttemps = $map['MaxLoginAttemps'];
        }
        return $model;
    }
    /**
     * @description MinimumPasswordLength
     * @var integer
     */
    public $minimumPasswordLength;

    /**
     * @description RequireLowercaseCharacters
     * @var bool
     */
    public $requireLowercaseCharacters;

    /**
     * @description RequireUppercaseCharacters
     * @var bool
     */
    public $requireUppercaseCharacters;

    /**
     * @description RequireNumbers
     * @var bool
     */
    public $requireNumbers;

    /**
     * @description RequireSymbols
     * @var bool
     */
    public $requireSymbols;

    /**
     * @description HardExpiry
     * @var bool
     */
    public $hardExpiry;

    /**
     * @description MaxPasswordAge
     * @var integer
     */
    public $maxPasswordAge;

    /**
     * @description PasswordReusePrevention
     * @var integer
     */
    public $passwordReusePrevention;

    /**
     * @description MaxLoginAttemps
     * @var integer
     */
    public $maxLoginAttemps;

}
