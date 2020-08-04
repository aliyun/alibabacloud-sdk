// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeReservedInstancesResponse : TeaModel {
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

        [NameInMap("ReservedInstances")]
        [Validation(Required=true)]
        public DescribeReservedInstancesResponseReservedInstances ReservedInstances { get; set; }
        public class DescribeReservedInstancesResponseReservedInstances : TeaModel {
            [NameInMap("ReservedInstance")]
            [Validation(Required=true)]
            public List<DescribeReservedInstancesResponseReservedInstancesReservedInstance> ReservedInstance { get; set; }
            public class DescribeReservedInstancesResponseReservedInstancesReservedInstance : TeaModel {
                    public string ReservedInstanceId { get; set; }
                    public string RegionId { get; set; }
                    public string ZoneId { get; set; }
                    public string ReservedInstanceName { get; set; }
                    public string Description { get; set; }
                    public string InstanceType { get; set; }
                    public string Scope { get; set; }
                    public string OfferingType { get; set; }
                    public string Platform { get; set; }
                    public int? InstanceAmount { get; set; }
                    public string Status { get; set; }
                    public string CreationTime { get; set; }
                    public string ExpiredTime { get; set; }
                    public string StartTime { get; set; }
                    public string ResourceGroupId { get; set; }
                    public string AllocationStatus { get; set; }
                    public DescribeReservedInstancesResponseReservedInstancesReservedInstanceOperationLocks OperationLocks { get; set; }
                    public class DescribeReservedInstancesResponseReservedInstancesReservedInstanceOperationLocks : TeaModel {
                        [NameInMap("OperationLock")]
                        [Validation(Required=true)]
                        public List<DescribeReservedInstancesResponseReservedInstancesReservedInstanceOperationLocksOperationLock> OperationLock { get; set; }
                        public class DescribeReservedInstancesResponseReservedInstancesReservedInstanceOperationLocksOperationLock : TeaModel {
                            [NameInMap("LockReason")]
                            [Validation(Required=true)]
                            public string LockReason { get; set; }

                        }

                    }
            }
        };

    }

}
