// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class GetAccessKeyLastUsedResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AccessKeyLastUsed")]
        [Validation(Required=true)]
        public GetAccessKeyLastUsedResponseAccessKeyLastUsed AccessKeyLastUsed { get; set; }
        public class GetAccessKeyLastUsedResponseAccessKeyLastUsed : TeaModel {
            [NameInMap("LastUsedDate")]
            [Validation(Required=true)]
            public string LastUsedDate { get; set; }
        };

    }

}
