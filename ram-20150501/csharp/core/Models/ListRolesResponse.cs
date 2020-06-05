// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ListRolesResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("IsTruncated")]
        [Validation(Required=true)]
        public bool? IsTruncated { get; set; }

        [NameInMap("Marker")]
        [Validation(Required=true)]
        public string Marker { get; set; }

        [NameInMap("Roles")]
        [Validation(Required=true)]
        public ListRolesResponseRoles Roles { get; set; }
        public class ListRolesResponseRoles : TeaModel {
            [NameInMap("Role")]
            [Validation(Required=true)]
            public List<ListRolesResponseRolesRole> Role { get; set; }
            public class ListRolesResponseRolesRole : TeaModel {
                    public string RoleId { get; set; }
                    public string RoleName { get; set; }
                    public string Arn { get; set; }
                    public string Description { get; set; }
                    public string CreateDate { get; set; }
                    public string UpdateDate { get; set; }
                    public long MaxSessionDuration { get; set; }
            }
        };

    }

}
