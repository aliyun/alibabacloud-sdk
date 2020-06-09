// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class DescribeDomainNsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AllAliDns")]
        [Validation(Required=true)]
        public bool? AllAliDns { get; set; }

        [NameInMap("IncludeAliDns")]
        [Validation(Required=true)]
        public bool? IncludeAliDns { get; set; }

        [NameInMap("DnsServers")]
        [Validation(Required=true)]
        public DescribeDomainNsResponseDnsServers DnsServers { get; set; }
        public class DescribeDomainNsResponseDnsServers : TeaModel {
            [NameInMap("DnsServer")]
            [Validation(Required=true)]
            public List<string> DnsServer { get; set; }
        };

        [NameInMap("ExpectDnsServers")]
        [Validation(Required=true)]
        public DescribeDomainNsResponseExpectDnsServers ExpectDnsServers { get; set; }
        public class DescribeDomainNsResponseExpectDnsServers : TeaModel {
            [NameInMap("ExpectDnsServer")]
            [Validation(Required=true)]
            public List<string> ExpectDnsServer { get; set; }
        };

    }

}
