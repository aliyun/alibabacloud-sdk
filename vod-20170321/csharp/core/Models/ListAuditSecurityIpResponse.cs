// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class ListAuditSecurityIpResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("SecurityIpList")]
        [Validation(Required=true)]
        public List<ListAuditSecurityIpResponseSecurityIpList> SecurityIpList { get; set; }
        public class ListAuditSecurityIpResponseSecurityIpList : TeaModel {
            [NameInMap("SecurityGroupName")]
            [Validation(Required=true)]
            public string SecurityGroupName { get; set; }

            [NameInMap("Ips")]
            [Validation(Required=true)]
            public string Ips { get; set; }

            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("ModificationTime")]
            [Validation(Required=true)]
            public string ModificationTime { get; set; }

        }

    }

}
