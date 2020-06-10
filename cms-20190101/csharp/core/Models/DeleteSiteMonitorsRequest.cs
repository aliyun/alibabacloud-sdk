// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DeleteSiteMonitorsRequest : TeaModel {
        [NameInMap("TaskIds")]
        [Validation(Required=true)]
        public string TaskIds { get; set; }

        [NameInMap("IsDeleteAlarms")]
        [Validation(Required=false)]
        public bool? IsDeleteAlarms { get; set; }

    }

}
