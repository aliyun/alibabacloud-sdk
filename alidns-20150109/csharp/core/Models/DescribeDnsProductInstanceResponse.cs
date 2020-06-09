// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeDnsProductInstanceResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("VersionCode")]
        [Validation(Required=true)]
        public string VersionCode { get; set; }

        [NameInMap("VersionName")]
        [Validation(Required=true)]
        public string VersionName { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=true)]
        public string StartTime { get; set; }

        [NameInMap("StartTimestamp")]
        [Validation(Required=true)]
        public long StartTimestamp { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public string EndTime { get; set; }

        [NameInMap("EndTimestamp")]
        [Validation(Required=true)]
        public long EndTimestamp { get; set; }

        [NameInMap("Domain")]
        [Validation(Required=true)]
        public string Domain { get; set; }

        [NameInMap("BindCount")]
        [Validation(Required=true)]
        public long BindCount { get; set; }

        [NameInMap("BindUsedCount")]
        [Validation(Required=true)]
        public long BindUsedCount { get; set; }

        [NameInMap("TTLMinValue")]
        [Validation(Required=true)]
        public long TTLMinValue { get; set; }

        [NameInMap("SubDomainLevel")]
        [Validation(Required=true)]
        public long SubDomainLevel { get; set; }

        [NameInMap("DnsSLBCount")]
        [Validation(Required=true)]
        public long DnsSLBCount { get; set; }

        [NameInMap("URLForwardCount")]
        [Validation(Required=true)]
        public long URLForwardCount { get; set; }

        [NameInMap("DDosDefendFlow")]
        [Validation(Required=true)]
        public long DDosDefendFlow { get; set; }

        [NameInMap("DDosDefendQuery")]
        [Validation(Required=true)]
        public long DDosDefendQuery { get; set; }

        [NameInMap("OverseaDDosDefendFlow")]
        [Validation(Required=true)]
        public long OverseaDDosDefendFlow { get; set; }

        [NameInMap("SearchEngineLines")]
        [Validation(Required=true)]
        public string SearchEngineLines { get; set; }

        [NameInMap("ISPLines")]
        [Validation(Required=true)]
        public string ISPLines { get; set; }

        [NameInMap("ISPRegionLines")]
        [Validation(Required=true)]
        public string ISPRegionLines { get; set; }

        [NameInMap("OverseaLine")]
        [Validation(Required=true)]
        public string OverseaLine { get; set; }

        [NameInMap("MonitorNodeCount")]
        [Validation(Required=true)]
        public long MonitorNodeCount { get; set; }

        [NameInMap("MonitorFrequency")]
        [Validation(Required=true)]
        public long MonitorFrequency { get; set; }

        [NameInMap("MonitorTaskCount")]
        [Validation(Required=true)]
        public long MonitorTaskCount { get; set; }

        [NameInMap("RegionLines")]
        [Validation(Required=true)]
        public bool? RegionLines { get; set; }

        [NameInMap("Gslb")]
        [Validation(Required=true)]
        public bool? Gslb { get; set; }

        [NameInMap("InClean")]
        [Validation(Required=true)]
        public bool? InClean { get; set; }

        [NameInMap("InBlackHole")]
        [Validation(Required=true)]
        public bool? InBlackHole { get; set; }

        [NameInMap("BindDomainCount")]
        [Validation(Required=true)]
        public long BindDomainCount { get; set; }

        [NameInMap("BindDomainUsedCount")]
        [Validation(Required=true)]
        public long BindDomainUsedCount { get; set; }

        [NameInMap("DnsSecurity")]
        [Validation(Required=true)]
        public string DnsSecurity { get; set; }

        [NameInMap("DnsServers")]
        [Validation(Required=true)]
        public DescribeDnsProductInstanceResponseDnsServers DnsServers { get; set; }
        public class DescribeDnsProductInstanceResponseDnsServers : TeaModel {
            [NameInMap("DnsServer")]
            [Validation(Required=true)]
            public List<string> DnsServer { get; set; }
        };

    }

}
