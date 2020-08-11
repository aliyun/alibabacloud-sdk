// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class DescribeServerRelatedGlobalAccelerationInstancesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("GlobalAccelerationInstances")]
        [Validation(Required=true)]
        public DescribeServerRelatedGlobalAccelerationInstancesResponseGlobalAccelerationInstances GlobalAccelerationInstances { get; set; }
        public class DescribeServerRelatedGlobalAccelerationInstancesResponseGlobalAccelerationInstances : TeaModel {
            [NameInMap("GlobalAccelerationInstance")]
            [Validation(Required=true)]
            public List<DescribeServerRelatedGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstance> GlobalAccelerationInstance { get; set; }
            public class DescribeServerRelatedGlobalAccelerationInstancesResponseGlobalAccelerationInstancesGlobalAccelerationInstance : TeaModel {
                    public string RegionId { get; set; }
                    public string GlobalAccelerationInstanceId { get; set; }
                    public string IpAddress { get; set; }
                    public string ServerIpAddress { get; set; }
            }
        };

    }

}
