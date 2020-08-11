// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class ListDhcpOptionsSetsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NextToken")]
        [Validation(Required=true)]
        public string NextToken { get; set; }

        [NameInMap("DhcpOptionsSets")]
        [Validation(Required=true)]
        public List<ListDhcpOptionsSetsResponseDhcpOptionsSets> DhcpOptionsSets { get; set; }
        public class ListDhcpOptionsSetsResponseDhcpOptionsSets : TeaModel {
            [NameInMap("DhcpOptionsSetName")]
            [Validation(Required=true)]
            public string DhcpOptionsSetName { get; set; }

            [NameInMap("DhcpOptionsSetDescription")]
            [Validation(Required=true)]
            public string DhcpOptionsSetDescription { get; set; }

            [NameInMap("OwnerId")]
            [Validation(Required=true)]
            public long OwnerId { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

            [NameInMap("DhcpOptionsSetId")]
            [Validation(Required=true)]
            public string DhcpOptionsSetId { get; set; }

            [NameInMap("AssociateVpcCount")]
            [Validation(Required=true)]
            public int? AssociateVpcCount { get; set; }

            [NameInMap("DhcpOptions")]
            [Validation(Required=true)]
            public ListDhcpOptionsSetsResponseDhcpOptionsSetsDhcpOptions DhcpOptions { get; set; }
            public class ListDhcpOptionsSetsResponseDhcpOptionsSetsDhcpOptions : TeaModel {
                [NameInMap("DomainNameServers")]
                [Validation(Required=true)]
                public string DomainNameServers { get; set; }
                [NameInMap("DomainName")]
                [Validation(Required=true)]
                public string DomainName { get; set; }
            };

        }

    }

}
