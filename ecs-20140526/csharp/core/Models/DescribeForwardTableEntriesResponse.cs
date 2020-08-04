// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ecs20140526.Models
{
    public class DescribeForwardTableEntriesResponse : TeaModel {
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

        [NameInMap("ForwardTableEntries")]
        [Validation(Required=true)]
        public DescribeForwardTableEntriesResponseForwardTableEntries ForwardTableEntries { get; set; }
        public class DescribeForwardTableEntriesResponseForwardTableEntries : TeaModel {
            [NameInMap("ForwardTableEntry")]
            [Validation(Required=true)]
            public List<DescribeForwardTableEntriesResponseForwardTableEntriesForwardTableEntry> ForwardTableEntry { get; set; }
            public class DescribeForwardTableEntriesResponseForwardTableEntriesForwardTableEntry : TeaModel {
                    public string ForwardTableId { get; set; }
                    public string ForwardEntryId { get; set; }
                    public string ExternalIp { get; set; }
                    public string ExternalPort { get; set; }
                    public string IpProtocol { get; set; }
                    public string InternalIp { get; set; }
                    public string InternalPort { get; set; }
                    public string Status { get; set; }
            }
        };

    }

}
