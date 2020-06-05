// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class UpdateLoginProfileRequest : TeaModel {
        [NameInMap("UserName")]
        [Validation(Required=false)]
        public string UserName { get; set; }

        [NameInMap("Password")]
        [Validation(Required=false)]
        public string Password { get; set; }

        [NameInMap("PasswordResetRequired")]
        [Validation(Required=false)]
        public bool? PasswordResetRequired { get; set; }

        [NameInMap("MFABindRequired")]
        [Validation(Required=false)]
        public bool? MFABindRequired { get; set; }

    }

}
