// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class CreateTriggerHookBody : TeaModel {
        [NameInMap("region_id")]
        [Validation(Required=false)]
        public string RegionId { get; set; }

        [NameInMap("cluster_id")]
        [Validation(Required=false)]
        public string ClusterId { get; set; }

        [NameInMap("project_id")]
        [Validation(Required=false)]
        public string ProjectId { get; set; }

        [NameInMap("action")]
        [Validation(Required=false)]
        public string Action { get; set; }

        [NameInMap("trigger_url")]
        [Validation(Required=false)]
        public string TriggerUrl { get; set; }

    }

}
