// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class RunInstancesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TradePrice")]
        [Validation(Required=true)]
        public float? TradePrice { get; set; }

        [NameInMap("InstanceIdSets")]
        [Validation(Required=true)]
        public RunInstancesResponseInstanceIdSets InstanceIdSets { get; set; }
        public class RunInstancesResponseInstanceIdSets : TeaModel {
            [NameInMap("InstanceIdSet")]
            [Validation(Required=true)]
            public List<string> InstanceIdSet { get; set; }
        };

    }

}
