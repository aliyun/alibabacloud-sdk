// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DeleteCustomMetricRequest : TeaModel {
        [NameInMap("GroupId")]
        [Validation(Required=true)]
        public string GroupId { get; set; }

        [NameInMap("MetricName")]
        [Validation(Required=true)]
        public string MetricName { get; set; }

        [NameInMap("Md5")]
        [Validation(Required=false)]
        public string Md5 { get; set; }

        [NameInMap("UUID")]
        [Validation(Required=false)]
        public string UUID { get; set; }

    }

}
