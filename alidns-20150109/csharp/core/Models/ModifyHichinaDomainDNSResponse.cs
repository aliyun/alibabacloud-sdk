// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class ModifyHichinaDomainDNSResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("OriginalDnsServers")]
        [Validation(Required=true)]
        public ModifyHichinaDomainDNSResponseOriginalDnsServers OriginalDnsServers { get; set; }
        public class ModifyHichinaDomainDNSResponseOriginalDnsServers : TeaModel {
            [NameInMap("DnsServer")]
            [Validation(Required=true)]
            public List<string> DnsServer { get; set; }
        };

        [NameInMap("NewDnsServers")]
        [Validation(Required=true)]
        public ModifyHichinaDomainDNSResponseNewDnsServers NewDnsServers { get; set; }
        public class ModifyHichinaDomainDNSResponseNewDnsServers : TeaModel {
            [NameInMap("DnsServer")]
            [Validation(Required=true)]
            public List<string> DnsServer { get; set; }
        };

    }

}
