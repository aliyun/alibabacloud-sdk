// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class SignEventActionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("EventId")]
        [Validation(Required=true)]
        public string EventId { get; set; }

        [NameInMap("EventRcpt")]
        [Validation(Required=true)]
        public string EventRcpt { get; set; }

    }

}
