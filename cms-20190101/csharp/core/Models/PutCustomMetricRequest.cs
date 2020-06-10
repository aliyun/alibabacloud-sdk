// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class PutCustomMetricRequest : TeaModel {
        [NameInMap("MetricList")]
        [Validation(Required=true)]
        public List<PutCustomMetricRequestMetricList> MetricList { get; set; }
        public class PutCustomMetricRequestMetricList : TeaModel {
            [NameInMap("GroupId")]
            [Validation(Required=true)]
            public string GroupId { get; set; }

            [NameInMap("MetricName")]
            [Validation(Required=false)]
            public string MetricName { get; set; }

            [NameInMap("Dimensions")]
            [Validation(Required=false)]
            public string Dimensions { get; set; }

            [NameInMap("Time")]
            [Validation(Required=false)]
            public string Time { get; set; }

            [NameInMap("Type")]
            [Validation(Required=false)]
            public string Type { get; set; }

            [NameInMap("Period")]
            [Validation(Required=false)]
            public string Period { get; set; }

        }

    }

}
