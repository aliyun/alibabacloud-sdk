// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeSiteMonitorAttributeRequest : TeaModel {
        [NameInMap("TaskId")]
        [Validation(Required=true)]
        public string TaskId { get; set; }

        [NameInMap("IncludeAlert")]
        [Validation(Required=false)]
        public bool? IncludeAlert { get; set; }

    }

}
