// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeTagValueListResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("TagValues")]
        [Validation(Required=true)]
        public DescribeTagValueListResponseTagValues TagValues { get; set; }
        public class DescribeTagValueListResponseTagValues : TeaModel {
            [NameInMap("TagValue")]
            [Validation(Required=true)]
            public List<string> TagValue { get; set; }
        };

    }

}
