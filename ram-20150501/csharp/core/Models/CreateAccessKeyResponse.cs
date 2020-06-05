// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class CreateAccessKeyResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AccessKey")]
        [Validation(Required=true)]
        public CreateAccessKeyResponseAccessKey AccessKey { get; set; }
        public class CreateAccessKeyResponseAccessKey : TeaModel {
            [NameInMap("AccessKeyId")]
            [Validation(Required=true)]
            public string AccessKeyId { get; set; }
            [NameInMap("AccessKeySecret")]
            [Validation(Required=true)]
            public string AccessKeySecret { get; set; }
            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }
            [NameInMap("CreateDate")]
            [Validation(Required=true)]
            public string CreateDate { get; set; }
        };

    }

}
