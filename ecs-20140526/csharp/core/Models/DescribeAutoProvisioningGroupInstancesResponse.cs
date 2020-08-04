// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeAutoProvisioningGroupInstancesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("Instances")]
        [Validation(Required=true)]
        public DescribeAutoProvisioningGroupInstancesResponseInstances Instances { get; set; }
        public class DescribeAutoProvisioningGroupInstancesResponseInstances : TeaModel {
            [NameInMap("Instance")]
            [Validation(Required=true)]
            public List<DescribeAutoProvisioningGroupInstancesResponseInstancesInstance> Instance { get; set; }
            public class DescribeAutoProvisioningGroupInstancesResponseInstancesInstance : TeaModel {
                    public string InstanceId { get; set; }
                    public string Status { get; set; }
                    public string RegionId { get; set; }
                    public string ZoneId { get; set; }
                    public int? CPU { get; set; }
                    public int? Memory { get; set; }
                    public string InstanceType { get; set; }
                    public bool? IsSpot { get; set; }
                    public bool? IoOptimized { get; set; }
                    public string NetworkType { get; set; }
                    public string OsType { get; set; }
                    public string CreationTime { get; set; }
            }
        };

    }

}
