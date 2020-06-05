// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class SetPasswordPolicyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PasswordPolicy")]
        [Validation(Required=true)]
        public SetPasswordPolicyResponsePasswordPolicy PasswordPolicy { get; set; }
        public class SetPasswordPolicyResponsePasswordPolicy : TeaModel {
            [NameInMap("MinimumPasswordLength")]
            [Validation(Required=true)]
            public int? MinimumPasswordLength { get; set; }
            [NameInMap("RequireLowercaseCharacters")]
            [Validation(Required=true)]
            public bool? RequireLowercaseCharacters { get; set; }
            [NameInMap("RequireUppercaseCharacters")]
            [Validation(Required=true)]
            public bool? RequireUppercaseCharacters { get; set; }
            [NameInMap("RequireNumbers")]
            [Validation(Required=true)]
            public bool? RequireNumbers { get; set; }
            [NameInMap("RequireSymbols")]
            [Validation(Required=true)]
            public bool? RequireSymbols { get; set; }
            [NameInMap("HardExpiry")]
            [Validation(Required=true)]
            public bool? HardExpiry { get; set; }
            [NameInMap("MaxPasswordAge")]
            [Validation(Required=true)]
            public int? MaxPasswordAge { get; set; }
            [NameInMap("PasswordReusePrevention")]
            [Validation(Required=true)]
            public int? PasswordReusePrevention { get; set; }
            [NameInMap("MaxLoginAttemps")]
            [Validation(Required=true)]
            public int? MaxLoginAttemps { get; set; }
        };

    }

}
