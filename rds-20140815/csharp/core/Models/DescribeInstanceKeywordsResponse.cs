// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeInstanceKeywordsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Key")]
        [Validation(Required=true)]
        public string Key { get; set; }

        [NameInMap("Words")]
        [Validation(Required=true)]
        public DescribeInstanceKeywordsResponseWords Words { get; set; }
        public class DescribeInstanceKeywordsResponseWords : TeaModel {
            [NameInMap("word")]
            [Validation(Required=true)]
            public List<string> Word { get; set; }
        };

    }

}
