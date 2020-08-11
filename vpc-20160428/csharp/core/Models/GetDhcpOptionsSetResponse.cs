// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class GetDhcpOptionsSetResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("DhcpOptionsSetName")]
        [Validation(Required=true)]
        public string DhcpOptionsSetName { get; set; }

        [NameInMap("DhcpOptionsSetDescription")]
        [Validation(Required=true)]
        public string DhcpOptionsSetDescription { get; set; }

        [NameInMap("DhcpOptionsSetId")]
        [Validation(Required=true)]
        public string DhcpOptionsSetId { get; set; }

        [NameInMap("OwnerId")]
        [Validation(Required=true)]
        public long OwnerId { get; set; }

        [NameInMap("Status")]
        [Validation(Required=true)]
        public string Status { get; set; }

        [NameInMap("AssociateVpcs")]
        [Validation(Required=true)]
        public List<GetDhcpOptionsSetResponseAssociateVpcs> AssociateVpcs { get; set; }
        public class GetDhcpOptionsSetResponseAssociateVpcs : TeaModel {
            [NameInMap("VpcId")]
            [Validation(Required=true)]
            public string VpcId { get; set; }

            [NameInMap("AssociateStatus")]
            [Validation(Required=true)]
            public string AssociateStatus { get; set; }

        }

        [NameInMap("DhcpOptions")]
        [Validation(Required=true)]
        public GetDhcpOptionsSetResponseDhcpOptions DhcpOptions { get; set; }
        public class GetDhcpOptionsSetResponseDhcpOptions : TeaModel {
            [NameInMap("DomainNameServers")]
            [Validation(Required=true)]
            public string DomainNameServers { get; set; }
            [NameInMap("DomainName")]
            [Validation(Required=true)]
            public string DomainName { get; set; }
        };

    }

}
