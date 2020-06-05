// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class CreateRoleResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Role")]
        [Validation(Required=true)]
        public CreateRoleResponseRole Role { get; set; }
        public class CreateRoleResponseRole : TeaModel {
            [NameInMap("RoleId")]
            [Validation(Required=true)]
            public string RoleId { get; set; }
            [NameInMap("RoleName")]
            [Validation(Required=true)]
            public string RoleName { get; set; }
            [NameInMap("Arn")]
            [Validation(Required=true)]
            public string Arn { get; set; }
            [NameInMap("Description")]
            [Validation(Required=true)]
            public string Description { get; set; }
            [NameInMap("AssumeRolePolicyDocument")]
            [Validation(Required=true)]
            public string AssumeRolePolicyDocument { get; set; }
            [NameInMap("CreateDate")]
            [Validation(Required=true)]
            public string CreateDate { get; set; }
            [NameInMap("MaxSessionDuration")]
            [Validation(Required=true)]
            public long MaxSessionDuration { get; set; }
        };

    }

}
