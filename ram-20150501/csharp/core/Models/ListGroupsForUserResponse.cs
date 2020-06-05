// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ListGroupsForUserResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Groups")]
        [Validation(Required=true)]
        public ListGroupsForUserResponseGroups Groups { get; set; }
        public class ListGroupsForUserResponseGroups : TeaModel {
            [NameInMap("Group")]
            [Validation(Required=true)]
            public List<ListGroupsForUserResponseGroupsGroup> Group { get; set; }
            public class ListGroupsForUserResponseGroupsGroup : TeaModel {
                    public string GroupName { get; set; }
                    public string Comments { get; set; }
                    public string JoinDate { get; set; }
            }
        };

    }

}
