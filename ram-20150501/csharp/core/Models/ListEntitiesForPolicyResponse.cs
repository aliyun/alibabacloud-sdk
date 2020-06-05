// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ListEntitiesForPolicyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Groups")]
        [Validation(Required=true)]
        public ListEntitiesForPolicyResponseGroups Groups { get; set; }
        public class ListEntitiesForPolicyResponseGroups : TeaModel {
            [NameInMap("Group")]
            [Validation(Required=true)]
            public List<ListEntitiesForPolicyResponseGroupsGroup> Group { get; set; }
            public class ListEntitiesForPolicyResponseGroupsGroup : TeaModel {
                    public string GroupName { get; set; }
                    public string Comments { get; set; }
                    public string AttachDate { get; set; }
            }
        };

        [NameInMap("Users")]
        [Validation(Required=true)]
        public ListEntitiesForPolicyResponseUsers Users { get; set; }
        public class ListEntitiesForPolicyResponseUsers : TeaModel {
            [NameInMap("User")]
            [Validation(Required=true)]
            public List<ListEntitiesForPolicyResponseUsersUser> User { get; set; }
            public class ListEntitiesForPolicyResponseUsersUser : TeaModel {
                    public string UserId { get; set; }
                    public string UserName { get; set; }
                    public string DisplayName { get; set; }
                    public string AttachDate { get; set; }
            }
        };

        [NameInMap("Roles")]
        [Validation(Required=true)]
        public ListEntitiesForPolicyResponseRoles Roles { get; set; }
        public class ListEntitiesForPolicyResponseRoles : TeaModel {
            [NameInMap("Role")]
            [Validation(Required=true)]
            public List<ListEntitiesForPolicyResponseRolesRole> Role { get; set; }
            public class ListEntitiesForPolicyResponseRolesRole : TeaModel {
                    public string RoleId { get; set; }
                    public string RoleName { get; set; }
                    public string Arn { get; set; }
                    public string Description { get; set; }
                    public string AttachDate { get; set; }
            }
        };

    }

}
