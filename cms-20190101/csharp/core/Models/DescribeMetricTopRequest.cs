// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeMetricTopRequest : TeaModel {
        [NameInMap("Period")]
        [Validation(Required=false)]
        public string Period { get; set; }

        [NameInMap("Namespace")]
        [Validation(Required=true)]
        public string Namespace { get; set; }

        [NameInMap("MetricName")]
        [Validation(Required=true)]
        public string MetricName { get; set; }

        [NameInMap("StartTime")]
        [Validation(Required=false)]
        public string StartTime { get; set; }

        [NameInMap("EndTime")]
        [Validation(Required=false)]
        public string EndTime { get; set; }

        [NameInMap("Dimensions")]
        [Validation(Required=false)]
        public string Dimensions { get; set; }

        [NameInMap("Orderby")]
        [Validation(Required=true)]
        public string Orderby { get; set; }

        [NameInMap("OrderDesc")]
        [Validation(Required=false)]
        public string OrderDesc { get; set; }

        [NameInMap("Length")]
        [Validation(Required=false)]
        public string Length { get; set; }

        [NameInMap("Express")]
        [Validation(Required=false)]
        public string Express { get; set; }

    }

}
