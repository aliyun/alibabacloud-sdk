// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Alidns20150109.Models
{
    public class AddDomainResponse : TeaModel {
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

        [NameInMap("GroupId")]
        [Validation(Required=true)]
        public string GroupId { get; set; }

        [NameInMap("GroupName")]
        [Validation(Required=true)]
        public string GroupName { get; set; }

        [NameInMap("DnsServers")]
        [Validation(Required=true)]
        public AddDomainResponseDnsServers DnsServers { get; set; }
        public class AddDomainResponseDnsServers : TeaModel {
            [NameInMap("DnsServer")]
            [Validation(Required=true)]
            public List<string> DnsServer { get; set; }
        };

    }

}
