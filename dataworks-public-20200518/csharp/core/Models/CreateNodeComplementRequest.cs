// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class CreateNodeComplementRequest : TeaModel {
        [NameInMap("ProjectEnv")]
        [Validation(Required=true)]
        public string ProjectEnv { get; set; }

        [NameInMap("StartBizDate")]
        [Validation(Required=true)]
        public string StartBizDate { get; set; }

        [NameInMap("Name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("NodeId")]
        [Validation(Required=true)]
        public long NodeId { get; set; }

        [NameInMap("NodeProjectId")]
        [Validation(Required=true)]
        public long NodeProjectId { get; set; }

        [NameInMap("IncludeNodeIds")]
        [Validation(Required=true)]
        public string IncludeNodeIds { get; set; }

        [NameInMap("ExcludeNodeIds")]
        [Validation(Required=true)]
        public string ExcludeNodeIds { get; set; }

        [NameInMap("BizBeginTime")]
        [Validation(Required=true)]
        public string BizBeginTime { get; set; }

        [NameInMap("BizEndTime")]
        [Validation(Required=true)]
        public string BizEndTime { get; set; }

        [NameInMap("Parallelism")]
        [Validation(Required=true)]
        public bool? Parallelism { get; set; }

        [NameInMap("EndBizDate")]
        [Validation(Required=true)]
        public string EndBizDate { get; set; }

    }

}
