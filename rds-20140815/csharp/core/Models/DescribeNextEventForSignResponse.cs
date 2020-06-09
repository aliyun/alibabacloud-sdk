// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeNextEventForSignResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("EventItems")]
        [Validation(Required=true)]
        public DescribeNextEventForSignResponseEventItems EventItems { get; set; }
        public class DescribeNextEventForSignResponseEventItems : TeaModel {
            [NameInMap("EventItems")]
            [Validation(Required=true)]
            public List<DescribeNextEventForSignResponseEventItemsEventItems> EventItems { get; set; }
            public class DescribeNextEventForSignResponseEventItemsEventItems : TeaModel {
                    public int? EventId { get; set; }
                    public string EventContent { get; set; }
            }
        };

    }

}
