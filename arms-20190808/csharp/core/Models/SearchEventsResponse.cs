// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class SearchEventsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("IsTrigger")]
        [Validation(Required=true)]
        public int? IsTrigger { get; set; }

        [NameInMap("PageBean")]
        [Validation(Required=true)]
        public SearchEventsResponsePageBean PageBean { get; set; }
        public class SearchEventsResponsePageBean : TeaModel {
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("Event")]
            [Validation(Required=true)]
            public List<SearchEventsResponsePageBeanEvent> Event { get; set; }
            public class SearchEventsResponsePageBeanEvent : TeaModel {
                    public long Id { get; set; }
                    public long EventTime { get; set; }
                    public int? AlertType { get; set; }
                    public int? EventLevel { get; set; }
                    public string Message { get; set; }
                    public long AlertId { get; set; }
                    public string AlertName { get; set; }
                    public string AlertRule { get; set; }
                    public List<string> Links { get; set; }
            }
        };

    }

}
