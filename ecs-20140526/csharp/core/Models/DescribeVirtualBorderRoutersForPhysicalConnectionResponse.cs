// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeVirtualBorderRoutersForPhysicalConnectionResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("VirtualBorderRouterForPhysicalConnectionSet")]
        [Validation(Required=true)]
        public DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSet VirtualBorderRouterForPhysicalConnectionSet { get; set; }
        public class DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSet : TeaModel {
            [NameInMap("VirtualBorderRouterForPhysicalConnectionType")]
            [Validation(Required=true)]
            public List<DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSetVirtualBorderRouterForPhysicalConnectionType> VirtualBorderRouterForPhysicalConnectionType { get; set; }
            public class DescribeVirtualBorderRoutersForPhysicalConnectionResponseVirtualBorderRouterForPhysicalConnectionSetVirtualBorderRouterForPhysicalConnectionType : TeaModel {
                    public string VbrId { get; set; }
                    public long VbrOwnerUid { get; set; }
                    public string CreationTime { get; set; }
                    public string ActivationTime { get; set; }
                    public string TerminationTime { get; set; }
                    public string RecoveryTime { get; set; }
                    public int? VlanId { get; set; }
                    public string CircuitCode { get; set; }
            }
        };

    }

}
