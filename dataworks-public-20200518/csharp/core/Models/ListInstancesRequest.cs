// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListInstancesRequest : TeaModel {
        [NameInMap("ProjectEnv")]
        [Validation(Required=true)]
        public string ProjectEnv { get; set; }

        [NameInMap("NodeId")]
        [Validation(Required=false)]
        public long NodeId { get; set; }

        [NameInMap("NodeName")]
        [Validation(Required=false)]
        public string NodeName { get; set; }

        [NameInMap("ProjectId")]
        [Validation(Required=true)]
        public long ProjectId { get; set; }

        [NameInMap("BizName")]
        [Validation(Required=false)]
        public string BizName { get; set; }

        [NameInMap("ProgramType")]
        [Validation(Required=false)]
        public string ProgramType { get; set; }

        [NameInMap("PageNumber")]
        [Validation(Required=false)]
        public int? PageNumber { get; set; }

        [NameInMap("PageSize")]
        [Validation(Required=false)]
        public int? PageSize { get; set; }

    }

}
