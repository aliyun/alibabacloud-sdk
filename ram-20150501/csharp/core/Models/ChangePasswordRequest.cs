// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ChangePasswordRequest : TeaModel {
        [NameInMap("OldPassword")]
        [Validation(Required=false)]
        public string OldPassword { get; set; }

        [NameInMap("NewPassword")]
        [Validation(Required=false)]
        public string NewPassword { get; set; }

    }

}
