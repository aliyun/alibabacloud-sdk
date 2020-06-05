// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ram20150501.Models
{
    public class ListAccessKeysResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("AccessKeys")]
        [Validation(Required=true)]
        public ListAccessKeysResponseAccessKeys AccessKeys { get; set; }
        public class ListAccessKeysResponseAccessKeys : TeaModel {
            [NameInMap("AccessKey")]
            [Validation(Required=true)]
            public List<ListAccessKeysResponseAccessKeysAccessKey> AccessKey { get; set; }
            public class ListAccessKeysResponseAccessKeysAccessKey : TeaModel {
                    public string AccessKeyId { get; set; }
                    public string Status { get; set; }
                    public string CreateDate { get; set; }
            }
        };

    }

}
