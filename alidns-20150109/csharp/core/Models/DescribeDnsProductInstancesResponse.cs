// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeDnsProductInstancesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public long TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public long PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public long PageSize { get; set; }

        [NameInMap("DnsProducts")]
        [Validation(Required=true)]
        public DescribeDnsProductInstancesResponseDnsProducts DnsProducts { get; set; }
        public class DescribeDnsProductInstancesResponseDnsProducts : TeaModel {
            [NameInMap("DnsProduct")]
            [Validation(Required=true)]
            public List<DescribeDnsProductInstancesResponseDnsProductsDnsProduct> DnsProduct { get; set; }
            public class DescribeDnsProductInstancesResponseDnsProductsDnsProduct : TeaModel {
                    public string InstanceId { get; set; }
                    public string VersionCode { get; set; }
                    public string VersionName { get; set; }
                    public string StartTime { get; set; }
                    public string EndTime { get; set; }
                    public long StartTimestamp { get; set; }
                    public long EndTimestamp { get; set; }
                    public string Domain { get; set; }
                    public long BindCount { get; set; }
                    public long BindUsedCount { get; set; }
                    public long TTLMinValue { get; set; }
                    public long SubDomainLevel { get; set; }
                    public long DnsSLBCount { get; set; }
                    public long URLForwardCount { get; set; }
                    public long DDosDefendFlow { get; set; }
                    public long DDosDefendQuery { get; set; }
                    public long OverseaDDosDefendFlow { get; set; }
                    public string SearchEngineLines { get; set; }
                    public string ISPLines { get; set; }
                    public string ISPRegionLines { get; set; }
                    public string OverseaLine { get; set; }
                    public long MonitorNodeCount { get; set; }
                    public long MonitorFrequency { get; set; }
                    public long MonitorTaskCount { get; set; }
                    public bool? RegionLines { get; set; }
                    public bool? Gslb { get; set; }
                    public bool? InClean { get; set; }
                    public bool? InBlackHole { get; set; }
                    public long BindDomainCount { get; set; }
                    public long BindDomainUsedCount { get; set; }
                    public string DnsSecurity { get; set; }
            }
        };

    }

}
