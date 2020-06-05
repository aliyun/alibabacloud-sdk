// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ListUsersForGroupResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("IsTruncated")]
        [Validation(Required=true)]
        public bool? IsTruncated { get; set; }

        [NameInMap("Marker")]
        [Validation(Required=true)]
        public string Marker { get; set; }

        [NameInMap("Users")]
        [Validation(Required=true)]
        public ListUsersForGroupResponseUsers Users { get; set; }
        public class ListUsersForGroupResponseUsers : TeaModel {
            [NameInMap("User")]
            [Validation(Required=true)]
            public List<ListUsersForGroupResponseUsersUser> User { get; set; }
            public class ListUsersForGroupResponseUsersUser : TeaModel {
                    public string UserName { get; set; }
                    public string DisplayName { get; set; }
                    public string JoinDate { get; set; }
            }
        };

    }

}
