// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class BindMFADeviceRequest : TeaModel {
        [NameInMap("SerialNumber")]
        [Validation(Required=false)]
        public string SerialNumber { get; set; }

        [NameInMap("UserName")]
        [Validation(Required=false)]
        public string UserName { get; set; }

        [NameInMap("AuthenticationCode1")]
        [Validation(Required=false)]
        public string AuthenticationCode1 { get; set; }

        [NameInMap("AuthenticationCode2")]
        [Validation(Required=false)]
        public string AuthenticationCode2 { get; set; }

    }

}
