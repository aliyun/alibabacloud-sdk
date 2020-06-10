// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class PutExporterRuleRequest : TeaModel {
        [NameInMap("RuleName")]
        [Validation(Required=false)]
        public string RuleName { get; set; }

        [NameInMap("DstNames")]
        [Validation(Required=false)]
        public List<string> DstNames { get; set; }

        [NameInMap("Namespace")]
        [Validation(Required=false)]
        public string Namespace { get; set; }

        [NameInMap("MetricName")]
        [Validation(Required=false)]
        public string MetricName { get; set; }

        [NameInMap("TargetWindows")]
        [Validation(Required=false)]
        public string TargetWindows { get; set; }

        [NameInMap("Describe")]
        [Validation(Required=false)]
        public string Describe { get; set; }

    }

}
