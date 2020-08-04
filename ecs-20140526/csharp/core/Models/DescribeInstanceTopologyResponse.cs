// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeInstanceTopologyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Topologys")]
        [Validation(Required=true)]
        public DescribeInstanceTopologyResponseTopologys Topologys { get; set; }
        public class DescribeInstanceTopologyResponseTopologys : TeaModel {
            [NameInMap("Topology")]
            [Validation(Required=true)]
            public List<DescribeInstanceTopologyResponseTopologysTopology> Topology { get; set; }
            public class DescribeInstanceTopologyResponseTopologysTopology : TeaModel {
                    public string InstanceId { get; set; }
                    public string HostId { get; set; }
            }
        };

    }

}
