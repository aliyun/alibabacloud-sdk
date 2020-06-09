// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class ReplaceDedicatedHostResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TaskId")]
        [Validation(Required=true)]
        public int? TaskId { get; set; }

        [NameInMap("DedicatedHostId")]
        [Validation(Required=true)]
        public string DedicatedHostId { get; set; }

    }

}
