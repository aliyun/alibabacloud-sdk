// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateIPv6TranslatorEntryRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("Ipv6TranslatorId")]
        [Validation(Required=true)]
        public string Ipv6TranslatorId { get; set; }

        [NameInMap("EntryName")]
        [Validation(Required=false)]
        public string EntryName { get; set; }

        [NameInMap("EntryDescription")]
        [Validation(Required=false)]
        public string EntryDescription { get; set; }

        [NameInMap("AllocateIpv6Port")]
        [Validation(Required=true)]
        public int? AllocateIpv6Port { get; set; }

        [NameInMap("BackendIpv4Addr")]
        [Validation(Required=true)]
        public string BackendIpv4Addr { get; set; }

        [NameInMap("BackendIpv4Port")]
        [Validation(Required=true)]
        public int? BackendIpv4Port { get; set; }

        [NameInMap("TransProtocol")]
        [Validation(Required=true)]
        public string TransProtocol { get; set; }

        [NameInMap("EntryBandwidth")]
        [Validation(Required=false)]
        public int? EntryBandwidth { get; set; }

        [NameInMap("AclStatus")]
        [Validation(Required=false)]
        public string AclStatus { get; set; }

        [NameInMap("AclType")]
        [Validation(Required=false)]
        public string AclType { get; set; }

        [NameInMap("AclId")]
        [Validation(Required=false)]
        public string AclId { get; set; }

    }

}
