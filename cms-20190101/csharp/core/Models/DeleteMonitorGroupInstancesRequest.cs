// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DeleteMonitorGroupInstancesRequest : TeaModel {
        [NameInMap("GroupId")]
        [Validation(Required=true)]
        public long GroupId { get; set; }

        [NameInMap("InstanceIdList")]
        [Validation(Required=true)]
        public string InstanceIdList { get; set; }

        [NameInMap("Category")]
        [Validation(Required=true)]
        public string Category { get; set; }

    }

}
