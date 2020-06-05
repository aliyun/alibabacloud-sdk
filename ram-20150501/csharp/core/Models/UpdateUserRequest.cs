// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class UpdateUserRequest : TeaModel {
        [NameInMap("UserName")]
        [Validation(Required=false)]
        public string UserName { get; set; }

        [NameInMap("NewUserName")]
        [Validation(Required=false)]
        public string NewUserName { get; set; }

        [NameInMap("NewDisplayName")]
        [Validation(Required=false)]
        public string NewDisplayName { get; set; }

        [NameInMap("NewMobilePhone")]
        [Validation(Required=false)]
        public string NewMobilePhone { get; set; }

        [NameInMap("NewEmail")]
        [Validation(Required=false)]
        public string NewEmail { get; set; }

        [NameInMap("NewComments")]
        [Validation(Required=false)]
        public string NewComments { get; set; }

    }

}
