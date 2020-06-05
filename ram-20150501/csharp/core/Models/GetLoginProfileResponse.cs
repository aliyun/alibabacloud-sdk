// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class GetLoginProfileResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("LoginProfile")]
        [Validation(Required=true)]
        public GetLoginProfileResponseLoginProfile LoginProfile { get; set; }
        public class GetLoginProfileResponseLoginProfile : TeaModel {
            [NameInMap("UserName")]
            [Validation(Required=true)]
            public string UserName { get; set; }
            [NameInMap("PasswordResetRequired")]
            [Validation(Required=true)]
            public bool? PasswordResetRequired { get; set; }
            [NameInMap("MFABindRequired")]
            [Validation(Required=true)]
            public bool? MFABindRequired { get; set; }
            [NameInMap("CreateDate")]
            [Validation(Required=true)]
            public string CreateDate { get; set; }
        };

    }

}
