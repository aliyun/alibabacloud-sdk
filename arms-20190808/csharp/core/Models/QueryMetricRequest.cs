// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class QueryMetricRequest : TeaModel {
        [NameInMap("IntervalInSec")]
        [Validation(Required=false)]
        public int? IntervalInSec { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=true)]
        public long StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=true)]
        public long EndTime { get; set; }

        [NameInMap("OrderBy")]
        [Validation(Required=false)]
        public string OrderBy { get; set; }

        [NameInMap("Limit")]
        [Validation(Required=false)]
        public int? Limit { get; set; }

        [NameInMap("Filters")]
        [Validation(Required=false)]
        public List<QueryMetricRequestFilters> Filters { get; set; }
        public class QueryMetricRequestFilters : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=false)]
            public string Key { get; set; }

            [NameInMap("Value")]
            [Validation(Required=false)]
            public string Value { get; set; }

        }

        [NameInMap("Dimensions")]
        [Validation(Required=false)]
        public List<string> Dimensions { get; set; }

        [NameInMap("Metric")]
        [Validation(Required=true)]
        public string Metric { get; set; }

        [NameInMap("Measures")]
        [Validation(Required=true)]
        public List<string> Measures { get; set; }

        [NameInMap("Order")]
        [Validation(Required=false)]
        public string Order { get; set; }

        [NameInMap("ProxyUserId")]
        [Validation(Required=false)]
        public string ProxyUserId { get; set; }

        [NameInMap("ConsistencyDataKey")]
        [Validation(Required=false)]
        public string ConsistencyDataKey { get; set; }

        [NameInMap("ConsistencyQueryStrategy")]
        [Validation(Required=false)]
        public string ConsistencyQueryStrategy { get; set; }

    }

}
