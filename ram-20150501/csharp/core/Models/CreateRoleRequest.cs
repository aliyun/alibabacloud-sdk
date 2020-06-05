// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class CreateRoleRequest : TeaModel {
        [NameInMap("RoleName")]
        [Validation(Required=false)]
        public string RoleName { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("AssumeRolePolicyDocument")]
        [Validation(Required=false)]
        public string AssumeRolePolicyDocument { get; set; }

        [NameInMap("MaxSessionDuration")]
        [Validation(Required=false)]
        public long MaxSessionDuration { get; set; }

    }

}
