// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeGtmInstanceAddressPoolResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AddrPoolId")]
        [Validation(Required=true)]
        public string AddrPoolId { get; set; }

        [NameInMap("CreateTime")]
        [Validation(Required=true)]
        public string CreateTime { get; set; }

        [NameInMap("CreateTimestamp")]
        [Validation(Required=true)]
        public long CreateTimestamp { get; set; }

        [NameInMap("UpdateTime")]
        [Validation(Required=true)]
        public string UpdateTime { get; set; }

        [NameInMap("UpdateTimestamp")]
        [Validation(Required=true)]
        public long UpdateTimestamp { get; set; }

        [NameInMap("AddrCount")]
        [Validation(Required=true)]
        public int? AddrCount { get; set; }

        [NameInMap("MinAvailableAddrNum")]
        [Validation(Required=true)]
        public int? MinAvailableAddrNum { get; set; }

        [NameInMap("MonitorConfigId")]
        [Validation(Required=true)]
        public string MonitorConfigId { get; set; }

        [NameInMap("MonitorStatus")]
        [Validation(Required=true)]
        public string MonitorStatus { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("Type")]
        [Validation(Required=true)]
        public string Type { get; set; }

        [NameInMap("Addrs")]
        [Validation(Required=true)]
        public DescribeGtmInstanceAddressPoolResponseAddrs Addrs { get; set; }
        public class DescribeGtmInstanceAddressPoolResponseAddrs : TeaModel {
            [NameInMap("Addr")]
            [Validation(Required=true)]
            public List<DescribeGtmInstanceAddressPoolResponseAddrsAddr> Addr { get; set; }
            public class DescribeGtmInstanceAddressPoolResponseAddrsAddr : TeaModel {
                    public long AddrId { get; set; }
                    public string CreateTime { get; set; }
                    public long CreateTimestamp { get; set; }
                    public string UpdateTime { get; set; }
                    public long UpdateTimestamp { get; set; }
                    public string Value { get; set; }
                    public int? LbaWeight { get; set; }
                    public string Mode { get; set; }
                    public string AlertStatus { get; set; }
            }
        };

    }

}
