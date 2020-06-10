// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DeleteGroupMonitoringAgentProcessRequest : TeaModel {
        [NameInMap("GroupId")]
        [Validation(Required=true)]
        public string GroupId { get; set; }

        [NameInMap("Id")]
        [Validation(Required=false)]
        public string Id { get; set; }

    }

}
