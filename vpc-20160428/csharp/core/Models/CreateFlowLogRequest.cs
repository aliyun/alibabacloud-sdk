// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vpc20160428.Models
{
    public class CreateFlowLogRequest : TeaModel {
        [NameInMap("RegionId")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("FlowLogName")]
        [Validation(Required=false)]
        public string FlowLogName { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("ResourceType")]
        [Validation(Required=true)]
        public string ResourceType { get; set; }

        [NameInMap("ResourceId")]
        [Validation(Required=true)]
        public string ResourceId { get; set; }

        [NameInMap("TrafficType")]
        [Validation(Required=true)]
        public string TrafficType { get; set; }

        [NameInMap("ProjectName")]
        [Validation(Required=true)]
        public string ProjectName { get; set; }

        [NameInMap("LogStoreName")]
        [Validation(Required=true)]
        public string LogStoreName { get; set; }

    }

}
