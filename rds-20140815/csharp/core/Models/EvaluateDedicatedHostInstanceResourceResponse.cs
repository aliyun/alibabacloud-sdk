// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class EvaluateDedicatedHostInstanceResourceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DBInstanceClass")]
        [Validation(Required=true)]
        public string DBInstanceClass { get; set; }

        [NameInMap("Available")]
        [Validation(Required=true)]
        public int? Available { get; set; }

    }

}
