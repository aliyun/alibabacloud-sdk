// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class CreateQualityRelativeNodeRequest : TeaModel {
        [NameInMap("EnvType")]
        [Validation(Required=true)]
        public string EnvType { get; set; }

        [NameInMap("MatchExpression")]
        [Validation(Required=true)]
        public string MatchExpression { get; set; }

        [NameInMap("NodeId")]
        [Validation(Required=true)]
        public long NodeId { get; set; }

        [NameInMap("ProjectId")]
        [Validation(Required=true)]
        public long ProjectId { get; set; }

        [NameInMap("TargetNodeProjectName")]
        [Validation(Required=true)]
        public string TargetNodeProjectName { get; set; }

        [NameInMap("ProjectName")]
        [Validation(Required=true)]
        public string ProjectName { get; set; }

        [NameInMap("TableName")]
        [Validation(Required=true)]
        public string TableName { get; set; }

        [NameInMap("TargetNodeProjectId")]
        [Validation(Required=true)]
        public long TargetNodeProjectId { get; set; }

    }

}
