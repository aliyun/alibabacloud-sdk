// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ListUsersResponse : TeaModel {
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
        public ListUsersResponseUsers Users { get; set; }
        public class ListUsersResponseUsers : TeaModel {
            [NameInMap("User")]
            [Validation(Required=true)]
            public List<ListUsersResponseUsersUser> User { get; set; }
            public class ListUsersResponseUsersUser : TeaModel {
                    public string UserId { get; set; }
                    public string UserName { get; set; }
                    public string DisplayName { get; set; }
                    public string MobilePhone { get; set; }
                    public string Email { get; set; }
                    public string Comments { get; set; }
                    public string CreateDate { get; set; }
                    public string UpdateDate { get; set; }
            }
        };

    }

}
