// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeSignedEventActionsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NextPageEventId")]
        [Validation(Required=true)]
        public int? NextPageEventId { get; set; }

        [NameInMap("PageRecordCount")]
        [Validation(Required=true)]
        public int? PageRecordCount { get; set; }

        [NameInMap("FromBegin")]
        [Validation(Required=true)]
        public bool? FromBegin { get; set; }

        [NameInMap("ToEnd")]
        [Validation(Required=true)]
        public bool? ToEnd { get; set; }

        [NameInMap("EventItems")]
        [Validation(Required=true)]
        public DescribeSignedEventActionsResponseEventItems EventItems { get; set; }
        public class DescribeSignedEventActionsResponseEventItems : TeaModel {
            [NameInMap("EventItems")]
            [Validation(Required=true)]
            public List<DescribeSignedEventActionsResponseEventItemsEventItems> EventItems { get; set; }
            public class DescribeSignedEventActionsResponseEventItemsEventItems : TeaModel {
                    public int? EventId { get; set; }
                    public string EventContent { get; set; }
                    public string EventSig { get; set; }
                    public string EventRcpt { get; set; }
            }
        };

    }

}
