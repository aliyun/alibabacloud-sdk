// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Kms20160120.Models
{
    public class ListKeysResponse : TeaModel {
        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=true)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=true)]
        public int? PageSize { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Keys")]
        [Validation(Required=true)]
        public ListKeysResponseKeys Keys { get; set; }
        public class ListKeysResponseKeys : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public List<ListKeysResponseKeysKey> Key { get; set; }
            public class ListKeysResponseKeysKey : TeaModel {
                    public string KeyId { get; set; }
                    public string KeyArn { get; set; }
            }
        };

    }

}
