// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class AllocateDedicatedHostsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DedicatedHostIdSets")]
        [Validation(Required=true)]
        public AllocateDedicatedHostsResponseDedicatedHostIdSets DedicatedHostIdSets { get; set; }
        public class AllocateDedicatedHostsResponseDedicatedHostIdSets : TeaModel {
            [NameInMap("DedicatedHostId")]
            [Validation(Required=true)]
            public List<string> DedicatedHostId { get; set; }
        };

    }

}
