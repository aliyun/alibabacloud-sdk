// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class UpdateUserResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("User")]
        [Validation(Required=true)]
        public UpdateUserResponseUser User { get; set; }
        public class UpdateUserResponseUser : TeaModel {
            [NameInMap("UserId")]
            [Validation(Required=true)]
            public string UserId { get; set; }
            [NameInMap("UserName")]
            [Validation(Required=true)]
            public string UserName { get; set; }
            [NameInMap("DisplayName")]
            [Validation(Required=true)]
            public string DisplayName { get; set; }
            [NameInMap("MobilePhone")]
            [Validation(Required=true)]
            public string MobilePhone { get; set; }
            [NameInMap("Email")]
            [Validation(Required=true)]
            public string Email { get; set; }
            [NameInMap("Comments")]
            [Validation(Required=true)]
            public string Comments { get; set; }
            [NameInMap("CreateDate")]
            [Validation(Required=true)]
            public string CreateDate { get; set; }
            [NameInMap("UpdateDate")]
            [Validation(Required=true)]
            public string UpdateDate { get; set; }
        };

    }

}
