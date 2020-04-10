// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dyvmsapi20170525.Models
{
    public class DescribeRecordDataResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("OssLink")]
        [Validation(Required=true)]
        public string OssLink { get; set; }

        [NameInMap("Acid")]
        [Validation(Required=true)]
        public string Acid { get; set; }

        [NameInMap("AgentId")]
        [Validation(Required=true)]
        public string AgentId { get; set; }

    }

}
