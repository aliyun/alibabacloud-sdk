// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class GetStackRequest : TeaModel {
        [NameInMap("TraceID")]
        [Validation(Required=true)]
        public string TraceID { get; set; }

        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("RpcID")]
        [Validation(Required=false)]
        public string RpcID { get; set; }

    }

}
