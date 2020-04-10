// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dyvmsapi20170525.Models
{
    public class StartMicroOutboundResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("CustomerInfo")]
        [Validation(Required=true)]
        public string CustomerInfo { get; set; }

        [NameInMap("InvokeCmdId")]
        [Validation(Required=true)]
        public string InvokeCmdId { get; set; }

        [NameInMap("InvokeCreateTime")]
        [Validation(Required=true)]
        public string InvokeCreateTime { get; set; }

    }

}
