// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeDomainInfoResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DomainId")]
        [Validation(Required=true)]
        public string DomainId { get; set; }

        [NameInMap("DomainName")]
        [Validation(Required=true)]
        public string DomainName { get; set; }

        [NameInMap("PunyCode")]
        [Validation(Required=true)]
        public string PunyCode { get; set; }

        [NameInMap("AliDomain")]
        [Validation(Required=true)]
        public bool? AliDomain { get; set; }

        [NameInMap("Remark")]
        [Validation(Required=true)]
        public string Remark { get; set; }

        [NameInMap("GroupId")]
        [Validation(Required=true)]
        public string GroupId { get; set; }

        [NameInMap("GroupName")]
        [Validation(Required=true)]
        public string GroupName { get; set; }

        [NameInMap("InstanceId")]
        [Validation(Required=true)]
        public string InstanceId { get; set; }

        [NameInMap("VersionCode")]
        [Validation(Required=true)]
        public string VersionCode { get; set; }

        [NameInMap("VersionName")]
        [Validation(Required=true)]
        public string VersionName { get; set; }

        [NameInMap("MinTtl")]
        [Validation(Required=true)]
        public long MinTtl { get; set; }

        [NameInMap("RecordLineTreeJson")]
        [Validation(Required=true)]
        public string RecordLineTreeJson { get; set; }

        [NameInMap("LineType")]
        [Validation(Required=true)]
        public string LineType { get; set; }

        [NameInMap("RegionLines")]
        [Validation(Required=true)]
        public bool? RegionLines { get; set; }

        [NameInMap("InBlackHole")]
        [Validation(Required=true)]
        public bool? InBlackHole { get; set; }

        [NameInMap("InClean")]
        [Validation(Required=true)]
        public bool? InClean { get; set; }

        [NameInMap("SlaveDns")]
        [Validation(Required=true)]
        public bool? SlaveDns { get; set; }

        [NameInMap("RecordLines")]
        [Validation(Required=true)]
        public DescribeDomainInfoResponseRecordLines RecordLines { get; set; }
        public class DescribeDomainInfoResponseRecordLines : TeaModel {
            [NameInMap("RecordLine")]
            [Validation(Required=true)]
            public List<DescribeDomainInfoResponseRecordLinesRecordLine> RecordLine { get; set; }
            public class DescribeDomainInfoResponseRecordLinesRecordLine : TeaModel {
                    public string LineCode { get; set; }
                    public string FatherCode { get; set; }
                    public string LineName { get; set; }
                    public string LineDisplayName { get; set; }
            }
        };

        [NameInMap("DnsServers")]
        [Validation(Required=true)]
        public DescribeDomainInfoResponseDnsServers DnsServers { get; set; }
        public class DescribeDomainInfoResponseDnsServers : TeaModel {
            [NameInMap("DnsServer")]
            [Validation(Required=true)]
            public List<string> DnsServer { get; set; }
        };

        [NameInMap("AvailableTtls")]
        [Validation(Required=true)]
        public DescribeDomainInfoResponseAvailableTtls AvailableTtls { get; set; }
        public class DescribeDomainInfoResponseAvailableTtls : TeaModel {
            [NameInMap("AvailableTtl")]
            [Validation(Required=true)]
            public List<string> AvailableTtl { get; set; }
        };

    }

}
