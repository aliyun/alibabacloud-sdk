// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vod20170321.Models
{
    public class SetAuditSecurityIpRequest : TeaModel {
        [NameInMap("SecurityGroupName")]
        [Validation(Required=false)]
        public string SecurityGroupName { get; set; }

        [NameInMap("Ips")]
        [Validation(Required=true)]
        public string Ips { get; set; }

        [NameInMap("OperateMode")]
        [Validation(Required=false)]
        public string OperateMode { get; set; }

    }

}
