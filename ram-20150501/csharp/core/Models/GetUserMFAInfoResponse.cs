// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class GetUserMFAInfoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MFADevice")]
        [Validation(Required=true)]
        public GetUserMFAInfoResponseMFADevice MFADevice { get; set; }
        public class GetUserMFAInfoResponseMFADevice : TeaModel {
            [NameInMap("SerialNumber")]
            [Validation(Required=true)]
            public string SerialNumber { get; set; }
        };

    }

}
